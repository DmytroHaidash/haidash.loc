<!--Дан двумерный массив, содержащий отрицательные и
положительные числа. Выведете на экран индексы тех ячеек
массива, которые содержат отрицательные числа.-->

<?php
$arr = [];
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 25; $j++) {
        $arr[$i][$j] = rand(-100, 100);
    }
}
foreach ($arr as $key => $val) {
    foreach ($val as $k => $v) {
        if ($v<0){
            echo "Ячейка [$key][$k] содержит отрицательное число<br/>";
        }
    }
}
echo "<pre>";
print_r($arr);
echo "<pre>";