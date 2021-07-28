<?php 

   require 'dbconnect.php';

   function register($username, $password)
   {

	$conn = connect();
	$sql= $conn -> prepare ("INSERT INTO USERS (username, password) VALUES (?, ?)");
    $sql -> bond_param ("ss", $username, $password);
    return $sql -> execute();
   }


 ?>