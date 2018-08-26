<!--Создать функцию в PHP — getPlus10(), которая будет принимать
число и распечатывать сумму этого числа и 10.-->

<html>
<body>
<form method="GET">
    Введите число: <input type ="text" name="int">
    <input type="submit" value = "Отправить">
</form>
<?php
if (isset($_POST['button'])) {
    function getPlus10($a)
    {
        echo "Ваше число + 10 равно: " . ($a + 10);
    }

    getPlus10($a = $_GET['int']);
}
?>
</body>
</html>