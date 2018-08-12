<html>
<body>
<form method="GET">
    Variable a: <input type ="text" name="name_a">
    <input type="submit" value = "Отправить">
</form>
<?php
$a = $_GET['name_a'];
if($a == 'test'){
    echo "yes, compare a = ".$a;
}else {
    echo "No, try again";
}
?>
</body>
</html>