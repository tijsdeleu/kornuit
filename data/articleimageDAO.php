<?php

require_once("dbconfig.class.php");
require_once("entities/articleimage.class.php");

class ArticleImageDAO
  {

  public static function createNewArticleImage($url, $articleid)
  {
    $sql = "insert into article_image (url,articleid) values ('" . $url . "'," . $articleid . ")";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $dbh = null;
  }

  public static function getArticleImages($articleid)
  {
    $sql = "select * from article_image where articleid=" . $articleid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    $arrImages = array();
    // RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $image = new ArticleImage($rij["id"], $rij["url"], $rij["articleid"]);
      array_push($arrImages, $image);
      }

    $dbh = null;
    return $arrImages;
  }

  public static function deleteArticleImage($id)
  {
    $sql = "delete from article_image where id=" . $id;
    $dbh = new PDO(dbconfig::$DB_CONNSTRING, dbconfig::$DB_USERNAME, dbconfig::$DB_PASSWORD);
    $dbh->query($sql);
    $dbh = null;
  }

  }
