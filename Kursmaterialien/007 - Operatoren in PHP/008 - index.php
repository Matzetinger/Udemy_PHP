<?php

class Benutzer{
  public $profil;

  public function __construct($profil = null){
    $this->profil = $profil;
  }
}

class Profil{
  public $name;

  public function __construct($name = null){
    $this->name = $name;
  }
}


$benutzer = new Benutzer(new Profil("Markus"));


echo $benutzer?->profil?->name ?? "Standardwert";


?>
