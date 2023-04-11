<?php
include_once "./connectiiondb.php";

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

 function getWords($id,$serarchText=null){

    global $connect;
    if($serarchText){
        $query="Select * from word where user_id='$id' and  word like '$serarchText%' ";
    }else{ 
    $query="Select * from word where user_id='$id' ";
    }
    $result=mysqli_query($connect,$query);
    $data=[];
    while($_data=mysqli_fetch_assoc($result)){
        array_push($data,$_data);
    }
    return $data;

 }