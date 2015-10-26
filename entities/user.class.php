<?php

// user class
class User
  {

  public $id;
  public $username;
  public $password;
  public $admin;
  public $gezinid;

  public function __construct($id, $username, $password, $admin, $gezinid)
  {
    $this->setId($id);
    $this->setUsername($username);
    $this->setPassword($password);
    $this->setAdmin($admin);
    $this->setGezinid($gezinid);
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

  public function setAdmin($admin)
  {
    $this->admin = $admin;

    return $this;
  }

  public function getAdmin()
  {
    return $this->admin;
  }

  public function setGezinid($gezinid)
  {
    $this->gezinid = $gezinid;
    return $this;
  }

  public function getGezinid()
  {
    return $this->gezinid;
  }

  }
