<?php
include "connect.php";

$first_name=" ";
$phone_number=" ";
$age="0";
$address=" ";

$last_name=$_POST["last"];

$email=$_POST["email"];

if (isset($_POST["first"])){
    $first_name=$_POST["first"];
}

if (isset($_POST["phone"])){
    $phone_number=$_POST["phone"];
}

if (isset($_POST["age"])){
    $age=$_POST["age"];
}

if (isset($_POST["address"])){
    $address=$_POST["address"];
}

$sql="insert into newsletterusers (firstName,lastName,email,phoneNumber,address,age) values ('$first_name','$last_name','$email','$phone_number','$address','$age');";

if($conn->query($sql)===TRUE){
    echo "New client added successfully.<br><a href='../content/HomePage.html'>Home Page</a>";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

$conn->close();

?>