<?php
$arra = [ ['Вася', 'Слесарь', 2500],
    ['Миша', 'Строитель', 3000],
    ['Андрей', 'Шофер', 2700]
];
for ($row =0; $row <3; $row++) {
   echo "$row ";
   echo "<br>";

    foreach ($arra[$row] as $key => $value) {
        echo  $value ."<br>" ;
    }

}
?>
