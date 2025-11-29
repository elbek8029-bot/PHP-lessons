<?php

class Hayvon{
public function sound(){
    return "ovoz";
}
}
class cat extends Hayvon{
    public function sound(){
        return " mushuk Miauv didi";
    }
}
class Dog extends Hayvon{
       public function sound(){
        return " it Vov didi";
    }
}
class sechchi extends Hayvon {
     public function sound(){
        return " mol mou didi";
    }
}

$sechchi = new sechchi;
echo $sechchi->sound();
echo "<br>";
$cat=  new cat;
echo $cat->sound();
echo "<br>";
$dog =  new Dog;
echo $dog->sound();
echo "<br>";
?>