<?php
/*Идёт матч Англия:Бельгия. За каждый гол Англии коэффициент будет повышаться
на 1,5, а на каждый гол Бельгии на 2,5. Если одна из команд не забила ни одного
гола, ставить ей коэффициент разницы коэффициентов. Вычислить прибыль
пользователя в обоих случаях при вводе указаной им суммы и счёта. */
?>
<html>
<body>
<h2>Футбольный матч Англия - Бельгия</h2>
<h3>Расчет размера выиграша ставки</h3>
<form method="POST">
    Введите ставку: <input type="text" name="cash" value="<?php echo($_POST['cash']); ?>"><br/>
    Количество голов, забитых Англией: <input type="text" name="score_eng" value="<?php echo($_POST['score_eng']); ?>"><br/>
    Количество голов, забитых Бельгией: <input type="text" name="score_bel" value="<?php echo($_POST['score_bel']); ?>"><br/>
    <input type="submit" value="Отправить">
</form>
<?php
if ($_POST['score_eng'] >= 0 && $_POST['score_bel'] >= 0 && $_POST['cash'] >= 0) {
    $eng_cof = 1.1;
    $bel_cof = 1.25;
    $cof_0=$bel_cof-$eng_cof;
    if ($_POST['score_eng'] == 0) {
        $eng_cof = $cof_0;
    }
    if ($_POST['score_bel'] == 0) {
        $bel_cof = $cof_0;
    }
    while ($_POST['score_eng'] > 0) {
        $eng_cof += 1.5;
        --$_POST['score_eng'];
    }
    while ($_POST['score_bel'] > 0) {
        $bel_cof += 2.5;
        --$_POST['score_bel'];
    }
    var_dump($eng_cof);
    echo "При ставке на Англию выигрыш составит: " . $_POST['cash'] * $eng_cof . "<br/>";
    var_dump($bel_cof);
    echo "При ставке на Бельгию выигрыш составит: " . $_POST['cash'] * $bel_cof;
} else {
    echo "Ставка и количество голов должны быть положительными числами";
}
?>
</body>
</html>
