<?php
$a = 4;
$arr = [];
for ($i=0; $i<10; $i++){
    $arr[] = rand(-5,10);
}
var_dump($arr);
echo "</br>";

foreach ($arr as $key => $value){
    if ($value == $a){
        echo "[$key] => ", $value;
        break;
    }
}
