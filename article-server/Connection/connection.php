<?php
  // axios headers
  header("Access-Control-Allow-Origin:*");
  header("Access-Control-Allow-Methods: POST");
  header("Access-Control-Allow-Headers: *");
  header("Content-Type: application/json");

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "FAQtendeploysperdayflickrdb";

  $conn = new mysqli($host, $user, $pass, $db);

  if($conn->connect_error) {
    die("Connection failed".$conn->connect_error);
  }
