<?php
require("../connection/connection.php");
include("../Models/Question.php");
include("../Models/QuestionSkeleton.php");

if (!isset($_POST['question']) || !isset($_POST['answer'])) {
  exit();
}

$question = $_POST['question'];
$answer = $_POST['answer'];

$faq = Question::createFaq($conn, $question, $answer);
