<?php
//Ένα session είναι ένας τρόπος αποθήκευσης πληροφοριών
//που θα χρησιμοποιηθούν σε πολλές σελίδες
session_start();


if(isset($_POST['submit'])){
	
	include 'connect.php';
	
	$username = $_POST['username'];
	$password= $_POST['password'];
	
	
	//xeirismos errors
	
	if( empty($username) || empty($password)){
		header("Location: " . "../index.php?error=Empty inputs");
	     exit();
		
	}else{
		
		$sql = "SELECT *FROM users WHERE username='$username';";
		$result = mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		
		if($resultCheck == 0){
			
			header("Location: " . "../index.php?error=No such user, sign up");
	        exit();
			
		}else{
			//επιστρέφει τα αποτελέσματα ως σχεσιακό πίνακα
			//χρησιμοποιώντας ως keys τις ονομασίς των πεδίων
			$row=mysqli_fetch_assoc($result);
			if($row  > 0){
				
				$hashedpwd=password_verify($password,$row['pwd']);
				if($hashedpwd==false){
					header("Location: " . "../index.php?error=Wrong password");
	                exit();
					
				}elseif($hashedpwd==true){
					
					//o user kanei login
					//global variable
					$_SESSION['user_id'] = $row['users_id'];//opws erxontai apo thn vasi dedomenvn einai oi onomasies tvn pediwn sthn ousia
					$_SESSION['user_first'] = $row['firstName'];
					$_SESSION['user_last'] = $row['lastName'];
					$_SESSION['user_email'] = $row['email'];
					$_SESSION['user_username'] = $row['username'];
					header("Location: " . "../content/HomePage.php");
	                exit();
					
					
					
				}
				
				
			}
			
			
		}
		
	}
	
}else{
	
	header("Location: " . "../index.php?error=submit not set");
	exit();
}
?>