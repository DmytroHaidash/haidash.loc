<?php
/*Составьте программу, выводящую на экран квадраты чисел от 10 до 20.*/
$i=10;
while ($i<=20){
    echo "Квадрат числа {$i} равен ". pow($i,2)."<br/>";
    $i++;
}