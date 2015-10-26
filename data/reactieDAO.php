<?php

require_once("dbconfig.class.php");
require_once("entities/reactie.class.php");

class ReactieDAO
  {

  public static function createNewReaction($inhoud, $auteurid, $datum, $articleid)
  {
    $sql = "insert into reacties (inhoud, auteurid, datum, article_id) values ('".$inhoud."','".$auteurid."','".$datum."','".$articleid."')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
  }

  public static function getAllReactionsFromPost($postid)
  {
    $sql = "select * from reacties where article_id=" . $postid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    $arrReacties = array();
    
    // RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $reactie = new Reactie($rij["id"], $rij["inhoud"], $rij["auteurid"], $rij["datum"], $rij["article_id"]);
      array_push($arrReacties, $reactie);
      }
    $dbh = null;
    return $arrReacties;
  }

  }
