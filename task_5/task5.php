<!--Пользователь вводит с клавиатуры натуральное число большее
3, которое сохраняется в переменную n. Создать массив из nxn
случайных целых чисел из отрезка [0;n] и вывести его на экран.
Создать второй массив только из чётных элементов первого
массива, если они там есть, и вывести его на экран.-->
<html>
<body>
<form method="POST">
    Введите число больше 3: <input type="text" name="num" value="<?php echo($_POST['num']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    if ($_POST['num'] > 3) {
        $n = $_POST['num'];
        $arr = [];
        $arr_h = [];
        for ($i = 0; $i < ($n * $n); $i++) {
            $arr[] = rand(0, $n);
        }
        echo "<p>Сгенерированный массив:</p>";
        echo "<pre>";
        print_r($arr);
        echo "<pre>";
        foreach ($arr as $value) {
            if ($value % 2 == 0) {
                $arr_h[] = $value;
            }
        }
        if (!$arr_h) {
            echo "<p>В массиве отсутствуют четные элементы</p>";
        } else {
            echo "<p>Массив четных элементов:</p>";
            echo "<pre>";
            print_r($arr_h);
            echo "<pre>";
        }
    } else {
        echo "Введено некорректное число! Повторите ввод!";
    }
}
?>
</body>
</html>
