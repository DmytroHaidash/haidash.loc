<?php
//task_11
/*Дано число. Увеличьте его на 30%, на 120%
и сравнить среднее арифметическое результатов с первоначальным числом  (ответ true или false + сами числа)*/

$a=45;
$b=$a*1.3;
$c=$a*2.2;
echo 'Сравнение '.$a.' <= '.(($b+$c)/2).' : ';
var_dump($a<=(($b+$c)/2));
echo "<br><br>";
?>