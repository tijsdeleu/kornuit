<?php

class Gezin
  {

  public $id;
  public $naam;
  public $domicilie_adres;
  public $domicilie_postcode;
  public $domicilie_gemeente;
  public $verblijf_adres;
  public $verblijf_postcode;
  public $verblijf_gemeente;
  public $email1;
  public $email2;
  public $telefoon;
  public $telefoonnoodgevallen;

  public function __construct($id, $naam, $domicilie_adres, $domicilie_postcode, $domicilie_gemeente, $arrVerblijf, $email1, $email2, $telefoon, $telefoonnoodgevallen)
  {
    $this->setId($id);
    $this->setNaam($naam);
    $this->setDomicilie_adres($domicilie_adres);
    $this->setDomicilie_postcode($domicilie_postcode);
    $this->setDomicilie_gemeente($domicilie_gemeente);
    $this->setVerblijf($arrVerblijf);
    $this->setEmail1($email1);
    $this->setEmail2($email2);
    $this->setTelefoon($telefoon);
    $this->setTelefoonnoodgevallen($telefoonnoodgevallen);
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setNaam($naam)
  {
    $this->naam = $naam;
    return $this;
  }

  public function getNaam()
  {
    return $this->naam;
  }

  public function setDomicilie_adres($domicilie_adres)
  {
    $this->domicilie_adres = $domicilie_adres;
    return $this;
  }

  public function getDomicilie_adres()
  {
    return $this->domicilie_adres;
  }

  public function setDomicilie_postcode($domicilie_postcode)
  {
    $this->domicilie_postcode = $domicilie_postcode;
    return $this;
  }

  public function getDomicilie_postcode()
  {
    return $this->domicilie_postcode;
  }

  public function setDomicilie_gemeente($domicilie_gemeente)
  {
    $this->domicilie_gemeente = $domicilie_gemeente;
    return $this;
  }

  public function getDomicilie_gemeente()
  {
    return $this->domicilie_gemeente;
  }

  public function setVerblijf($arrVerblijf)
  {
    $this->verblijf = $arrVerblijf;
    return $this;
  }

  public function getVerblijf()
  {
    return $this->verblijf;
  }
  public function setEmail1($email1)
  {
    $this->email1 = $email1;
    return $this;
  }

  public function getEmail1()
  {
    return $this->email1;
  }

  public function setEmail2($email2)
  {
    $this->email2 = $email2;
    return $this;
  }

  public function getEmail2()
  {
    return $this->email2;
  }

  public function setTelefoon($telefoon)
  {
    $this->telefoon = $telefoon;
    return $this;
  }

  public function getTelefoon()
  {
    return $this->telefoon;
  }
  
    public function setTelefoonnoodgevallen($telefoonnoodgevallen)
  {
    $this->telefoonnoodgevallen = $telefoonnoodgevallen;
    return $this;
  }

  public function getTelefoonnoodgevallen()
  {
    return $this->telefoonnoodgevallen;
  }

  }
