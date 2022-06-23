<?php

// MySQL Connection Details
$server="localhost";
$username="root";
$passwd="";

// Contact form Variables
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phone'];
$message=$_POST['message'];

echo $name.$email.$phoneno.$message;
?>