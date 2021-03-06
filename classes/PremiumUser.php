
<?php

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/DataCard.php";


class PremiumUser extends User {

  use DataCard;

  private $discount;

  public function __construct($_name, $_lastname, $_discount)
  {
    parent::__construct($_name, $_lastname, $_discount);
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