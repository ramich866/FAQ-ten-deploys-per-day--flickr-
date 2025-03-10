<?php

require("../Connection/connection.php");
require_once("UserSkeleton.php");

class User 
{
  function insertUser($conn, $username, $email, $password)
  {
    $hashed_password = hash('sha256', $password);
    $query = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $hashed_password);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

  function checkUsername($conn,$username)
  {
    $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            return $result->fetch_assoc();
        } else {
            return false;
        }
  }
}