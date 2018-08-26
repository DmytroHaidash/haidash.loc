<?php
function maketea($type = "зеленого", $flavour){

    return "Готовим чашку $type чая со вкусом $flavour. \n";
}
echo maketea(); //ошибка изза того что не передали значение
echo "<br>";
echo maketea("", "малины"); // первое значение оставили стандартным и тут не будет ошибки