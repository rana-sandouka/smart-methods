<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(array_key_exists('buttonR', $_POST)) { 
$move = 'R'; 

}
else if(array_key_exists('buttonL', $_POST)) { 
            $move = 'L';  
        } 
		else if(array_key_exists('buttonB', $_POST)) { 
            $move = 'B'; 
        } 
		else if(array_key_exists('buttonF', $_POST)) { 
            $move = 'F'; 
        } 
		else if(array_key_exists('buttonS', $_POST)) { 
            $move = 'S'; 
        } 


$sql = "INSERT INTO robot_movment(Moves)VALUES ('$move')";

if ($conn->query($sql) === TRUE) {
  echo $move;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>