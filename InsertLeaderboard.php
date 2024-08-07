<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dodgethebullets";

$scoresetter = $_POST["scoresetter"];
$numCoins = $_POST["numCoins"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO leaderboard (name, coins, date) VALUES ('" . $scoresetter . "', " . $numCoins . ", CURDATE())";
$result = $conn->query($sql);
$conn->close();
?>