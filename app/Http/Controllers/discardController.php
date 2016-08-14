<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\subcategory;
use App\maplocation;
use App\recyclelocation;
use App\comment;
use Session;


class discardController extends Controller
{
   public function subcategories($id,$item){
   	$subcategories = subcategory::where('category',$item)->get();
   	// foreach($subcategories as $sub)
   	// 	print $sub;
   	return view('subcategories')->with(compact(['id']))->with(compact(['item']))->with(compact('subcategories'));
   }

    public function getlocation($category,$subcategory){
    	$values = maplocation::where('category',$category)->where('subcategory',$subcategory)->get();
    	return view('map',compact('values'));
    }

    public function details(Request $request, $refid){
      $details = recyclelocation::where('refid',$refid)->get()[0];
      $comments  = comment::where('refid',$refid)->get();
     $value = $request->session()->get('name', 'null');
      return view('locationdetails')->with(compact('details'))->with(compact('comments'))->with(compact(['value']));
    }
}