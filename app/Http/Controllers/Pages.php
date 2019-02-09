<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class Pages extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function createDedicatedPage(Request $request){
   	
   	$input 				=	$request->input('whatYouLearn');
   	$price 				=	$request->input('price');
   	$courseType			=	$request->input('courseType');
   	$pageHeaderTitle	=	$request->input('pageHeaderTitle');
   	$pageImage			=	$request->input('pageImage');
   	$url 				   =	$request->input('url');

   	$data 				=	array('learn'		=>	$input,
   								  'price' 		=> 	$price, 
   								  'courseType'	=>	$courseType,
   								  'pageTitle'	=>	$pageHeaderTitle,
   								  'pageImage'	=>	$pageImage,

   								);
   }

   public function getPage(){
   	# code..
   	return view('pages.dedicated');
   }
}
