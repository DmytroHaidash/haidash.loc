<?php
function add($a, $b){
    return $a + $b;
}
echo add(...[1,2])."\n";

$a = [1,2];
echo add(...$a);

$x=5;
echo "bla $x =5";
$_kj;