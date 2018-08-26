<?php
function makecoffee($types = array("капучино"), $coffeeMaker = NULL){
    $device = is_null($coffeeMaker)? "вручную" : $coffeeMaker;
    return "Готовим чашку ".join (", ", $types)." $device.\n";
}
echo makecoffee();
echo makecoffee(array("эспрессо", "лавацца"), ' в чайнике');