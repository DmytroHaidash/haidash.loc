<!--Найти сумму тех элементов массива, которые одновременно имеют
четные и отрицательные значения. Размер массива задаёт
пользователь. Например, в массиве [3, -5, -2, 4, -8, 0] отрицательными
четными элементами являются числа -2 и -8. Их сумма равна -10.-->

<html>
        <body>
        <form method="POST">
            Введите массив положительных и отрицательных чисел через пробел:
            <input class="nums" type="text" name="nums" value="<?php echo($_POST['nums']); ?>"><br/>
            <input type="submit" name="button" value="Отправить">
        </form>
        <?php
        if (isset($_POST['button'])) {
            $arr = explode(" ", $_POST['nums']);
            $sum=0;
            foreach($arr as $value){
                if ($value<0 && $value%2==0){
                   $sum+=$value;
                }
            }
            echo "Сумма отрицательных четных элементов массива: ".$sum;
        }
        ?>
    </body>
</html>