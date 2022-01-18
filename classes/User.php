<?php

class User {
  private $name;
  private $lastname;
  private $age;
  private $mail;
  private $card;


  public function __construct($_name,$_lastname)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
  }


  // funzioni SET
  public function setName($_name){
    $this->name = $_name;
  }

  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }

  public function setAge($_age){
    $this->age = $_age;
  }

  public function setMail($_mail){
    $this->mail = $_mail;
  }

  public function setCard($_card){
    $this->card = $_card;
  }


  // funzioni GET
  public function getName(){
    return $this->name;
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function getAge(){
    return $this->age;
  }

  public function getMail(){
    return $this->mail;
  }

  public function getCard(){
    return $this->card;
  }


}

