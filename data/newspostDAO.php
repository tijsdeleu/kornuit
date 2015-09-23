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
    foreach($arrResult as $rij)
      {
        $newspost = new Newspost($rij["id"],$rij["titel"],$rij["inhoud"],$rij["auteurid"],$rij["datum"]);
        array_push($arrAllPosts,$newspost);
      }
    
    $dbh = null;
    return $arrAllPosts;
  }
  }