<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\subcategory;

class discardController extends Controller
{
   public function subcategories($id,$item){
   	$subcategories = subcategory::where('category',$item)->get();
   	// foreach($subcategories as $sub)
   	// 	print $sub;
   	return view('subcategories')->with(compact(['id']))->with(compact(['item']))->with(compact('subcategories'));
   }
}
