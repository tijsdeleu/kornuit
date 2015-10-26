<?php

require_once("entities/kind.class.php");
require_once("dbconfig.class.php");

class KindDAO
  {

  public static function createKind($voornaam, $naam, $geslacht, $geboortedatum, $geboorteplaats, $inschrijvingsdatum, $ouders, $huisdokter_id, $gezin_id, $extrainfo, $afdeling)
  {
    $sql = "insert into kind (voornaam,naam,geslacht,geboortedatum,geboorteplaats,inschrijvingsdatum,ouders,huisdokter_id,gezin_id,extrainfo,afdeling) values ('" . $voornaam . "','" . $naam . "','" . $geslacht . "'," . $geboortedatum . ",'" . $geboorteplaats . "'," . $inschrijvingsdatum . ",'" . $ouders . "'," . $huisdokter_id . "," . $gezin_id . ",'" . $extrainfo . "','" . $afdeling . "')";
    print $sql;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $dbh = null;
  }

  }

?>