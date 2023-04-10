<?php
  session_start();

  $id=$_SESSION['id'];
  if(!$id){
    header("Location:index.php");
  }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary Builder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <section class="">
        <div class="container bg-secondary">
        <h1 class=" text-center mt-5">My Vocabularies</h1>
            <div class="row mt-5">

                <div class="col-lg-3 text-light">

                   
                    <ul> 
                        <h4>Menu</h4>
                        <li><a class="helement" data-target="" href="#">ALl Worlds</a> </li>
                        <li><a href="#" data-target="">Add New Notes</a> </li>
                        <li><a class="text-white" href="logout.php">Logout</a> </li>
                    </ul>                    
                </div>
                <div class="col-lg-9 bg-light">
                    <div class="mt-3">
                    <select class="select" name="" id="">
                        <option value="" selected>Al Words</option>
                        <option value="">B</option>
                        <option value="">B</option>
                    </select>   
                    <input class="float-right" type="search" name="search" id="" placeholder="Search">
                    </div>
                
                <table class="table mt-5 helement">
                
                    <tbody>
                        <tr>
                            <th>Words</th>
                            <th>Definition</th>
                        </tr>
                        <tr>
                            <td>Lorem, ipsum dolor</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, dolore?</td>
                        </tr>
                    </tbody>
                </table>


                <div class="form helement" style="display:none">
                    <h2>Add New Words</h2>
                    <form action="">
                        <label class="form-label" for="word">Word</label>
                        <input class="form-control" type="text" name="word" id="">
                        <label for="meaning">Meaning</label>
                        <input class="form-control" type="text" name="word" id="">
                        <button class="btn btn-primary">Add Word</button>
                    </form>
                 </div>

                </div>

           

            </div>


        </div>
      
  </section>    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>