<?php

require_once("data/huisdokterDAO.php");

class huisdokterService
  {
  public static function getAllDokters()
  {
    $dokters = HuisdokterDAO::getAllDoctors();
    return $dokters;
  }
  }