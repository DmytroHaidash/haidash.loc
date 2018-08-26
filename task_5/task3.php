<!--Заменить все большие 7 элементы массива на 7. Подсчитать количество
таких элементов.-->
<?php
$arr = [];
$counter = 0;
for ($i=0; $i<20; $i++){
    $arr[] = rand(0,25);
}
var_dump($arr);
echo "</br>";

foreach ($arr as $key => $value){
    if ($value >=7 ){
        $value = $value + 7;
        $arr[$key] = $value;
        $counter++;
        // break;
    }
}
echo "колличество замененных элементов $counter";
echo "</br>";
var_dump($arr);


?>
