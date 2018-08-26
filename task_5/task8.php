<!--Дан массив с рандомными числами. Создать новый массив, в котором
каждое значение получено путем произведения всех значений исходного
массива с отличным от текущего индексом. Например, исходный массив
имеет вид: [1, 7, 3, 4], тогда должно вернуть: [84, 12, 28, 21]. Расчет
значений происходит следующим образом: [7*3*4, 1*3*4, 1*7*4, 1*7*3]-->
<html>
<body>
<form method="POST">
    <input type="submit" name="button" value="START">
</form>
<?php
if (isset($_POST['button'])) {
    $arr = [];
    $arr_mult = [];
    $rand_i = mt_rand(6, 8);
    for ($i = 0; $i < $rand_i; $i++) {
        $arr[$i] = mt_rand(1, 5);
    }

    var_dump($arr);

    echo "<br>";
    foreach ($arr as $key => $value) {
        $sum = 1;
        foreach ($arr as $k => $v) {
            if ($key == $k) {
                continue;
            } else {
                $sum *= $v;
            }
        }
        $arr_mult[] = $sum;
    }

    var_dump($arr_mult);

}
?>
</body>
</html>