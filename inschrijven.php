<?php

require_once("business/newspostservice.php");
require_once("business/userservice.php");
require_once("business/imageservice.php");
require_once("business/reactieservice.php");
require_once("business/galerijservice.php");
require_once("business/gezinservice.php");
require_once("business/huisdokterservice.php");
require_once("business/kindservice.php");

if (session_id() == '')
{
  session_start();
}


/*
 * ********** KIND INSCHRIJVEN **********
 */

if (isset($_SESSION['user']))
{
  if (!isset($_GET['page']))
  {
    header("Location: index.php");
    die();
  }
  if (isset($_GET['page']))
  {
    if ($_GET['page'] == "kind")
    {
      $dokters = huisdokterService::getAllDokters();
      if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['formkindibo']) || isset($_POST['formkindkdv'])) && $_POST['naam'] != "")
      {
        $datum = date("Y-m-d");
        $ouders = serialize($_POST['ouders']);
        $extrainfo = array();

        // IBO
        if (isset($_POST['formkindibo']))
        {
          $afdeling = "IBO";
          $extrainfo[5]= "Rijksregisternummer: " . $_POST["rrn"];
          $extrainfo[6]= "School: " . $_POST["school"];
          $extrainfo[7]= "Bloedgroep: " . $_POST["bloedgroep"];
        }
        // KDV

        if (isset($_POST['formkindkdv']))
        {
          $afdeling = "KDV";
          if ($_POST['tevroeggeboren'] === 'ja')
          {
            $extrainfo[5]= "Te vroeg geboren: Ja," . $_POST['tevroeggeborentext'];
          }
          else{$extrainfo[5]= "Te vroeg geboren: Nee";}
          
          $extrainfo[6]= "Kinderziektes: " . $_POST['kinderziektes'];
        }

        // ALGEMEEN
        if ($_POST['vastemedicatie'] === 'ja')
        {
          $extrainfo[0]= "Vaste medicatie: Ja, " . $_POST['vastemedicatietext'];
        }
        else
        {
          $extrainfo[0]="Vaste medicatie: Nee";
        }
        if ($_POST['allergie'] === 'ja')
        {
          $extrainfo[1]= "Allergie? Ja, " . $_POST['allergietext'];
        }
        else
        {
          $extrainfo[1]= "Allergie? Nee.";
        }
        if (isset($_POST['aandacht']) && $_POST['aandacht'] === 'ja')
        {
          $extrainfo[2]= "Aandachtspunten? Ja, " . $_POST['aandachttext'];
        }
        else
        {
          $extrainfo[2]= "Aandachtspunten? Nee.";
        }
        $extrainfo[3]= "Mag worden opgehaald door? " . $_POST["afhalingtext"];
        $extrainfo[4]= "Opmerkingen: " . $_POST["opmerkingen"];
        $extrainfo = serialize($extrainfo);
        $gezinid = $_SESSION['user']->gezinid;
        $kind = new Kind(0, $_POST['voornaam'], $_POST['naam'], $_POST['geslacht'], $_POST['geboortedatum'], $_POST['geboorteplaats'], $datum, $ouders, $_POST['huisdokter'], $gezinid, $extrainfo, $afdeling);
        kindService::createKind($kind);
      }
      include ("presentation/inschrijving/kind.php");
    }
  }
}
/*
 * ********** GEZIN INSCHRIJVING ***********
 */

if (isset($_GET['page']) && ($_GET['page'] == 'gezin') && !isset($_SESSION['user']))
{
  $arrErrorGezin = array();
  // VALIDATION
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formgezin']) && $_POST['naam'] != "")
  {
    // NAAM GEZIN
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST['naam']))
    {
      $errNaam = "Alleen letters en witte ruimte toegelaten.";
      array_push($arrErrorGezin, $errNaam);
    }

    // POSTCODE DOMICILIE
    // POSTCODE VERBLIJF
    // GSM NUMMER
    // TELEFOON NUMMER
    $id = 0;
    if (empty($arrErrorGezin))
    {
      $id = gezinService::makeGezin($_POST["naam"], $_POST["domicilieadres"], $_POST["domiciliepostcode"], $_POST["domiciliegemeente"], $_POST["verblijf"], $_POST["email1"], $_POST["email2"], $_POST["gsm"], $_POST["telefoon"]);
      /*
       * LOGIN AANMAKEN
       */
      $username = $_POST['naam'] . $id;
      $wachtwoord = userService::createPassword();
      userService::createNewUser($username, $wachtwoord, 1, $id);
    }
  }
  include ("presentation/inschrijving/gezin.php");
}



if (!isset($_GET['page']))
{
  header("Location: index.php");
  die();
}