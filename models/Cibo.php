<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto{
  public $composition;

  function __construct($_title, $_price, $_image, $_category, $_type, $_composition){
    parent::__construct($_title, $_price, $_image, $_category, $_type);
    $this->composition = $_composition;
    
  }
  public function setComposition($_composition){
    $this->composition = $_composition;
  }
  public function getComposition(){
    return 'Ingredienti: ' . $this->composition;
  }
}