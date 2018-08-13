<?php
/**
 * Created by PhpStorm.
 * User: Надюшечка
 * Date: 13.08.2018
 * Time: 18:47
 */
?>
<html>
<body>
<form method="GET">
   A: <input type="text" name="age" >
    <input type="submit" value="Отправить">
</form>
<?php
$a = $_GET['age'];
/*$message = ($a >18)?"ok":((a >50)? "yes":"NO");
echo $message;*/

/*$b = "98765";
echo($b[3]);*/

/*switch ($a){
    case 'apple':
    case 'orange':
        echo "yes, its fruit";
        break;
    case "potato" :
        echo "this is no fruit, its vegetables";
        break;
    default:
        echo "no, its something else";
}*/

/*$a = 2;
while($a<5){
    $a++;
    echo $a;
}

$b = 2;
do {
    $b++;
    echo $b;
}
while ($b<5);*/
/*$a=2;
for($i = 0; $i<5; $i++)
{
    $a++;
    echo $a;
}*/
/*$a=0;
$b=0;
for($i=0; $i<5; $i++){
    $a++;
    $b++;
    for($j=0; $j<3; $j++){
        $b++;
    }
}
echo $a . " " .$b;*/

for($i=0; $i<10; $i++){
    echo $i ." ";
if($i%2==0){
    continue;
}
echo"<br>";
}



?>
</body>
</html>