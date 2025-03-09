<?php

  require("../Connection/connection.php");

  if(!isset($_POST["firstname"]) || !isset($_POST["email"]) || !isset($_POST["password"])) {

    http_response_code(400);

    echo json_encode([
      "message" => "all info required"
    ]);

    exit();
  }

    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Validation for existing email

    $hashed_password = hash("sha256", $password);

    try {
      $query = $conn->prepare("INSERT INTO users(firstname, email, password) values(?,?,?)");
      $query->bind_param("sss", $firstname, $email, $hashed_password);
      $query->execute();

      $query = $conn->prepare("SELECT * FROM users WHERE email = ?");
      $query->bind_param("s", $email);
      $query->execute();

      $result = $query->get_result();

      $user = $result->fetch_assoc();

      echo json_encode([
        "user" => $user,
      ]);
    } catch (\Throwable $e) {
      http_response_code(400);

      echo json_encode([
        "message" => $e
      ]);
    }