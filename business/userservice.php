<?php

require_once("data/newspostDAO.php");
require_once("data/userDAO.php");

class userService
  {
  public static function getUserById($id)
  {
    $user = UserDAO::getUserById($id);
    return $user;
  }
  
  public static function getUserLogin($username,$password)
  {
    $user = UserDAO::getUser($username, $password);
    return $user;
  }
  public static function getAllUsers()
  {
    $users = UserDAO::getAllUsers();
    return $users;
  }
  }