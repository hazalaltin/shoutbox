<?php

$con=mysqli_connect("localhost","root","","shoutit");

//test connection_aborted
if(mysqli_connect_errno()){
	
	echo "failed to connect";  
	


}

?>
