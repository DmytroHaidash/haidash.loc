<!--Вычислить факториал заданного числа.-->
<html>
<body>
<form method="GET">
    A: <input type="text" name="a" >
    <input type="submit" value="Отправить">
</form>
<?php
$n = $_GET['a'];
$fact=1;
if ($n<0){
    echo "enter correct number";
} else {
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }

    echo $fact;
}
?>
