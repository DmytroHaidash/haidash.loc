<?php
$arr = [];
for($i = 2; $i <10; $i++){
    for($j = 2; $j <10; $j++) {
        $arr [$i][$j] = $i * $j;
    }
}
echo "<table>";
for ($i =0; $i <10; $i++) {
    echo "<tr>";
    for ($j = 2; $j <10; $j++){
        echo "<td>" . $arr [$i][$j] . "</td>";
    }
    echo "</tr>";

}
echo "</table>";



