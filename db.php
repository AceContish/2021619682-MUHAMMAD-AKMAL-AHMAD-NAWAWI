<?php 

//foreach($_SERVER as $key => $value){
  //    echo "<tr><td>" . $key . ":</td><td>" . $value . "</td><tr><br><br>";
//}

$servername = "localhost";
$username = "akmalace_hafiedz";
$password = "hafiedz@2002";
$dbname = "akmalace_hafiedzhelmi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Error in DB Connection";
}

 ?>