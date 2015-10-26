<?php

require_once("entities/gezin.class.php");
require_once("dbconfig.class.php");

class GezinDAO
  {

  public static function createGezin($naam, $dom_adres, $dom_postcode, $dom_gemeente, $arrverblijf, $email1, $email2, $telefoon, $telefoonnood)
  {
    $sql = "INSERT INTO gezin (naam, domicilie_adres, domicilie_postcode, domicilie_gemeente, verblijf, email1, email2, telefoon, telefoonnoodgevallen) VALUES ('" . $naam . "', '" . $dom_adres . "', '" . $dom_postcode . "', '" . $dom_gemeente . "', '" . $arrverblijf . "', '" . $email1 . "', '" . $email2 . "', '" . $telefoon . "', '" . $telefoonnood . "')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $id = $dbh->lastInsertId();
    return $id;
  }

  public static function getGezin($gezinid)
  {
    $sql = "select * from gezin where id=" . $gezinid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    $gezin = null;
    // RESULT ARRAY UITLEZEN
    foreach ($arrResult as $rij)
      {
      $gezin = new Gezin($rij["id"], $rij["naam"], $rij["domicilie_adres"], $rij["domicilie_postcode"], $rij["domicilie_gemeente"], $rij["verblijf"], $rij["email1"], $rij["email2"], $rij["telefoon"], $rij["telefoonnoodgevallen"]);
      }
    $dbh = null;
    return $gezin;
  }

  }
