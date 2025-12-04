<?php
include 'functions.php';

$users = getAllUsers();
foreach($users as $user) {
    echo $user['naam'] . "<br>";
}