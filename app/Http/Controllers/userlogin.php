<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;


class userlogin extends Controller
{
       public function checkDB(Request $request){
       	$input =  $request->all();
       	//echo $input;
       	//return response()->json(['responseText' => 'Success!'], 200);
       	 return Response::json(array(
                    'success' => true,
                    'data'   => $input['username']
                ));
       }

}
