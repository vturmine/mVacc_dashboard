<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

use blog\Http\Requests;
use blog\Percent; 
use blog\Children; 
use blog\Http\Controllers\Controller; 
use blog\Http\Controllers\AgeController;
use DB;

class CurlController extends Controller
{ 
    public function index()
    {   
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rapidpro.io/api/v2/contacts.json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              // Set Here Your Requesred Headers 
                'Content-Type: application/json',  
                'Accept: application/json',                                                  
                'Authorization: Token d655ab870156fb9b90e73da9f45b834e9dacc46c'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //print_r(json_decode($response));
            $array = json_decode(json_encode($response), True);
        }

        
foreach ((array) $array as $item) {
        print_r($item);die();
 }
}
}
