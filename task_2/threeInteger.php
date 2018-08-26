<?php
//task_10
/*Даны три числа. Найдите их среднее арифметическое, умножить его на 4 и сравнить с каждым из чисел.
(ответ true или false + сами числа)*/
$a_10=145;
$b_10=4;
$c_10=4598;
$average=(($a_10+$b_10+$c_10)/3)*4;
echo "Сравнение {$average} > {$a_10}: "; var_dump($average>$a_10); echo "<br>";
echo "Сравнение {$average} < {$b_10}: "; var_dump($average<$b_10); echo "<br>";
echo "Сравнение {$average} <= {$c_10}: "; var_dump($average<=$c_10); echo "<br>";
echo "<br><br>";
?>