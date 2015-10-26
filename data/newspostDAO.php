<?php

require_once("entities/newspost.class.php");
require_once("dbconfig.class.php");

class NewspostDAO
  {

  public static function getAllnewsposts()
  {
    $sql = "select * from newspost";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    $arrAllPosts = array();
// RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $newspost = new Newspost($rij["id"], $rij["titel"], $rij["inhoud"], $rij["auteurid"], $rij["datum"]);
      array_push($arrAllPosts, $newspost);
      }

    $dbh = null;
    return $arrAllPosts;
  }

  public static function newPost($titel, $inhoud, $auteurid, $datum)
  {
    $sql = "insert into newspost (titel, inhoud, auteurid, datum) values ('" . $titel . "', '" . $inhoud . "', '" . $auteurid . "', '" . $datum . "')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $dbh = null;
  }

  public static function deletePost($id)
  {
    $sql = "delete from newspost where id=" . $id;
    $dbh = new PDO(dbconfig::$DB_CONNSTRING, dbconfig::$DB_USERNAME, dbconfig::$DB_PASSWORD);
    $dbh->query($sql);
    $dbh = null;
  }

  public static function getNewspost($id)
  {
    $sql = "select * from newspost where id=" . $id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
// RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $newspost = new Newspost($rij["id"], $rij["titel"], $rij["inhoud"], $rij["auteurid"], $rij["datum"]);
      }

    $dbh = null;
    return $newspost;
  }

  public static function editPost($id, $titel, $inhoud, $auteurid, $datum)
  {
    $sql = "update newspost set titel='" . $titel . "', inhoud='" . $inhoud . "', auteurid='" . $auteurid . "', datum='" . $datum . "' where id=" . $id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
  }

  }
