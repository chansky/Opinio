<?php session_start();
include("config.php");

 if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
//var_dump($_POST);

//echo "end";

$sql="SELECT * FROM User WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$myusername;
echo "true";

}
else 
{
$error="Your Login Name or Password is invalid";
echo "false";

}

}
?>