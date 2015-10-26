<?php

// REQUIRES
require_once("business/newspostservice.php");
require_once("business/userservice.php");
require_once("business/imageservice.php");
require_once("business/reactieservice.php");
require_once("business/galerijservice.php");
require_once("business/gezinservice.php");


// start the session
if (session_id() == '')
{
  session_start();
}

// CONTROLEER VOOR NIEUWE POST

if (isset($_POST["addpost"]) && isset($_SESSION["user"]))
{
  $auteurid = $_SESSION["user"]->id;
  $datum = date("Y-m-d H:i:s");
  newspostService::addPost($_POST["titel"], nl2br($_POST["inhoud"]), $auteurid, $datum);
}

// CONTROLEER OP UPDATE POST

if (isset($_POST["editpost"]) && isset($_SESSION['user']))
{
  $auteurid = $_SESSION["user"]->id;
  $datum = date("Y-m-d H:i:s");
  newspostService::editPost($_POST["editpostid"], $_POST["editposttitel"], nl2br($_POST["editpostinhoud"]), $auteurid, $datum);
}

// CONTROLEER OP DELETE POST

if (isset($_GET['delete']))
{
  $postid = $_GET['delete'];
  newspostService::deletePost($postid);
  imageService::deleteArticleImages($postid);
  $deletewaarschuwing = "Post is verwijderd.";
}


// ***** ROUTING ***** //
if (!isset($_GET['page']))
{
  include 'presentation/homepage.php';
}

if (isset($_GET['page']))
{
  $page = $_GET['page'];
  if (!file_exists('presentation/' . $page . '.php'))
  {
    header("Location: index.php");
    die();
  }

  switch ($page)
    {
    case "viewpost":
      if (isset($_GET['postid']))
      {
        $post = newspostService::getPost($_GET['postid']);
        if (isset($_POST['addreactie']))
        {
          reactieService::plaatsReactie(nl2br($_POST["reactieinhoud"]), $_SESSION["user"]->id, $post->id);
        }
        $arrReacties = reactieService::getReactiesFromPost($post);
        include "presentation/viewpost.php";
      }
      if (!isset($_GET['postid']))
      {
        include "presentation/homepage.php";
      }
      break;
    default:
      include "presentation/" . $page . ".php";
      break;
    }
}

