<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto{
  public $type;

  function __construct($_title, $_price, $_image, $_category, $_type){
    parent::__construct($_title, $_price, $_image, $_category);
    $this->type = $_type;
    
  }
}