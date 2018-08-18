<?php
$weekdays = array(
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье');
var_dump($weekdays);
echo "</br>";
print_r($weekdays);
echo "</br>";

$str = "Hello Getz club";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
echo "</br>";
print_r($arr2);
echo "</br>";

$array = array('lasname', 'email', 'phone');
$comma_separated = implode(' ', $array);
echo $comma_separated;
echo "</br>";

$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0];
echo "</br>";
echo $pieces[1];
echo "</br>";

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass,$uid, $gid, $gecos, $home, $shell ) = explode(":", $data);
echo $user;
echo "</br>";

echo 1-rand()/rand(-20, 40);
echo "</br>";

$my_array = ['abra' => 'cadabra',
             'chuvac' => 'ololo',
             10 => "olen'",
             -5    => 290];
echo $my_array[-5];
echo "</br>";

$ara = [10, 15, 20];
unset($ara[1]);
var_dump($ara);
echo "</br>";

$my_arr1 = [1, 2, 3, 4, 5];
foreach ($my_arr1 as $value){
    echo $value, " ";
}
echo "</br>";
foreach ($my_arr1 as $key => $value){
    echo "[$key] => ", $value, "<br>";
}
foreach ($my_arr1 as &$value){
    $value*=2 ;
    echo $value, "<br>";
}
echo "</br>";
$num = [1, 2, 3, 4, 5];
foreach ($num as &$number){
    echo $number, " ";
}
unset ($number);
$number = '100';
echo "</br>";

foreach ($num as &$number){
    echo $number, " ";
}

?>