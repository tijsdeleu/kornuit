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

  public static function addPost($titel, $inhoud, $auteurid, $datum)
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
    NewspostDAO::editPost($id, $titel, $inhoud, $auteurid, $datum);
  }
  
  public static function make_links_blank($text)
{
  return  preg_replace(
     array(
       '/(?(?=<a[^>]*>.+<\/a>)
             (?:<a[^>]*>.+<\/a>)
             |
             ([^="\']?)((?:https?|ftp|bf2|):\/\/[^<> \n\r]+)
         )/iex',
       '/<a([^>]*)target="?[^"\']+"?/i',
       '/<a([^>]+)>/i',
       '/(^|\s)(www.[^<> \n\r]+)/iex',
       '/(([_A-Za-z0-9-]+)(\\.[_A-Za-z0-9-]+)*@([A-Za-z0-9-]+)
       (\\.[A-Za-z0-9-]+)*)/iex'
       ),
     array(
       "stripslashes((strlen('\\2')>0?'\\1<a href=\"\\2\">\\2</a>\\3':'\\0'))",
       '<a\\1',
       '<a\\1 target="_blank">',
       "stripslashes((strlen('\\2')>0?'\\1<a href=\"http://\\2\">\\2</a>\\3':'\\0'))",
       "stripslashes((strlen('\\2')>0?'<a href=\"mailto:\\0\">\\0</a>':'\\0'))"
       ),
       $text
   );
}

  }
