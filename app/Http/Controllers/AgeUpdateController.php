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
                                  ->where('age', [20, 23]) 
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

        $requests = Percent::select('uuid', 'age', 'dob')    
                                  ->where('age', [21, 23]) 
                                  ->get();  

        foreach ($requests as $request) {
           $uuid = $request->uuid; 
           $dob = $request->dob;
           $age = (new AgeController)->getAge($dob); 
           DB::table('zambia_percent')
                     ->where('uuid', $uuid)
                     ->update([
                      'age' => $age
           ]);

        }  
       
    } 
}