<?php

// System Connection.
$server='localhost:3306';
// Place the username for the MySQL database here 
$user='Hazem';
// Place the password for the MySQL database here 
$pass='';
// Place the name for the MySQL database here 
$database='economies_db';
// Run the connection here   
$conn=mysqli_connect($server, $user, $pass, $database);
  if(!$conn)
  	  echo "No Connection";
// Now you can use the variable $conn to connect in your queries      
  	
	    
?>