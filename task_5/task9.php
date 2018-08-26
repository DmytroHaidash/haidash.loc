<!--Задача, которую предлагали на собеседованиях в Apple: у вас есть
массив с целыми числами, в том числе и отрицательными, вам нужно найти
самое большое произведение 3 чисел из этого массива. Например: у вас
есть массив list_of_ints, содержащий числа -10, -10, 1, 3, 2. Функция,
которая обрабатывает этот массив, должна вернуть 300, так как -10 * -10 * 3
= 300. Задание нужно выполнить максимально эффективно, не забывая
учесть отрицательные числа.-->
<html>
<body>
<form method="POST">
    Введите массив положительных и отрицательных чисел ерез  пробел:
    <input class="nums" type="text" name="nums" value="<?php echo($_POST['nums']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    $arr = explode(" ", $_POST['nums']);
    $arr_mult = [];
    foreach ($arr as $key => $value) {
        $a = $value;
        foreach ($arr as $k_y => $v_e) {
            if ($key == $k_y) {
                continue;
            } else {
                $b = $v_e;
            }
            foreach ($arr as $k => $v) {
                if ($k == $key || $k == $k_y) {
                    continue;
                } else {
                    $c = $v;
                }
                $arr_mult[] = $a * $b * $c;
            }
        }
    }
    $max = $arr_mult[0];
    foreach ($arr_mult as $v_mult) {
        if ($v_mult > $max) {
            $max = $v_mult;
        }
    }
    echo "Самое большое произведение 3-х чисел массива: {$max}<br/>";
    echo "<br>";
    print_r($arr_mult);
}
?>
</body>
</html>