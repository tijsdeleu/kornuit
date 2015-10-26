<?php

require_once("data/reactieDAO.php");
require_once("data/newspostDAO.php");
require_once("data/userDAO.php");

class reactieService
  {
    public static function getAantalReacties($postid)
    {
      $arrReacties = ReactieDAO::getAllReactionsFromPost($postid);
      $aantal = count($arrReacties);
      return $aantal;
    }
    
    public static function getReactiesFromPost($post)
    {
      $arrReacties = ReactieDAO::getAllReactionsFromPost($post->id);
      return $arrReacties;
    }
    
    public static function plaatsReactie($inhoud, $auteurid, $articleid)
    {
      $datum = date("Y-m-d H:i:s");
      ReactieDAO::createNewReaction($inhoud, $auteurid, $datum, $articleid);
    }
  }