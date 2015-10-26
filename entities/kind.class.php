<?php

class Kind
  {

  public $id;
  public $voornaam;
  public $naam;
  public $geslacht;
  public $geboortedatum;
  public $geboorteplaats;
  public $inschrijvingsdatum;
  public $ouders;
  public $huisdokter_id;
  public $gezin_id;
  public $extrainfo;
  public $afdeling;

  public function __construct($id, $voornaam, $naam, $geslacht, $geboortedatum, $geboorteplaats, $inschrijvingsdatum, $ouders, $huisdokter_id, $gezin_id, $extrainfo, $afdeling)
  {
    $this->setId($id);
    $this->setVoornaam($voornaam);
    $this->setNaam($naam);
    $this->setGeslacht($geslacht);
    $this->setGeboortedatum($geboortedatum);
    $this->setGeboorteplaats($geboorteplaats);
    $this->setInschrijvingsdatum($inschrijvingsdatum);
    $this->setOuders($ouders);
    $this->setHuisdokter_id($huisdokter_id);
    $this->setGezinid($gezin_id);
    $this->setExtrainfo($extrainfo);
    $this->setAfdeling($afdeling);
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getVoornaam()
  {
    return $this->voornaam;
  }

  public function setVoornaam($voornaam)
  {
    $this->voornaam = $voornaam;
    return $this;
  }

  public function getNaam()
  {
    return $this->naam;
  }

  public function setNaam($naam)
  {
    $this->naam = $naam;
    return $this;
  }

  public function getGeslacht()
  {
    return $this->geslacht;
  }

  public function setGeslacht($geslacht)
  {
    $this->geslacht = $geslacht;
    return $this;
  }

  public function getGeboortedatum()
  {
    return $this->geboortedatum;
  }

  public function setGeboortedatum($geboortedatum)
  {
    $this->geboortedatum = $geboortedatum;
    return $this;
  }

  public function getGeboorteplaats()
  {
    return $this->geboorteplaats;
  }

  public function setGeboorteplaats($geboorteplaats)
  {
    $this->geboorteplaats = $geboorteplaats;
    return $this;
  }

  public function getInschrijvingsdatum()
  {
    return $this->inschrijvingsdatum;
  }

  public function setInschrijvingsdatum($inschrijvingsdatum)
  {
    $this->inschrijvingsdatum = $inschrijvingsdatum;
    return $this;
  }

  public function getOuders()
  {
    return $this->ouders;
  }

  public function setOuders($ouders)
  {
    $this->ouders = $ouders;
    return $this;
  }

  public function getHuisdokter_id()
  {
    return $this->huisdokter_id;
  }

  public function setHuisdokter_id($huisdokter_id)
  {
    $this->huisdokter_id = $huisdokter_id;
    return $this;
  }

  public function getGezinid()
  {
    return $this->gezinid;
  }

  public function setGezinid($gezin_id)
  {
    $this->gezinid = $gezin_id;
    return $this;
  }

  public function getExtrainfo()
  {
    return $this->extrainfo;
  }

  public function setExtrainfo($extrainfo)
  {
    $this->extrainfo = $extrainfo;
    return $this;
  }

  public function getAfdeling()
  {
    return $this->afdeling;
  }

  public function setAfdeling($afdeling)
  {
    $this->afdeling = $afdeling;
    return $this;
  }

  }

?>