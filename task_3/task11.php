<!--В программе генерируется случайное целое число от 0 до 100.
Пользователь должен его отгадать не более чем за 10 попыток.
После каждой неудачной попытки должно сообщаться больше или меньше введенное пользователем число,
чем то, что загадано.
Если за 10 попыток число не отгадано, то вывести загаданное число.-->
<html>
<body>
<form method="POST">
    <input type="hidden" name="SecretNumber" value="<?php echo $SecretNumber ?>" />
    <input type="number" name="num" value="<?php echo($_POST['num']); ?>"><br />
    <input type="submit" value="Отправить"><br />
</form>
<?php
$number = $_POST["number"];
$step = 0;
if (empty($SecretNumber)){
    $SecretNumber = rand(1,100);
}
echo "litle surp $SecretNumber";
if($step <=10){
    while ($number != $SecretNumber){
        if ($number > $SecretNumber){
            echo "Too big.";
            $step++;
        }
        elseif ($number < $SecretNumber){
            echo "Too small.";
            $step++;
        }
    }
    echo "Yeah! You answered after $step attempts! yes it was $SecretNumber";
}else {
    echo "sorry, but you don't guess my number it's was $SecretNumber";

}
?>
</body>
</html>