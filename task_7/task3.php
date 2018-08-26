<!--Напишите функцию pythagoras(), которая принимает значения двух
катетов прямоугольного треугольника и возвращает размер гипотенузы
этого прямоугольного треугольника. Примечание: может
пригодиться встроенная PHP-функция pow().-->

<html>
<body>
<form method="POST">
    Введите первый катет: <input type ="text" name="cat1">
    Введите второй катет: <input type ="text" name="cat2">
    <input type="submit" name="butt" value = "Отправить">
</form>
<?php
if (isset($_POST['butt'])){
    function pythagoras ($a, $b){
        $c = sqrt(pow($a, 2)+ pow($b,2));
        return $c;
    }
    echo "Размер гипотенузы: ".pythagoras ($_POST['cat1'], $_POST['cat2']);

}
?>
</body>
</html>