<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto{
  public $composition;

  function __construct($_title, $_price, $_image, $_category, $_composition){
    parent::__construct($_title, $_price, $_image, $_category);
    $this->composition = $_composition;
    
  }
}