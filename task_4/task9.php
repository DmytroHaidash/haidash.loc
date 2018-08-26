<!--Нарисовать равнобедренный треугольник из символов ^
Высоту выбирает пользователь. Например: высота = 5 символов на экране-->

<html>
<body>
<form method="POST">
    Введите высоту пирамиды: <input type="text" name="a" value="<?php echo($_POST['a']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
if ($_POST['a'] > 0) {
    $loop=1 ;
    for ($j = $_POST['a']; $j > 0; $j--) {
        for ($i = $j; $i > 0; $i--) {
            echo "&nbsp;";
        }
        if ($_POST['a'] % 2 != 0) {
            $z = 1;
        } elseif ($_POST['a'] % 2 == 0) {
            $z = 2;
        }
        for (; $z < $loop+1; $z++) {
            echo "^";
        }
        echo "<br/>";
        $loop+=2;
    }
} else {
    echo "Введите положительное число!";
}
?>
</body>
</html>