<?php 
session_start();
include("config.php");

//check if post
if($_SERVER["REQUEST_METHOD"] == "POST") {

    //check if user and password fields are set
    
    	
    	//grab authorname form loggedin user
    	$username = $_SESSION['login_user'];
    	

    	
    	//insert new record into database
    	
   	$sql = "DELETE FROM User WHERE username='$username'"; 
	mysql_query($sql);
	
	echo mysql_errno($bd) . ": " . mysql_error($bd) . "\n";
    	
    	
    	//log new user in
   

}

?>