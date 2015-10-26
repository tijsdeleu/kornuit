<?php

require_once('data/kindDAO.php');

class kindService
  {
  public static function createKind($kind)
  {
    KindDAO::createKind($kind->voornaam, $kind->naam, $kind->geslacht, $kind->geboortedatum, $kind->geboorteplaats, $kind->inschrijvingsdatum, $kind->ouders, $kind->huisdokter_id, $kind->gezinid, $kind->extrainfo, $kind->afdeling);
  }
  }