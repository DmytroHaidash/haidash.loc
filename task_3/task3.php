<?php
/*Вывести 10 первых степеней двойки.*/
$base = 2;
$exp = 1;
while ($exp <=10){
    $res = pow($base, $exp);
    echo $base . " в ". $exp  . " степени равно " . $res . "<br>";
    $exp++;
}
?>

