<?php

abstract class Transport{
    abstract function makecolor() ;
    public function settype(){
        return "turi";
    }
}

class BMW extends Transport{
     public function makecolor(){
        return "Black ";
     } 
    public function settype(){
      return "BMW";
    }
} 
class Malibu extends Transport{
     public function makecolor(){
        return "Black ";
     } 
    public function settype(){
      return "Malibu";
    }
} 
$bmw=new BMW;
echo $bmw->makecolor();
echo $bmw->settype(). "<br>";
$b=new Malibu;
echo $b->makecolor();
echo $b->settype() . "<br>"."<br>"."<br>";



?>
