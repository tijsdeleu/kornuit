<?php

class Reactie
  {

  public $id;
  public $inhoud;
  public $auteurid;
  public $datum;
  public $article_id;

  public function __construct($id, $inhoud, $auteurid, $datum, $article_id)
  {
    $this->setId($id);
    $this->setInhoud($inhoud);
    $this->setAuteurid($auteurid);
    $this->setDatum($datum);
    $this->setArticleid($article_id);
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

  public function setArticleid($article_id)
  {
    $this->articleid = $article_id;
    return $this;
  }

  public function getArticleid()
  {
    return $this->articleid;
  }

  }
