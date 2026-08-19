<?php
session_start();
if (!isset($_SESSION['user_username'])){
  header("Location: " . "index.php?error=Log in please before accessing any page");
	exit;
}
$max_file_size = 10000000;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    echo $_FILES["targetFile"]["name"]."<br>"; 
    $fileToMove = $_FILES["targetFile"]["tmp_name"];
    $destination = "uploads/" . $_FILES["targetFile"]["name"];
    if ($_FILES["targetFile"]["size"]> $max_file_size){
        echo "Error: " . $_FILES["targetFile"]["name"] . " is too big";
    }else{
            if (move_uploaded_file($fileToMove,$destination)){
                echo "The file was uploaded and moved successfully!"." <a href='content/Page2.html'>Upload Again</a><br><a href='content/HomePage.html'>Home Page</a>";
            }else{
                echo "There was a problem moving the file <a href='content/Page2.html'>Upload Again</a><br><a href='content/HomePage.html'>Home Page</a>";
            }
    }
}
?>