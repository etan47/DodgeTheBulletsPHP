<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dodgethebullets";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY coins DESC, date) AS rank, name, coins, date FROM leaderboard LIMIT 10";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo $row["rank"]. "," . $row["name"]. "," . $row["coins"]. "," . $row["date"]. "\n";
}
$conn->close();
?>