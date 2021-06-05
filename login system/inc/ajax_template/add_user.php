<?php

include_once "../../autoload.php";

// Get all data

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$cell = $_POST['cell'];
$password= $_POST['password'];

// make password hash

$hash_pass = password_hash($password, PASSWORD_DEFAULT);



// Send data to database
create("INSERT INTO users (name, email, username, cell, password) VALUES ('$name','$email','$username','$cell','$hash_pass')");





?>