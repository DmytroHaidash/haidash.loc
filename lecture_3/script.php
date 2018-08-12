<?php
echo "<br/>login = " . $_GET['login'];
echo "<br/>email = " . $_GET['email'];
echo "<br/>username = " . $_GET['username'];
echo "<br/>age = " . $_GET['age'];
$box = $_GET['data'];
if($box) {
    $box = 'true';
} else {
    $box='false';
}
echo "<br/>подтверждаете отправку данных = " . $box;
?>