<?php


trait DataCard{
  public $number;
  public $cvv;

  function __construct($_number, $_cvv)
  {
  
    $this->number = $_number;
    $this->cvv = $_cvv;

  }

  public function setNumber($_number){
    $this->number = $this->checkValidNumber($_number);
  }

  public function getNumber(){
    return $this->number;
  }


  public function setCvv($_cvv){
    $this->cvv = $this->checkValidCvv($_cvv);
  }

  public function getCvv(){
    return $this->cvv;
  }



  private function checkValidNumber($number){

    //se non è un numero blocco l'inserimento
    if(strlen($number) != 12){
      throw new Exception('Numero carta di credito non valido');
    }
    // se è tutto ok restituisco il dato
    return  $number;
  }

  private function checkValidCvv($cvv){

    //se non è un numero blocco l'inserimento
    if(strlen($cvv) != 3){
      throw new Exception('cvv non valido');
    }

    // se è tutto ok restituisco il dato
    return  $cvv;
  }




}