

<?php
//Justin Tackling N01457800
$servername = "localhost";
$username = "cislocal";
$password = "letmein";

// Create connection
 $conn = new mysqli($servername, $username, $password);

 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";
 ?>
