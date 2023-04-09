<?php
 include_once "./connectiiondb.php";
 $action=$_POST['action']?? 'not correct';

 $status=[
    '1'=>"Duplicate Email Address",
    '2'=>" Email or Password empty",
    '3'=>"Register Success"
 ];

 if($action){
    $statusCode=0;
    $email=$_POST['email']??'';
    $password=$_POST['password']??'';
    // echo $email;
    if($email && $password){
        
        $query="INSERT into users(email,password) values ('{$email}','{$password}')";
        mysqli_query($connect,$query);
       
        if(mysqli_error($connect)){
            
            $statusCode=1;
        }else{
            $statusCode=3;
        }
    }else{
        $statusCode=2;
    }
    header("Location:index.php?status={$statusCode}");
 }
