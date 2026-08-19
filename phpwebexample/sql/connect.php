<?php
$database_server_name="localhost";
$database_user_name="root";
$database_password="1993";
$database_name="pharmacy";

$conn=mysqli_connect($database_server_name,$database_user_name,$database_password,$database_name);

if($conn==FALSE){
    die("Connection Unsuccesfull");
}
?>