<?php
$servername = "localhost";
$username = "nsad04";
$password = "E24h7U5kA9HJhq5VM98pm7p5zmJpf8AK";
$dbname = "nsapool";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
