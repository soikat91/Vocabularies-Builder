<?php
define('DB_Host', 'localhost');
define('DB_Database', 'words');
define('DB_User', 'root');
define('DB_Password', '');


$connect=mysqli_connect(DB_Host,DB_User,DB_Password,DB_Database);
if(!$connect){
    throw new Exception("Database Conntection Error");
    
}else{
    
}
