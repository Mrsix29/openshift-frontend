<?php
$servername = "backend";
$username = "root";
$password = "123";
$dbname = "cgi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  name, price FROM sushi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>