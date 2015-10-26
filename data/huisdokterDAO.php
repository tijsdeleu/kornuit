<?php

require_once("dbconfig.class.php");
require_once("entities/huisdokter.class.php");

class HuisdokterDAO
  {

  public static function getAllDoctors()
  {
    $sql = "select * from huisdokter";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $arrResult = $dbh->query($sql);
    $dokters = array();
    
    foreach ($arrResult as $rij)
      {
      $dokter = new Huisdokter($rij["id"], $rij["naam"], $rij["adres"], $rij["postcode"], $rij["gemeente"], $rij["telefoon"]);
      array_push($dokters, $dokter);
      }
    $dbh = null;

    return $dokters;
  }

  }
