<?php
session_start();
 include_once "./connectiiondb.php";
 $action=$_POST['action']?? 'not correct';

 $status=[
    '1'=>"Duplicate Email Address",
    '2'=>" Email or Password empty",
    '3'=>"Register Success",
    '4'=>"Email and Password Does Not Match"
 ];

 if('register'==$action){
    $statusCode=0;
    $email=$_POST['email']??'';
    $password=$_POST['password']??'';
    // echo $email;
    if($email && $password){

        $passwordHash=password_hash($password,PASSWORD_BCRYPT);
    
        $query="INSERT into users(email,password) values ('{$email}','{$passwordHash}')";
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
 }else if('login'==$action){

    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email && $password){

        $query="Select id,password from users where email='$email' ";
        $result=mysqli_query($connect,$query);
        if(mysqli_num_rows($result)>0){

            $data=mysqli_fetch_assoc($result);
            $_password=$data['password'];
            $_id=$data['id'];
            if(password_verify($password,$_password)){
                
                $_SESSION['id']=$_id;
                header("Location:words.php");
                die();
                 
            }else{
                $statusCode=4;
            }
        }else{
            $statusCode=5;
        }
    }else{
        $statusCode=2;
    }

    header("Location:index.php?status={$statusCode}");

 }
