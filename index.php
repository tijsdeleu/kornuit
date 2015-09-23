<?php
// REQUIRES
require_once("business/newspostservice.php");
require_once("business/userservice.php");
// start the session
session_start();

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
    }
}