<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto{
  public $size;

  function __construct($_title, $_price, $_image, $_category, $_size){
    parent::__construct($_title, $_price, $_image, $_category);
    $this->size = $_size;
    
  }
}