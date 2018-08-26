<!--С клавиатуры вводятся n чисел. Составьте программу, которая определяет кол-во отрицательных,
кол-во положительных и кол-во нулей среди введенных чисел. Значение n вводится с клавиатуры.-->
<html>
<body>
<form method="POST">
    Введите любое количество цифр через пробел:
    <input type="text" name="a" value="<?php echo($_POST['a']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
$zero = 0;
$minus = 0;
$plus = 0;
$arr = explode(" ", $_POST['a']);
foreach ($arr as $numb) {
    if ($numb == 0)
        $zero++;
    if ($numb > 0)
        $plus++;
    if ($numb < 0)
        $minus++;
}
echo "Введенно {$zero} нулей<br/>";
echo "Введенно {$minus} отрицательных чисел<br/>";
echo "Введенно {$plus} положительных чисел<br/>";
?>
</body>
</html>