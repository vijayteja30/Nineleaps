<?php
 $host="localhost";
 $user="veera";
 $pass="";
 $conn=mysqli_connect($host,$user,$pass);
 $db=mysqli_select_db($conn,'Nineleaps');
 if(!$db )
	 die('<h1 style="color:red">Error in Connecting to Database</h1>');
 



?>