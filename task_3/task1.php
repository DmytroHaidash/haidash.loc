<?php
/*Дано натуральное n.
Вычислить: 1 + 1/2 + 1/3 + 1/4 + ... + 1/n.*/
?>
<html>
<body>
<form method="GET">
A: <input type="text" name="a" >
<input type="submit" value="Отправить">
</form>
<?php
$n = $_GET['a'];
$sum=0;
if ($n<0){
    echo "enter correct number";
} else {
    for ($i = 1; $i <= $n; $i++) {
        $sum += +1 / $i;
    }

    echo $sum;
}
?>
