<?php

require("../Connection/connection.php");
require_once("/QuestionSkeleton.php");

Class Question 
{
  public static function createFaq($conn, $question, $answer)
  {
      $query = "INSERT INTO questions (question, answer) VALUES (?, ?)";
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ss", $question, $answer);
      if ($stmt->execute()) {
          return true;
      } else {
          return false;
      }
  }

  function checkQuestion($conn,$question)
  {
    $query = "SELECT * FROM questions WHERE question = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $question);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            return $result->fetch_assoc();
        } else {
            return false;
        }
  }
}