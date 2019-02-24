<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB as DB;

use Illuminate\Http\Request;


class Pages extends BaseController{
    
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function _createSchool(Request $request){
   	
   	$name 	    =	$request->input('schoolName');
   	$title 		 =	$request->input('schoolTitle');
   	
      $validatedData = $request->validate([
                                            'schoolName'                   => 'required',
                                            'schoolTitle'                  => 'required|unique:schools,school_name',
                                            'schoolBanner'                 => 'required|file|image'
                                          ]);

      //try to save file 
      try {      
      	$path             =  $request->file('schoolBanner')->store('public/appImages');

      } catch (Exception $e) {
         // TODO perform a better action here
         return false;
      }

    
   	$pageContent				=	array( 'name'		         =>	$name,
   								             'title' 	         => $title, 
   								             'schoolBanner'	   =>	$path,

   								    );

      $data                   = array( 'school_name'  => $name,
                                       'page_content' => json_encode($pageContent),
                                       'status'       => '1',
                                    );

      DB::table('schools')->insert($data);
      return 'saved';

   }

   public function _createCourse(Request $request){
      
      $name        = $request->input('courseName');
      $title       = $request->input('courseTitle');
      $wywl        = $request->input('wywl');
      $price       = $request->input('price');
      $school      = $request->input('school');

      $wywl        = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "", $wywl);

      $validatedData = $request->validate([
                                            'courseName'                   => 'required|unique:courses,course_name',
                                            'courseTitle'                  => 'required',
                                            'wywl'                         => 'required',
                                            'price'                        => 'required',
                                            'school'                       => 'required'
                                          ]);

    
      $pageContent            =  array( 'name'              => $name,
                                        'title'             => $title, 
                                        'wywl'              => htmlentities($wywl),
                                        'price'             => $price,
                               );

      $data                   = array( 'course_name'  => $name,
                                       'school'       => $school,
                                       'page_content' => json_encode($pageContent),
                                       'status'       => '1'
                                    );

      DB::table('courses')->insert($data);
      return 'saved';

   }

   public function _editCourse(Request $request,$id){
      
      $name        = $request->input('courseName');
      $title       = $request->input('courseTitle');
      $wywl        = $request->input('wywl');
      $price       = $request->input('price');
      $school      = $request->input('school');

      $wywl        = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "", $wywl);

      $validatedData = $request->validate([
                                            'courseName'                   => 'required|unique:courses,course_name',
                                            'courseTitle'                  => 'required',
                                            'wywl'                         => 'required',
                                            'price'                        => 'required',
                                            'school'                       => 'required'
                                          ]);

    
      $pageContent            =  array( 'name'              => $name,
                                        'title'             => $title, 
                                        'wywl'              => $wywl,
                                        'price'             => $price,
                               );

      $data                   = array( 'course_name'  => $name,
                                       'school'       => $school,
                                       'page_content' => json_encode($pageContent),
                                       'status'       => '1'
                                    );

      DB::table('courses')
            ->where('id', $id)
            ->update($data);
      return back()->withMessage('completed');

   }

   public function _editSchool(Request $request,$id){
      
      $name        = $request->input('schoolName');
      $title       = $request->input('schoolTitle');
      
      $validatedData = $request->validate([
                                            'schoolName'                   => 'required',
                                            'schoolTitle'                  => 'required|unique:schools,school_name',
                                          ]);


      if ($request->file('schoolBanner') != Null) {
        
         //try to save file 
         try {      
            
            $path             =  explode('public/',$request->file('schoolBanner')->store('public/appImages'))[1];

         } catch (Exception $e) {
            // TODO perform a better action here
            return false;
         }
        
      }else{
         $path = $request->input('editImage');
      }

    
      $pageContent            =  array( 'name'              => $name,
                                        'title'             => $title, 
                                        'schoolBanner'      => $path,

                               );

      $data                   = array( 'school_name'  => $name,
                                       'page_content' => json_encode($pageContent),
                                    );

      DB::table('schools')
            ->where('id', $id)
            ->update($data);
      return 'edited';
   }
	
		public function allCourses(){
			
			$courses		=	 DB::table('courses')
											->join('schools','schools.id','=','courses.school')
											->orderBy('schools.school_name')
											->select('*','schools.id as school_id','courses.id as courseId','courses.promote as promote')
											->get();
			$data 			=	array('courses'=>$courses);
			return view('admin.allCourses',$data);

		}

   public function editSchool($school){

      $schoolDet  =   DB::table('schools')
                                          ->where('id',$school)
                                          ->get()
                                          ->first();
      if ($schoolDet == NULL) {
        return 'false';
      }

      $data       =  array('schoolDet' =>$schoolDet);
      return view('admin.createSchool',$data);

   }

   public function editCourse($id){

      $courseDet  =   DB::table('courses')
                                          ->where('id',$id)
                                          ->get()
                                          ->first();

      $pageContent;
      if ($courseDet != Null) {
   
         $pageContent  =  json_decode($courseDet->page_content);
      }

      $schools    =  DB::table('schools')->get();

      $data       =  array('schools'   =>$schools,
                           'courseDet' =>$courseDet,
                           'pageContent'=>$pageContent
                           );

      return view('admin.createCourse',$data);
   }

   public function createSchool(){
      $data    =   array('schoolDet'    => null);
      return view('admin.createSchool',$data);
   }

   public function createCourse(){
      
      $schools    =  DB::table('schools')->get();
      $data       =  array('schools'=>$schools);

      return view('admin.createCourse',$data);
   }

   public function viewSchools(){
          
      $schools    =  DB::table('schools')
                              ->get();
      $data       =  array('schools'=>$schools);

      return view('admin.school-stats',$data);
   }

   public function adminSchoolCourses($schoolId){
      
      $filter  =     array('schools.id'          =>   $schoolId,
                           );


      $courses =     DB::table('courses')
                        ->join('schools', 'courses.school', '=', 'schools.id')
                        ->where($filter)
                        ->select('courses.*','courses.id as courseId','schools.*',DB::raw( "( SELECT count(*) FROM course_reg WHERE courses.id = course_reg.course  ) as registered"))
                        ->get();
      
      $data    =  array('courses'=>$courses);

      return view('admin.schoolCourses',$data);
   }

   public function getSchoolCourses($schoolId){

      $filter  =   array('id'=>$schoolId);
      
      //get school
      $school  =  	DB::table('schools')
                        ->where($filter)
                        ->get()
                        ->first();

     
      $courses =     DB::table('courses')
                        ->join('schools', 'courses.school', '=', 'schools.id')
                        ->where('courses.school',$schoolId)
                        ->select('courses.*')
                        ->get();

      $data    =     array('school'    =>$school,
                           'courses'   =>$courses
                        );

   	return view('school-of',$data);
   }


}
