<?php
/*Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 'test', 'тест', 4. (Форма GET)*/
?>
<html>
<body>
<form method="GET">
    Variable a: <input type ="text" name="name_a">
    <input type="submit" value = "Отправить">
</form>
<?php
$a = $_GET['name_a'];
if($a == 'test'){
    echo "yes, compare a = ".$a;
}else {
    echo "No, try again";
}
?>
</body>
</html>