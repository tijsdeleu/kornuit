<?php

class Huisdokter
  {

  public $id;
  public $naam;
  public $adres;
  public $postcode;
  public $gemeente;
  public $telefoon;

  public function __construct($id, $naam, $adres, $postcode, $gemeente, $telefoon)
  {
    $this->setId($id);
    $this->setNaam($naam);
    $this->setAdres($adres);
    $this->setPostcode($postcode);
    $this->setGemeente($gemeente);
    $this->setTelefoon($telefoon);
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

  public function getNaam()
  {
    return $this->naam;
  }

  public function setNaam($naam)
  {
    $this->naam = $naam;
    return $this;
  }

  public function getAdres()
  {
    return $this->adres;
  }

  public function setAdres($adres)
  {
    $this->adres = $adres;
    return $this;
  }

  public function getPostcode()
  {
    return $this->postcode;
  }

  public function setPostcode($postcode)
  {
    $this->postcode = $postcode;
    return $this;
  }

  public function getGemeente()
  {
    return $this->gemeente;
  }

  public function setGemeente($gemeente)
  {
    $this->gemeente = $gemeente;
    return $this;
  }

  public function getTelefoon()
  {
    return $this->telefoon;
  }

  public function setTelefoon($telefoon)
  {
    $this->telefoon = $telefoon;
    return $this;
  }

  }

?>