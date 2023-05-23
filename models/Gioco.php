<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto{
  public $material;


  function __construct($_title, $_price, $_image, $_category, $_type, $_material){
    parent::__construct($_title, $_price, $_image, $_category, $_type);
    $this->material = $_material;

    
  }

  public function getMaterial(){
    return 'Materiale: ' . $this->material;
  }

}