<?php 
function saralash($a){
    $b=0;
   for($i=0; $i<count($a); $i++){
        for($j=0; $j<count($a)-1; $j++){
            if($a[$j]>$a[$j+1]){
                $b=$a[$j];
                $a[$j]=$a[$j+1];
                $a[$j+1]=$b;
            }
        }
   } 
   return $a;
}

$arr=[1,0,-4,3,7,9,-3];

print_r(saralash($arr));

?>
