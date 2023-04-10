<?php


 function getStatus($statusCode=0){
    $status=[
        '0'=>'',
        '1'=>"Duplicate Email Address",
        '2'=>" Email or Password empty",
        '3'=>"Register Success",
        '4'=>"Email and Password Does Not Match",
        '5'=>"Email Does Not Exit"
     ];

     return $status[$statusCode];
 }