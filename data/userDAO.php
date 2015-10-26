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
    if (!empty($arrResult))
    {
      // RESULT ARRAY UITLEZEN
      foreach ($arrResult as $rij)
        {
        $user = new User($rij["id"], $rij["username"], $rij["password"], $rij["admin"], $rij["gezinid"]);
        }

      $dbh = null;
      return $user;
    }

    if (empty($arrResult))
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
      $user = new User($rij["id"], $rij["username"], $rij["password"], $rij["admin"], $rij["gezinid"]);
      }

    $dbh = null;
    return $user;
  }

  public static function getAllUsers()
  {
    $sql = "select * from user";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    $users = array();
    foreach ($arrResult as $rij)
      {
      $user = new User($rij["id"], $rij["username"], $rij["password"], $rij["admin"], $rij["gezinid"]);
      array_push($users, $user);
      }
    $dbh = null;
    return $users;
  }

  public static function createUser($username, $password, $admin, $gezinid)
  {
    $sql = "insert into user (username, password, admin, gezinid) values ('" . $username . "','" . $password . "'," . $admin . "," . $gezinid . ")";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
  }

  }
