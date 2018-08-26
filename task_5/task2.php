<!--Найти среднее арифметическое элементов с нечетными номерами.-->

<?php
$arr = [];
for ($i=0; $i<20; $i++){
    $arr[] = rand(0,100);
}
var_dump($arr);
echo "</br>";

foreach ($arr as $key => $value){
    if ($key%2 !=0 ){
        $average += $value;
       // break;
    }
}
echo "среднее арифметическое элементов с нечетными номерами = $average";


?>
