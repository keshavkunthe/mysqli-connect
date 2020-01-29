<?php
define("DB_HOST","localhost");  //define your server port
define("DB_USERNAME","root");  //define your mysql username
define("DB_PASSWORD","");   //define your mysqli user password
define("DB_NAME","database_demo");  //define your mysql database name

//now we call the mysqli_connect function

$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());


echo "Database Connected Successfully!";

?>