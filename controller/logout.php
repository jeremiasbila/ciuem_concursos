<?php 
	session_start();
	if(isset($_GET['Logout'])){
		session_destroy(); 
		header("location:../view/website/index.php");
		
	}

?> 