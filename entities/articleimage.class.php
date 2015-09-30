<?php

class ArticleImage
  {

  public $id;
  public $url;
  public $articleid;

  public function __construct($id, $url, $articleid)
  {
    $this->setId($id);
    $this->setUrl($url);
    $this->setArticleid($articleid);
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

  public function setUrl($url)
  {
    $this->url = $url;
    return $this;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setArticleid($articleid)
  {
    $this->articleid = $articleid;
    return $this;
  }

  public function getArticleid()
  {
    return $this->articleid;
  }

  }
