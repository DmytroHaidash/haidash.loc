<?php
/*Ученик вводит с клавиатуры число, символ арифметического действия (+, -, *, /) и
еще одно число. Компьютер должен напечатать результат.*/
?>

<html>
<body>
<form method="POST">
    <h1>Калькулятор</h1>
    Введите первое число: <input type="text" name="first_n" value="<?php echo($_POST['first_n']); ?>"><br/>
    Введите второе число: <input type="text" name="second_n" value="<?php echo($_POST['second_n']); ?>"><br/>
    Введите оператор: <input type="text" name="operator" value="<?php echo($_POST['operator']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php

if ($_POST['operator'] == "+") {
    echo "Результат: ". ($_POST['first_n'] + $_POST['second_n']);
} elseif($_POST['operator'] == "-") {
    echo "Результат: ". ($_POST['first_n'] - $_POST['second_n']);
} elseif($_POST['operator'] == "*") {
    echo "Результат: ". ($_POST['first_n'] * $_POST['second_n']);
} elseif($_POST['operator'] == "/") {
    echo "Результат: ". ($_POST['first_n'] / $_POST['second_n']);
}else {
    echo "Введен некорректный оператор! Воспользуйтесь следующими:<br>* умножение,<br>/ деление,<br>- вычитание,<br>+ сложение";
}
?>
</body>
</html>

