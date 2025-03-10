<?php

class QuestionSkeleton 
{
  private $id;
  private $question;
  private $answer;

  // getters
  function getId() 
  { 
    return $this->id;
  }
  function getQuestion() 
  { 
    return $this->question;
  }
  function getAnswer() 
  {
    return $this->answer;
  }
  
  //setters
  function setId($id) 
  {
    return $this->id;
  }
  function setQuestion($question) 
  {
    return $this->question;
  }
  function setAnswer($answer) 
  {
    return $this->answer;
  }
}