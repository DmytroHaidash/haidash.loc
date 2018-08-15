<!--Сформировать из введенного числа обратное по порядку входящих в него цифр и вывести на
экран. Например, если введено число 3486, то надо вывести число 6843
-->
<html>
<body>
<form method="POST">
    Введите цифру которую я выведу в обратном порядке:
    <input type="text" name="a" value="<?php echo($_POST['a']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
$output="";
if ($_POST['a'] < 0) {
    echo "Введите положительное число!";
} else {
    $str_arr = array_reverse(str_split($_POST['a']));
    foreach ($str_arr as $num) {
        $output.=$num;
    }
    echo $output;
}
?>
</body>
</html>