<?php

// user class
class User
  {
  public $id;
  public $username;
  public $password;
  public $postcode;
  public $gemeente;
  public $admin;
  public $email;
  
  public function __construct($id,$username,$password,$postcode,$gemeente,$admin,$email)
  {
    $this->setId($id);
    $this->setUsername($username);
    $this->setPassword($password);
    $this->setPostcode($postcode);
    $this->setGemeente($gemeente);
    $this->setAdmin($admin);
    $this->setEmail($email);
  }
  
  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }
  public function getId()
  {
    return $this->id;
  }
    
  public function setUsername($username)
  {
    $this->username = $username;

    return $this;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPostcode($postcode)
  {
    $this->postcode = $postcode;

    return $this;
  }


  public function getPostcode()
  {
    return $this->postcode;
  }

  public function setGemeente($gemeente)
  {
    $this->gemeente = $gemeente;

    return $this;
  }

  public function getGemeente()
  {
    return $this->gemeente;
  }

  public function setAdmin($admin)
  {
    $this->admin = $admin;

    return $this;
  }

  public function getAdmin()
  {
    return $this->admin;
  }

  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }
  }