<?php
//task_14
/*Возьмите свой вес , посчитайте с какой силой вас притягивает земля(вес умножить на 10 ньютон на килограмм)
и с какой силой вам надо оттолкнуться от земли чтобы подпрыгнуть
(сила притяжения земли + X ньютон (взять любое число больше 300))*/
$massa=82;
$gravity=$massa*9.8;
$jump=$gravity*321;
echo "Меня тянет к горизрнтальной поверхности с силой {$gravity}<br>";
echo "Усилие для прыжка {$jump}";
echo "<br><br>";