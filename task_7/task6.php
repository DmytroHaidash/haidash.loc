<!--6. Написание системы комментариев на PHP.
1)Отправка комментария пользователем.
2)Отображение времени отправки комментария.
3)Отображение имени отправителя.
4)Возможность редактирования комментария.
5)Возможность удаления комментария.
6)Возможность отправить комментарий анонимно.

Создать форму которая содержит все вышеперечисленные пункты.
(возможность – это чекбокс). Поскольку у нас ещё нет возможности
реализовать это через фреймворк, сделать функцию в отдельном файле и
переходить в файл с вызовом этой функции по нажатию кнопки отправки
формы. Функция должна выводить на экран всю введённую информацию
из формы.-->
<html>
<body>
<form method="POST" action="task6_script.php">
    Введите Ваше имя: <input type="text" name="name"><br/>
    Введите комментарий:<br/><textarea class="text" name="comment" cols="40" rows="6"></textarea><br/>
    Возможность редактирования комментария: <input type="checkbox" name="edit"><br/>
    Возможность удаления комментария: <input type="checkbox" name="del"><br/>
    Анонимный комментарий: <input type="checkbox" name="unknown"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
</body>
</html>