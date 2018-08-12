<html>
<body>
<form method="GET">
    Номер месяца от 1 до 12: <input type ="text" name="mounth">
    <input type="submit" value = "Отправить">
</form>
<?php
$mounth = $_GET['mounth'];
if ($mounth <=2 || $mounth ==12){
    echo "Это зима";
}elseif($mounth >2 && $mounth <=5){
    echo  "Это весна";
}elseif($mounth >5 && $mounth <=8){
    echo  "Это лето";
}elseif($mounth >8 && $mounth <=11){
    echo  "Это осень";
}else{ echo "Нет такого месяца =)";}
?>
</body>
</html>