<?php  
	session_start();//Απαραιτητο όπου θέλουμε να χρησιμοποιήσουμε τον $_SESSION θέλει και session start
	$_SESSION=[];	
	session_destroy();

	header("Location: " . "index.php?error=Successfull logout");
	exit;
?>