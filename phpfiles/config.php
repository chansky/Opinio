<?php
$mysql_hostname = "engr-cpanel-mysql.engr.illinois.edu";
$mysql_user = "mtmarsh2_opinio";
$mysql_password = "opinio3";
$mysql_database = "mtmarsh2_opinio";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
?>
