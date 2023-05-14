<?php
$server="localhost";
$username="root";
$password="";
$database="books";
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


function Select_Record($sql,$conn)
{
  if($conn->query($sql)==TRUE){
    $result = $conn->query($sql);
    return $result;
  }
  else
    echo "error message";
}
?>