<?php
require("../connection/connection.php");
include("../Models/Question.php");
include("../Models/QuestionSkeleton.php");

$search_input = $_POST['search_input'] ?? ' ';

$result = Question::checkQuestion($conn, $search_input);

echo json_encode($result);