<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\ApisController ;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Input;



class Activities extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // View Users Appointments
    public function appointments(){

      $userId = '1';



      $appointments = DB::table('appointments')
                        ->where('appointments.user_id','=',$userId);
      //Search Logic
      if (Input::get('appFrom') !== null) {
       $appointments = $appointments->where('appointments.date','>=',Input::get('appFrom'));
      }elseif (Input::get('appOn') !== null) {
       $appointments = $appointments->where('appointments.date','=',Input::get('appOn'));
      }

      if (Input::get('appTitle')  !== null) {
       $appointments = $appointments->where('appointments.title','LIKE','%'.Input::get('appTitle').'%');
      }
      //End of search Logic
              
      $appointments = $appointments->paginate(12);

      $data         = ['appointments'=>$appointments];

      return view('user.myAppointments',$data);
    }

    //View to create an appointment
    public function _createAppointment(){

      return view('user.createAppointment');
    }

    // Controller to create an appointment
    public function createAppointment(Request $request){

      //Validate the user's data and make sure all details are available
       $validatedData = $request->validate([
                                            'title'                  => 'required',
                                            'venue'                  => 'required',
                                            'date'                   => 'required'
                                          ]);

      $data = [ 'title'       =>  $request->title,
                'venue'       =>  $request->venue,
                'date'        =>  $request->date,
                'user_id'     =>  Auth::user()->id,
                'description' =>  json_encode($request->description)
              ];

      //Save Data
     $save = DB::table('appointments')
                ->insert($data);
     if($save){
      return back()->with('success','Appointment saved Successfully');
     }
      return back()->with('error','Appointment not created');
    }

    public function _editAppointment($appointmentId){
     
     $userId = Auth::user()->id;

     $appointment = DB::table('appointments')
                      ->where('appointments.id','=',$appointmentId)
                      //Make sure the user can only edit its own appointment
                      ->where('appointments.user_id','=',$userId)
                      ->select('*','appointments.id as id')
                      ->get()
                      ->first();

     //Check if the appointment user can edit exists                  
    if( !is_null($appointment)){

      $data = ['appointmentDet' => $appointment];

      return view('user.createAppointment',$data);
     }
     //return an error if it can not be edited

      return back()->with('error','Appointment can not be edited');

    }

    public function editAppointment(Request $request,$appointmentId){

      $userId = Auth::user()->id;


      //Validate the user's data and make sure all details are available
       $validatedData = $request->validate([
                                            'title'                  => 'required',
                                            'venue'                  => 'required',
                                            'date'                   => 'required'
                                          ]);

      $data = [ 'title'       =>  $request->title,
                'venue'       =>  $request->venue,
                'date'        =>  $request->date,
                'user_id'     =>  '1',
                'description' =>  json_encode($request->description)
              ];

      //Save Data
     $save = DB::table('appointments')
                ->where('appointments.id','=',$appointmentId)
                //Make sure the user can only edit its own appointment
                ->where('appointments.user_id','=',$userId)
                ->update($data);

     if($save){
      return back()->with('success','Appointment editted Successfully');
     }
      return back()->with('error','Appointment not editted');
    }

    public function getGoogleCalendarEvents(){
      $google = new ApisController();
      $google->init();
      $events = $google->getEvents('en.ng#holiday@group.v.calendar.google.com');

      $data   = [ 'events'    => $events['result']['items'],
                  'nextPage'  => $events['nextToken']
                ];

      return view ('user.googleCalendar',$data);
    }

    public function adoptGoogleCalendar(Request $request){
      
      $events = $request->event;

      foreach ($events as $event ) {
        $google = new ApisController();
        $google->init();

       $getEventDetails = $google->getSingleEvent('en.ng#holiday@group.v.calendar.google.com',$event);

        $data = ['title'       => $getEventDetails['summary'],
                 'date'        => $getEventDetails['start']['date'],
                 'user_id'     => Auth::user()->id,
                 'description' => $getEventDetails['description']
                ];

        if ( $getEventDetails['location'] == null) {
          $data['venue'] = 'uknown';
        }

        $save = DB::table('appointments')
                ->insert($data);
      }

      return back()->with('success','Appointment Imported Successfully');


    }

}
