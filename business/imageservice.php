<?php

require_once("data/articleimageDAO.php");

class imageService
  {
  public static function createNewArticleImage($url,$articleid)
  {
    ArticleImageDAO::createNewArticleImage($url, $articleid);
  }
  public static function getArticleImages($articleid)
  {
    $arrImages = array();
    $arrImages = ArticleImageDAO::getArticleImages($articleid);
    return $arrImages;
  }
  public static function deleteArticleImages($articleid)
  {
    $arrArticleImages = imageService::getArticleImages($articleid);
    foreach($arrArticleImages as $image)
      {
      unlink($image->url);
      ArticleImageDAO::deleteArticleImage($image->id);
      }
  }
  }