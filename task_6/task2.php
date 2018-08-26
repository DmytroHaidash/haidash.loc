<!--Есть массив $arr = array(“first”=>45, “second”=>76,
“third”=>12). Написать функцию, чтобы получить массив,
элементами которого являются ключи массива $arr.-->
<?php
$arr=["first"=>45, "second"=>76, "third"=>12];
$new_arr=[];
function getArrKeys($array){
    foreach ($array as $key =>$value){
        $new_arr[]=$key;
    }
    echo "<pre>";
    var_dump($new_arr);
    echo "<pre>";
}
getArrKeys($arr);
