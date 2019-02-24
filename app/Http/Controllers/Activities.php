<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;


class Activities extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveCourse(Request $request,$courseId){
    	
      $name 		= $request->input('fullname');
    	$email 		=	$request->input('email');
    	$phoneNum =	$request->input('number');
    	
    	$data 		=	array('name'				=>	$name,
    										'email'				=>	$email,
    									  'phonenumber'	=>	$phoneNum,
    									  'course'			=>	$courseId
	                 );
    	$validatedData = $request->validate([
																		        'fullname' 			=> 'required',
																		        'email' 				=> 'required|unique:course_reg,email',
																		        'number'				=> 'required'
    																				]);
    	// var_dump($validatedData);
    	// exit;

    	$saveCourse = DB::table('course_reg')->insert($data);
    	return redirect('/thanks');
    }
    public function home(){

      $schools    =  DB::table('schools')->where('promote',1)->get();
      $courses    =  DB::table('courses')
                        ->where('courses.promote',1)
                        ->join('schools','schools.id','=','courses.school')
                        ->select('schools.*','courses.*','schools.page_content as school_page_content')
                        ->get();
     
      $data       =  array('schools'  =>$schools,
                            'courses' =>$courses
                          );

      return view('pages.index',$data);
    }

    public function registercourse($courseId){
      
      $course =   DB::table('courses')
                        ->join('schools', 'courses.school', '=', 'schools.id')
                        ->where('courses.id',$courseId)
                        ->select('courses.*','schools.page_content as school_page_content')                        
                        ->get()
                        ->first();

       $data   =   array('course'=>$course);

      return view('pages.dedicated',$data);
    
    }

    public function getRegisteredUsers($courseId){
       $reg =   DB::table('course_reg')
                        ->where('course_reg.course',$courseId)                    
                        ->get();
      $data = array('users'=>$reg);
      return view('admin.regUsers',$data);
    }

    public function thanks(){
      return view('pages.thanks');
    }

    public function promote($table,$id){
      $update = array('promote'=> 1);
      DB::table($table)->where('id',$id)
                      ->update($update);

      return back();
      
    }

    public function unpromote($table,$id){
      $update = array('promote'=> 2);
      DB::table($table)->where('id',$id)
                       ->update($update);

      return back();
      
    }

}
