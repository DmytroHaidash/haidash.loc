<?php
//task_9
/*Дано два числа. Вывести значение результата в логической переменной,
которое определяет,  отличаются ли первое от второго на 10.(ответ true или false)*/
$a_9 = 5;
$b_9 = 17;
echo "Цифры отличаются на 10? ";
var_dump(($a_9>$b_9 && ($a_9-$b_9)>10) || ($a_9<$b_9 && ($b_9-$a_9)>10));
echo "<br><br>";
?>