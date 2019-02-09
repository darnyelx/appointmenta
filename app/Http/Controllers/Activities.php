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
    	// return redirect('/courses');
    }
}
