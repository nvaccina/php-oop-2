<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto{
  public $size;
  public $material;

  function __construct($_title, $_price, $_image, $_category, $_type, $_material, $_size){
    parent::__construct($_title, $_price, $_image, $_category, $_type);
    $this->size = $_size;
    $this->material = $_material;
  }

  public function getcucciaInfo(){
    return 'Dimensioni: ' . $this->size . '<br> Materiale: ' . $this->material;
  }


}