<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

use blog\Http\Requests;
use blog\Percent; 
use blog\Children; 
use blog\Http\Controllers\Controller; 
use blog\Http\Controllers\AgeController;
use DB;

class AgeUpdateController extends Controller
{ 

    public function updateChildren()
    { 

        $requests = Children::select('uuid', 'age', 'dob')    
                                  ->where('age', [21, 23]) 
                                  ->get();  

        foreach ($requests as $request) {
           $uuid = $request->uuid; 
           $dob = $request->dob;
           $age = (new AgeController)->getAge($dob); 
           DB::table('zambia_children')
                     ->where('uuid', $uuid)
                     ->update([
                      'age' => $age
           ]);

        }  
       
    } 

    public function updatePercent()
    { 

        $requests = Children::select('uuid', 'created_at', 'province')    
                                  ->where('created_at', ['2018-03-20 03:48:41','2018-03-21 11:50:01']) 
                                  ->get();  

        foreach ($requests as $request) {
           $uuid = $request->uuid;
           $province = $request->province;
           //$age = (new AgeController)->getAge($dob); 
           DB::table('zambia_percent')
                     ->where('uuid', $uuid)
                     ->update([
                      'province' => $province
           ]);

        }  
       
    } 
}
