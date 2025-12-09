<?php
$host = "mysql";
$dbname = "m6prog_digipost";
$user = "m6prog_digipost";
$pass = "ikben89die@guy";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

