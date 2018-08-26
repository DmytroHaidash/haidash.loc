<?php
/*Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или
равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите
'Неверно'. (Форма POST)*/
?>
<html>
<body>
<form method="POST">
    Variable a: <input type ="text" name="name_a">
    Variable b: <input type ="text" name="name_b">
    <input type="submit" value = "Отправить">
</form>
<?php
$a = $_POST['name_a'];
$b = $_POST['name_b'];
if($a>=2 && $a <= 11){
if($b>=6 && $b<=14){
echo "Верно";}echo"Неверно";}
else{ echo"Неверно";
}
?>
</body>
</html>


