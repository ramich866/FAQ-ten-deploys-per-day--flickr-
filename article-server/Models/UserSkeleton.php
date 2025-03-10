<?php

class UserSkeleton 
{
  private $id;
  private $username;
  private $email;
  private $hashed_password;


  // getters
  function getId() 
  { 
    return $this->id;
  }
  function getUsername() 
  { 
    return $this->username;
  }
  function getEmail() 
  {
    return $this->email;
  }
  function getHashedPassword() 
  {
    return $this->hashed_password;
  }
  
  //setters
  function setId($id) 
  { 
    return $this->id;
  }
  function setUsername($username) 
  { 
    return $this->username;
  }
  function setEmail($email) 
  {
    return $this->email;
  }
}