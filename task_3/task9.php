<?php
/*В переменной $year хранится год. Определите, является ли он високосным (в таком
году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4,
но при этом не делится на 100, либо делится на 400.*/
?>
<html>
<body>
<form method="POST">
    Введите год: <input type="text" name="year" value="<?php echo($_POST['year']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
if ((($_POST['year']%4)==0 && ($_POST['year']%100)>0)||($_POST['year']%400)==0){
    echo "{$_POST['year']} год високосный";
}else{
    echo "{$_POST['year']} год не високосный";
}
?>
</body>
</html>
