<?php
function add_some_extra(&$string){
    $string .= "и кое-что еще.";
}
$str = "Это строка, ";
add_some_extra($str);
echo $str;