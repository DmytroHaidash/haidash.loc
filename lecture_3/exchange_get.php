<html>
<body>
<form method="GET">
    Money: <input type ="text" name="money" >
    Course: <input type ="text" name="course">
    <input type="submit" value = "Отправить">
</form>
<?php
echo "<br/>uah = " . $_GET['money'];
echo "<br/>course = " . $_GET['course'];
$usd = $_GET['money'] / $_GET['course'];
echo "<br/>usd = {$usd}" ;
?>

</body>
</html>