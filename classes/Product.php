<?php

class Product {
  private $name;
  private $price;
  // private $discount;
  // parent::__$discount;
  private $priceDiscount;

  public function __construct($_name,$_price)
  {
    $this->name = $_name;
    $this->price = $_price;
  } 


  public function setName($_name){
    $this->name = $_name;
  }

  public function getName(){
      return $this->name;
  }



  public function setPrice($_price){
    $this->price = $_price;
  }

  public function getPrice(){
    return $this->price;
  }


  // public function setDiscount($_price){
  //   $this->price = $_price;
  // }

  // public function getPrice(){
  //   return $this->price;
  // }



  public function setPriceDiscount($_priceDiscount){
    $this->priceDiscount = $this->price - (($this->price * $_priceDiscount)/100);
  }

  public function getPriceDiscount(){
    return $this->priceDiscount;
  }

  


}
?>