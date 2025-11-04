<?php

$b = ["pepsi" => "13", "Sprite" => "43", "Moxito" => "65"];

asort($b);
echo "<br>";
foreach ($b as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>";

ksort($b);
echo "<br>";
foreach ($b as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>";

arsort($b);
echo "<br>";
foreach ($b as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>";

krsort($b);
echo "<br>";
foreach ($b as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

?>
