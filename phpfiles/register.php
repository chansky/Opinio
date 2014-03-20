<?php 
include("config.php");

//check if post
if($_SERVER["REQUEST_METHOD"] == "POST") {

    //check if user and password fields are set
    if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phonenumber']) && isset($_POST['email']) ) {
    	
    	//grab correct uid
    	
    	$username = $_SESSION['login_user'];
    	$password = $_POST['password'];
    	$phonenumber = $_POST['phonenumber'];
    	$email = $_POST['email'];
    	
    	//$username = "dfd";
    	//$password = "sds";
    	//$phonenumber = 121;
    	//$email = "dfsdf";
    	
    	
    	//insert new record into database
    	
   $sql= "INSERT INTO User (phonenumber, username, email, password) VALUES ( '$phonenumber', '$username', '$email', '$password')";
   
   
   
	mysql_query($sql);
	echo mysql_errno($bd) . ": " . mysql_error($bd) . "\n";
    	
    	
    	//log new user in
    
    }
    else {
    echo "Please resubmit";
    }

}


?>