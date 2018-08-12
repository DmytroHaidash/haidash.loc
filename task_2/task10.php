<?php
/*Дано целое число, лежащее в диапазоне 1-999. Вывести его строку описание вида
«четное двузначное число», «нечетное трехзначное число» и т. д.*/
?>
<html>
<body>
<form method="POST">
    Введите число: <input type="text" name="number" value="<?php echo($_POST['number']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
if ($_POST['number']>0 && $_POST['number']<1000){
    if ($_POST['number']%2==0){
        $type1="Четное ";
    }else{
        $type1="Нечетное ";
    }
    if ($_POST['number']/100>=1){
        $type2="трехзначное число";
    }elseif($_POST['number']/10>=1){
        $type2="двузначное число";
    }else{
        $type2="однозначное число";
    }
    echo $type1 . $type2;
}else{
    echo "Введите цифру от 1 до 999!";
}
?>
</body>
</html>
