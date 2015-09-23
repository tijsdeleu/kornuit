<?php

require_once("entities/user.class.php");
require_once("dbconfig.class.php");

class UserDAO
  {

  public static function getUser($username, $password)
  {
    $user = null;
    $sql = "select * from user where username='" . $username . "' and password='" . $password . "'";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    if(!empty($arrResult))
    {
    // RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $user = new User($rij["id"], $rij["username"], $rij["password"], $rij["postcode"], $rij["gemeente"], $rij["admin"], $rij["email"]);
      }

    $dbh = null;
    return $user;
    }
    
    if(empty($arrResult))
    {
      return null;
    }
  }

  public static function getUserById($id)
  {
    $sql = "select * from user where id=" . $id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    // RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $user = new User($rij["id"], $rij["username"], $rij["password"], $rij["postcode"], $rij["gemeente"], $rij["admin"], $rij["email"]);
      }

    $dbh = null;
    return $user;
  }

  }
