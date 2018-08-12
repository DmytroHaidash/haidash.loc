<html>
<body>
<form method="GET">
    Variable a: <input type ="text" name="name_a">
    <input type="submit" value = "Отправить">
</form>
<?php
$a = $_GET['name_a'];
if ($a== 0|| $a ==2){
    $a = $a +7;
    echo "a =".$a;
}else{
    $a= $a/10;
    echo  "a =".$a;
}
?>
</body>
</html>