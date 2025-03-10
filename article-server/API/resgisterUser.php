<?php
require("../connection/connection.php");
include("../Models/User.php");
include("../Models/UserSkeleton.php");

if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    exit();
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$user = User::insertUser($conn, $username, $email, $password);

if($user) {
  echo json_encode([
    "status" => "success"
  ]);
}
  else {
    echo json_encode([
    "status" => "error",
    "message" => "Invalid input"
  ]);
}