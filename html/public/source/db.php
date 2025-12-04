<?php
$host = "localhost";
$dbname = "jouw_database";
$user = "root";
$pass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
} catch (PDOException $e) {
    die("Fout bij verbinden: " . $e->getMessage());
}
