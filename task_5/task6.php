<!--Найти в массиве чисел элементы с наибольшим(max) и
наименьшим(min) значениями. Вывести эти 2 элемента на экран, а
также посчитать и вывести сумму всех остальных элементов (min и max
в сумму не входят).-->
<html>

<body>
<form method="POST">
    Введите массив чисел: <input class="nums" type="text" name="nums" value="<?php echo($_POST['nums']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    $arr = explode(" ", $_POST['nums']);
    $min = $arr[0];
    $min_key = 0;
    $max = $arr[0];
    $max_key = 0;
    $sum = 0;
    foreach ($arr as $key => $value) {
        if ($value > $max) {
            $max = $value;
            $max_key = $key;
        } elseif ($value < $min) {
            $min = $value;
            $min_key = $key;
        }
    }
    $arr[$max_key] = 0;
    $arr[$min_key] = 0;
    echo "Максимальный елемент массива: " . $max . "<br/>";
    echo "Минимальный елемент массива: " . $min . "<br/>";
    echo "Сумма элементов массива без учета максимального и минимального: " . array_sum($arr);
}
?>
</body>
</html>
