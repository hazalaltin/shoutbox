<?php
include 'database.php';

//Check if form submitted
if (isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con,$_POST['user']);
	    $message = mysqli_real_escape_string($con,$_POST['user']);
	    //set timezone
	date_default_timezone_Set('America/New_York');
	$time = date('h:ı:s a', time());
	
	//validate input
	
	if(!isset($user) || $user == '' || !isset($message) || $message =='')
	{	$error = "please fill your name and message ";
		header("Location : index.php?error=".urlencode($error));
		exit();
	}	else { 
             $query = "INSERT INTO shouts (user,message,time)
                       VALUES ('$user', '$message', '$time')";					   
	
        if(!mysqli_query($con, $query)){
			die('Error: ' .mysql_error($con));
						
		}	
        else {
              
			  header("Location : index.php");
			  exit();
		}		

					}
}

?>
