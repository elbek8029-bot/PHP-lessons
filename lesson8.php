<?php

class Students{
public $name;
public $kurs;
Public $yosh;
public function set_att($name, $kurs, $yosh){
    $this->name=$name;
    $this->kurs=$kurs;
    $this->yosh=$yosh;
}
public function get_att(){
    echo $this->name . "<br>";
     echo $this->kurs . "<br>";
      echo $this->yosh . "<br>";
}
}
$saidjon = new Students ();
$saidjon->set_att("Saidjon", 2, 19);
$saidjon->get_att();
?>