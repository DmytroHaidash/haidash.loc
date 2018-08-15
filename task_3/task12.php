<!--Вывести таблицу значений функции y = -0.23x2 + x. Значения аргумента (x) задаются минимумом, максимумом и
шагом. Например, если минимум задан как 1, максимум равен 3, а шаг 0.5, тогда надо вывести на экран
изменение x от 1 до 3 с шагом 0.5 (1, 1.5, 2, 2.5, 3) и значения функции (y) при каждом значении x.-->
<html>
<body>
<form method="POST">
    Введите минимум: <input type="text" name="min" value="<?php echo($_POST['min']); ?>"><br/>
    Введите максимум: <input type="text" name="max" value="<?php echo($_POST['max']); ?>"><br/>
    Введите шаг: <input type="text" name="step" value="<?php echo($_POST['step']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    for ($min = $_POST['min']; $min <= $_POST['max']; $min += $_POST['step']) {
        echo "Значение функции y= -0.23*2+x= " . (-0.23 * 2 + $min) . " при шаге х= " . $min . "<br/>";
    }
}
?>
</body>
</html>