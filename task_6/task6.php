<!--Для проверки остаточных знаний учеников после летних
каникул, учитель младших классов решил начинать каждый
урок с того, чтобы задавать каждому ученику пример из
таблицы умножения, но в классе 15 человек, а примеры среди
них не должны повторяться. В помощь учителю напишите
программу, которая будет выводить на экран 15 случайных
примеров из таблицы умножения (от 2*2 до 9*9, потому что
задания по умножению на 1 и на 10 — слишком просты). При
этом среди 15 примеров не должно быть повторяющихся
(примеры 2*3 и 3*2 и им подобные пары считать
повторяющимися).-->
<?php
$tab = [];
$tab_15 = [];
for ($i = 2; $i < 10; $i++) {
    for ($j = 2; $j < 10; $j++)
        $tab[$i][$j] = $j ? $i ? $i * $j : $j : $i;
}
$count = 1;
for ($a = 0; $a < 63; $a++) {
    $row = rand(2, 9);
    $col = rand(2, 9);
    if($count>15){
        break;
    } elseif (!in_array($tab[$row][$col], $tab_15)) {
        $tab_15[]=$tab[$row][$col];
        echo "{$count}) {$row} x {$col} = ? (ответ {$tab[$row][$col]})<br/>";
        $count++;
    }
}