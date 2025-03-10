<?php
require("../connection/connection.php");
include("../Models/User.php");
include("../Models/UserSkeleton.php");

if (!isset($_POST['username']) || !isset($_POST['password'])) {
  exit();
}

$username = $_POST['username'];
$password = $_POST["password"];

$user = User::checkUsername($conn, $username);

if ($user) {
  echo json_encode([
      "user" => [
          "id" => $user->getId(),
          "username" => $user->getUsername(),
          "email" => $user->getEmail(),
          "password" => $user-> getHashedPassword() 
      ]
  ]);
} else {
  echo json_encode([
      "status" => "error",
      "message" => "Invalid username or password"
  ]);
}