<?php

require_once("data/gezinDAO.php");

class gezinService
  {
  public static function makeGezin($naam,$dom_adres,$dom_postcode,$dom_gemeente,$verblijf,$email1,$email2,$telefoon,$telefoonnood)
  {
    $verblijf = serialize($verblijf);
    $id = GezinDAO::createGezin($naam, $dom_adres, $dom_postcode, $dom_gemeente, $verblijf, $email1, $email2, $telefoon, $telefoonnood);
    return $id;
  }
  
  public static function getGezin($gezinid)
  {
    $gezin = GezinDAO::getGezin($gezinid);
    return $gezin;
  }
  }