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
  public static function addPost($titel,$inhoud,$auteurid,$datum)
  {
    NewspostDAO::newPost($titel, $inhoud, $auteurid, $datum);
  }
  public static function deletePost($id)
  {
    NewspostDAO::deletePost($id);
  }
  public static function getPost($id)
  {
    $post = NewspostDAO::getNewspost($id);
    return $post;
  }
  public static function editPost($id, $titel, $inhoud, $auteurid, $datum)
  {
    
  }

  }