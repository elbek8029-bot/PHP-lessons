<?php

function tub($a) {
    $s=0;

    
    for ($i=2; $i<sqrt($a); $i++) {
       
    if ($a%$i==0) {
                $s=true;
                break;
            }
     
    }
   if($s==false){
    return "Tub son";
   }
   else {
    return "Tub emas";
   }
    return $s;
}

$a=9999991;
echo tub($a);

?>