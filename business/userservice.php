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

  public static function getUserLogin($username, $password)
  {
    $user = UserDAO::getUser($username, $password);
    return $user;
  }

  public static function getAllUsers()
  {
    $users = UserDAO::getAllUsers();
    return $users;
  }

  public static function createPassword()
  {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++)
      {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
      }
    return implode($pass); //turn the array into a string
  }

  public static function createNewUser($username, $password, $admin, $gezinid)
  {
    UserDAO::createUser($username, $password, $admin, $gezinid);
  }

  }
