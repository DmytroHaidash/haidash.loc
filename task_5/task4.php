<!--Создать новый массив, который является зеркальным переворотом
массива ([1, 2, 3, 4] -> [4, 3, 2, 1]).-->
<?php
$arr = [];
$new_arr = [];
for ($i=0; $i<10; $i++){
    $arr[] = rand(0,25);
}
print_r($arr);
echo "</br>";

for ($i=count($arr)-1;$i>=0;$i--){
    $new_arr[]=$arr[$i];
}
print_r($new_arr);
