<?php
$con = new mysqli("localhost", "santosh", "santosh", "Salon");

 if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
}

 //echo "Connected Successful!";

 