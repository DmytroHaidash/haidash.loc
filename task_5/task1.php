<!--Создать массив из 10 случайных целых чисел, найти в нём первое
соответствие с тем числом, которое ввёл пользователь в форму.
Вывести число и его индекс.-->
<html>
<body>
<form method="GET">
    Введите число: <input type ="text" name="int">
    <input type="submit" value = "Отправить">
</form>
<?php
$a = $_GET['int'];
$arr = [];
for ($i=0; $i<10; $i++){
    $arr[] = rand(-5,10);
}
var_dump($arr);
echo "</br>";

foreach ($arr as $key => $value){
    if ($value == $a){
        echo "[$key] => ", $value;
        break;
    }
}


?>
</body>
</html>