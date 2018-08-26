<!--7. Преобразовать строку, введённую пользователем, так, чтобы буквы
каждого слова в ней были отсортированы по алфавиту.-->
<html>
<body>
<form method="POST">
    Введите предложение: <input type="text" class="str" name="str" value="<?php echo($_POST['str']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    function str_abc($str) {
        $str_arr = explode(" ", $str);
        foreach ($str_arr as &$value) {
            $value = str_split($value);
            asort($value);
            $value = implode('', $value);
        }
        return implode(" ", $str_arr);
    }
    echo str_abc($_POST['str']);
}
?>
</body>
</html>