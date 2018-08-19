<!--Разработайте алгоритм, обнаруживающий в массиве все пары целых
чисел, сумма которых равна заданному значению.-->

<html>
<body>
<form method="POST">
    Введите массив чисел: <input class="nums" type="text" name="nums" value="<?php echo($_POST['nums']); ?>"><br/>
    Введите контрольное число: <input class="nums" type="text" name="sum" value="<?php echo($_POST['sum']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    $arr = explode(" ", $_POST['nums']);
    foreach ($arr as $key => $value) {
        if (isset($arr[$key + 1])) {
            if (($value+$arr[$key+1])==$_POST['sum']){
                echo "Сумма элементов массива {$value} и {$arr[$key+1]} равна контрольному числу {$_POST['sum']}<br/>";
            }
        }else{
            echo "Проверка массива окончена";
            exit;
        }
    }
}
?>
</body>
</html>