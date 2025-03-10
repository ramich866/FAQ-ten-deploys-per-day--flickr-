<?php
require("../../Connection/connection.php");

$query = "CREATE TABLE users (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL UNIQUE
)";

$result = mysqli_query($conn, $query);