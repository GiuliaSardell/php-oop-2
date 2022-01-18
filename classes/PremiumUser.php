
<?php

require_once __DIR__ . "/User.php";


class PremiumUser extends User {

  private $discount;

  public function __construct($_name, $_lastname, $_discount)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->discount = $_discount;
  }

  public function setDiscountPremiumUser($_discount){
    $this->discount = $_discount;
  }

  public function getDiscountPremiumUser(){
    return $this->discount;
  }


}

?>