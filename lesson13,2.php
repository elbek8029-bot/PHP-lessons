<?php

interface  Payment{
    public function pay($kirim);
}
class Clik implements Payment{
    public function pay($kirim){
        if($kirim>0){
            return "clik:$kirim";
        }
    }
}
class payme implements Payment{
    public function pay($kirim){
        if($kirim>0){
            return "payme:$kirim";
        }
    }
}
function makePay( Payment  $a, $money){
    return $a->pay($money);
};
echo makePay(new Clik(), 67000);


?>
