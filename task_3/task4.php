<?php
/*В переменной $min лежит число от 0 до 59. Определите в какую четверть часа
попадает это число (в первую, вторую, третью или четвертую).
Затем переделать эту задачу считывая число из формы.*/
?>
<html>
<body>
<form method="GET">
    Введите минуты от 0 до 59: <input type ="text" name="min">
    <input type="submit" value = "Отправить">
</form>
<?php
$min = $_GET['min'];
if ($min >=0 && $min <=15){
    echo "Первая четверть часа";
}elseif($min >15 && $min <=30){
    echo  "Вторая четверть часа";
}elseif($min >30 && $min <=45){
    echo  "Третья четверть часа";
}elseif($min >45 && $min <=59){
    echo  "Четвертая четверть часа";
}else{ echo "некоректноре значение";}
?>
</body>
</html>