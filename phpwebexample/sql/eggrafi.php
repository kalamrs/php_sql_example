<?php

if(isset($_POST['submit'])){
	include_once 'connect.php';
	
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//diaxeirish sfalmatwn
	//elegxos gia adeia pedia
	
	if(empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password)){
			
			header("Location: " . "../SignUp.php?error=Empty inputs");
		    exit();
	}
	else{
		
		//elegxoume an oi metablhtes mas exoun egkures times
		
		if( !preg_match("/[a-zA-Z]/",$firstName) || !preg_match("/[a-zA-Z]/",$lastName)){
			header("Location: " . "../SignUp.php?error=Format of names invalid");
		    exit();
			
		}
		else{
			
			//elegxoume an to mail einai egkuro
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: " . "../SignUp.php?error=Wrong email");
		        exit();
			}
			else{
				
				$sql = "SELECT *FROM users WHERE username='$username';";
				$result = mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
				if($resultCheck>0){
					
					header("Location: " . "../SignUp.php?error=usertaken");
		           exit();	
				}
				else{
					//password
					$hashedpwd=password_hash($password,PASSWORD_DEFAULT);
					
					//eisagoume ta stoixeia tou xrhsth sthn bash
					
					$sql = "INSERT INTO users(firstName,lastName,email,username,pwd) VALUES('$firstName','$lastName','$email','$username','$hashedpwd'); ";
					$result = mysqli_query($conn,$sql);
					
					header("Location: " . "../index.php?error=Succesfull sign up. Login normally");
		            exit();
				}
			}
			
		}
		
	}		
		
	
	
}
else{
	header("Location: " . "../SignUp.php?error=Submit isn't set");
	exit();
	
}



?>