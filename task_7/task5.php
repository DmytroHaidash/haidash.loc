<!--Напишите функцию op(), которая принимает три аргумента: $num1 и
$num2 – числовые, $operator – символ, обозначающий
операцию. Функция должна возвращать результат выполнения
оператора $operator над $num1 и $num-->
<html>
<body>
<form method="POST">
    Введите перое число: <input type="text" name="num1" value="<?php echo($_POST['num1']); ?>"><br/>
    Введите оператор:  <input type="text" name="operator" value="<?php echo($_POST['operator']); ?>"><br/>
    Введите второе число: <input type="text" name="num2" value="<?php echo($_POST['num2']); ?>"><br/>
    <input type="submit" name="button" value="Отправить">
</form>
<?php
if (isset($_POST['button'])){
    function op($a, $b, $oper) {
        if ($b == 0 && $oper == '/') {
            return "На ноль делить нельзя!";
        } else {
            switch ($oper){
                case "+":
                    return $a+$b;
                    break;
                case "-":
                    return $a-$b;
                    break;
                case "/":
                    return $a/$b;
                    break;
                case "*":
                    return $a*$b;
                    break;
            }
        }
    }
    echo op($_POST['num1'], $_POST['num2'], $_POST['operator']);

}
?>
</body>
</html>