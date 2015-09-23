<?php

class Newspost
{

    public $id;
    public $titel;
    public $inhoud;
    public $auteurid;
    public $datum;
    
    public function __construct($id,$titel,$inhoud,$auteurid,$datum)
    {
      $this->setId($id);
      $this->setTitel($titel);
      $this->setInhoud($inhoud);
      $this->setAuteurid($auteurid);
      $this->setDatum($datum);
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

    public function setTitel($titel)
    {
        $this->titel = $titel;

        return $this;
    }

    public function getTitel()
    {
        return $this->titel;
    }

    public function setInhoud($inhoud)
    {
        $this->inhoud = $inhoud;

        return $this;
    }

    public function getInhoud()
    {
        return $this->inhoud;
    }

    public function setAuteurid($auteurid)
    {
        $this->auteurid = $auteurid;

        return $this;
    }

    public function getAuteurid()
    {
        return $this->auteurid;
    }

    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    public function getDatum()
    {
        return $this->datum;
    }
}
