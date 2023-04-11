<?php
  session_start();
require_once "./functions.php";
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
        <h1 class=" text-center mt-5 text-light font-weight-bold">My Vocabularies</h1>
            <div class="row mt-5">

                <div class="col-lg-3 text-light">

                   
                    <ul> 
                        <h4>Menu</h4>
                        <li><a class="text-white menu-item" data-target="FormAll" href="words.php">ALl Worlds</a> </li>
                        <li><a class="text-white menu-item" href="#" data-target="FormNew">Add New Notes</a> </li>
                        <li><a class="text-white" href="logout.php">Logout</a> </li>
                    </ul>                    
                </div>
                <div class="col-lg-9 bg-light">


                    <div class="Forms helement" id="FormAll" >

                    
                    <div class="mt-3">
                    <select class="select" name="" id="alpha">
                        <option value="all" selected>all words</option>
                        <option value="A">#A</option>
                        <option value="B">#B</option>
                        <option value="C">#C</option>
                        <option value="D">#D</option>
                        <option value="E">#E</option>
                        <option value="F">#F</option>
                    </select> 
                    <div class="float-right">
                        <form action="" method="post">
                            
                            <input type="search" name="search" id="" placeholder="Search">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">

                        </form>
                   
                    </div>  
                    
                    </div>
                
                <table class="table mt-5" id="words">
                
                    <tbody>
                        <tr>
                            <th>Words</th>
                            <th>Definition</th>
                        </tr>
                        <?php
                              if(isset($_POST['submit'])){
                                $serarchText=$_POST['search'];
                                 $words=getWords($id,$serarchText);
                              }else{
                                
                                $words=getWords($id);
                              }                            
                            $count=count($words);
                            if($count>0){
                            foreach($words as $word){?>
                        <tr>
                            <td><?php echo $word['word']; ?></td>
                            <td><?php echo $word['meaning']; ?></td>
                           
                        </tr>

                           <?php }
                           }else{
                            
                        ?>
                        <tr>
                            
                            <td class="text-center font-weight-bold text-secondary">No Words Found</td>
                           
                        </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table>
                </div>

                <div class="formc helement" id="FormNew"  style="display:none">
                    <h2>Add New Words</h2>
                    <form action="register.php" method="post">
                        <label class="form-label" for="word">Word</label>
                        <input class="form-control" type="text" name="word">
                        <label for="meaning">Meaning</label>
                        <textarea class="form-control" name="meaning"cols="30" rows="10"></textarea>
                        <button type="submit" class="btn btn-primary">Add Word</button>
                        <input type="hidden" name="action" value="add">
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
<script src="./script.js">
  
</script>
</html>