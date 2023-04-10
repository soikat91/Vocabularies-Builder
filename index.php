<?php
session_start();
  include_once "./functions.php";

  $loginId=$_SESSION['id']??'';
  if($loginId){
    header("Location:words.php");
  }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabolary Builder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
     
  <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">

            </div>
             <div class="col-lg-6">
                <h1 class="text-center mt-5">My Vocabularies</h1>

                <div class="text-center mt-5">
                    <a  id="login" href="#">Login</a> | <a id="register" href="#">Register Account</a>
                </div>
                <div class="card">

                 <div class="card-body bg-secondary text-white font-weight-bold border">
                    
                    <form id= "form" action="register.php" method="post">
                        <h4 class="text-center mb-5">Login</h4>
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        
                        <p><?php 
                          $status=$_GET['status']??0;
                          
                          echo getStatus($status);
                        ?></p>
                        <button type="submit" class="btn btn-primary mt-1">Submit</button>
                        <input type="hidden" id="action" name="action" value="login">
                    </form>
                 </div>

               

                </div>
                
            </div>
             <div class="col-lg-3">
                
            </div>
        </div>
  </div>


<script src="./script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<script>
  ;(function($){
    
    $(document).ready(function(){
       // alert("hi");
        $("#login").on("click",function(){
           $("#form h4 ").html("Login");
           $("#action").val("login");
        })

        $("#register").on("click",function(){
          $("#form h4").html("Register");
          $("$action").val("register");
        })
    
    })
    

})(jQuery);
</script>
</html>