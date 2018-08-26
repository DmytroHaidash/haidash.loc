<?php
echo "Имя пользователя: {$_POST['name']}<br/>";
echo "Комментарий: {$_POST['comment']}<br/>";
echo "Дата: ".date('d-m-Y H-i')."<br/>";
echo "Редактирование: ";
if ($_POST['edit'])
    echo "Да<br/>";
else
    echo "Нет<br/>";
echo "Удаление: ";
if ($_POST['del'])
    echo "Да<br/>";
else
    echo "Нет<br/>";
echo "Анонимность: ";
if ($_POST['unknown'])
    echo "Да<br/>";
else
    echo "Нет<br/>";