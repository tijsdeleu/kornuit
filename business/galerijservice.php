<?php

class galerijService
  {

  public static function getAllCategories()
  {
    $dir = 'images/galerij';
    $categories = array_diff(scandir($dir), array('..', '.'));
    return $categories;
  }

  public static function getAllImagesFromCategorie($categorie)
  {
    $dir = "images/galerij/" . $categorie;
    $arrFiles = array();
    if (is_dir($dir))
    {
      if ($dh = opendir($dir))
      {
        while (($file = readdir($dh)) !== false)
          {
          if ($file !== "." && $file !== "..")
          {
            $file = $dir . "/" . $file;
            array_push($arrFiles,$file);
          }
          }
        closedir($dh);
      }
    }
    return $arrFiles;
  }

  }
