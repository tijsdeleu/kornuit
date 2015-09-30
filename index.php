<?php
// REQUIRES
require_once("business/newspostservice.php");
require_once("business/userservice.php");
require_once("business/imageservice.php");
// start the session
session_start();

// CONTROLEER VOOR NIEUWE POST

if (isset($_POST["addpost"]) && isset($_SESSION["user"]))
{
  $auteurid = $_SESSION["user"]->id;
  $datum = date("Y-m-d H:i:s");
  newspostService::addPost($_POST["titel"], nl2br($_POST["inhoud"]), $auteurid, $datum);
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
  switch ($page)
    {
    case "visie":
      include "presentation/visie.php";
      break;
    case "historiek":
      include "presentation/historiek.php";
      break;
    case "galerij":
      include "presentation/galerij.php";
      break;
    case "kinderdagverblijf":
      include "presentation/kinderdagverblijf.php";
      break;
    case "middagopvang":
      include "presentation/middagopvang.php";
      break;
    case "ibo":
      include "presentation/ibo.php";
      break;
    case "contact":
      include "presentation/contact.php";
      break;
    case "addpost":
      include "presentation/addpost.php";
      break;
    case "adminlist":
      include "presentation/adminlist.php";
      break;
    case "editpost":
      include "presentation/editpost.php";
      break;
    case "addarticleimage":
      include "presentation/addarticleimage.php";
      break;
    }
}

