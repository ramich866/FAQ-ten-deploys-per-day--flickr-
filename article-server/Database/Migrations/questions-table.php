<?php
require_once("../../Connection/connection.php");

$query = "CREATE TABLE questions (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
question VARCHAR(255) NOT NULL,
answer TEXT NOT NULL
)";

$result = mysqli_query($conn, $query);