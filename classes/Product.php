<?php

class Product {
  private $name;
  private $price;
  private $priceDiscount;

  public function __construct($_name,$_price)
  {
    $this->name = $_name;
    $this->price = $_price;
  } 


  public function setName($_name){
    $this->name = $_name;
  }

  public function setPrice($_price){
    $this->price = $_price;
  }


  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }


  

}
?>