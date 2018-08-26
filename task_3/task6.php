<?php
/*Ввести оценки ученика по 5ти предметам. Посчитать средний балл и перевести его
в словарный эквивалент. Например 0-30 – выгнать, 30-60 не зачёт, 60-74 –
удовлетворительно, 75-89 – хорошо, 90-100 – отлично.*/
?>
<html>
<body>
<form method="POST">
    Математика: <input type="text" name="chemistry" value="<?php echo($_POST['chemistry']); ?>"><br/>
    География: <input type="text" name="geography" value="<?php echo($_POST['geography']); ?>"><br/>
    Физика: <input type="text" name="physics" value="<?php echo($_POST['physics']); ?>"><br/>
    Литература: <input type="text" name="lang" value="<?php echo($_POST['lang']); ?>"><br/>
    Физ. культура: <input type="text" name="phys_cul" value="<?php echo($_POST['phys_cul']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
$average = ($_POST['chemistry'] + $_POST['geography'] + $_POST['physics'] + $_POST['lang'] + $_POST['phys_cul']) / 5;
if ($average >= 0 && $average <= 100 && $_POST['chemistry'] >= 0 && $_POST['chemistry'] <= 100
    && $_POST['geography'] >= 0 && $_POST['geography'] <= 100 && $_POST['physics'] >= 0
    && $_POST['physics'] <= 100 && $_POST['lang'] >= 0 && $_POST['lang'] <= 100
    && $_POST['phys_cul'] >= 0 && $_POST['phys_cul'] <= 100) {
    if ($average >= 0 && $average < 30) {
        echo "Выгнать студента!!!";
    } elseif ($average >= 30 && $average < 60) {
        echo "Не зачет!";
    } elseif ($average >= 60 && $average < 75) {
        echo "Удовлетворительно";
    } elseif ($average >= 75 && $average < 90) {
        echo "Хорошо";
    } else {
        echo "Отлично";
    }
} else {
    echo "Введены некорректные данные!Оценки должны быть от 0 до 100 баллов!!!";
}
?>
</body>
</html>