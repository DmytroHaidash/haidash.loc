<?php
/*Необходимо написать программу, которая проверяет пользователя на знание
таблицы умножения. Пользователь сам вводит два целых однозначных числа.
Программа задаёт вопрос: результат умножения первого числа на второе.
Пользователь должен ввести ответ и увидеть на экране правильно он ответил или
нет. Если нет – показать еще и правильный результат.*/
?>
<html>
<body>
<form method="POST">
    <h1>Таблица умножения</h1>
    Введите первое число: <input type="text" name="first_n" value="<?php echo($_POST['first_n']); ?>">
    Введите второе число: <input type="text" name="second_n" value="<?php echo($_POST['second_n']); ?>"><br/>
    Введите результат умножения первого и второго числа: <input type="text" name="result"
                                                                value="<?php echo($_POST['result']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php

if ($_POST['first_n']>=0 && $_POST['first_n']<10 && $_POST['second_n']>=0 && $_POST['second_n']<10){
    if($_POST['result']==$_POST['first_n']*$_POST['second_n']){
        echo "Это правильный ответ!";
    }else{
        echo "Неверно! Правильный ответ ". $_POST['first_n']*$_POST['second_n'];
    }
}else{
    echo "Первое и второе число должны быть целыми однозначными цифрами";
}
?>
</body>
</html>
