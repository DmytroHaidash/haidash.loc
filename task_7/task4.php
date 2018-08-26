<!--Создайте функцию col(), которая распечатает количество переданных
аргументов. Например: col(12,6,123) должна распечатать число 3.-->
<html>
<body>
<form method="POST">
    Введите любое количество цифр через запятую:
    <input type="text" name="a" value="<?php echo($_POST['a']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])){
    function col($arr){
        $col = 0;
        foreach ($arr as $num) {
            $col++;
        }
        echo "Количество аргументов: " . $col;
    }
    col($arr = explode(",", $_POST['a']));

}
?>
</body>
</html>