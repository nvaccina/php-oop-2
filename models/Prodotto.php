<?php

class Prodotto {
  public $title;
  public $price;
  public $image;
  public $category;
  public $type;

  function __construct($_title, $_price, $_image, $_category, $_type){
    $this->title = $_title;
    $this->price = $_price;
    $this->image = $_image;
    $this->category = $_category;
    $this->type = $_type;
  }

  public function getInfo(){
    return 'Prezzo: ' . $this->price . '€<br> Tipo: ' . $this->type . '<br> Categoria: ' . $this->getCategory(); 
  }

  public function getCategory(){
    if ($this->category == 'cane'){
      return '<i class="fa-solid fa-dog"></i>';
    }else if ($this->category == 'gatto'){
      return '<i class="fa-solid fa-cat"></i>';
    }
  }
}

