<?php

require_once("data/newspostDAO.php");
require_once("data/userDAO.php");

class newspostService
  {
  public static function showAllPosts()
  {
    $allPosts = NewspostDAO::getAllnewsposts();
    rsort($allPosts);
    return $allPosts;
  }
  public static function showLatestPosts()
  {
    $allPosts = NewspostDAO::getAllnewsposts();
    rsort($allPosts);
    $allPosts = array_slice($allPosts, 0, 5);
    return $allPosts;
  }
  

  }