<?php
$arr = [
    0 => 'book1.pdf',
    1 => 'book11.pdf',
    2 => 'book12.pdf',
    3 => 'book2.pdf'
];
$arr_sort = [];
$nums = [];
//нужно сделать проверку чмсел от букв отдельно
asort($nums);
foreach ($nums as $key => $val) {
    $arr_sort[] = $arr[$key];
}
echo "<pre>";
var_dump($arr_sort);
echo "<pre>";






$employees = [
    [
        'name' => 'Clark Kent',
        'age' => 22,
        'skills' => ['PHP', 'Java', 'C#']
    ],
    [
        'name' => 'Steve Stifler',
        'age' => 21,
        'skills' => ['С++', 'JS', 'CSS', 'HTML']
    ],
    [
        'name' => 'Bruce Wayne',
        'age' => 35,
        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
    ],
    [
        'name' => 'Peter Parker',
        'age' => 18,
        'skills' => ['PHP Unit', 'C', 'Pascal']
    ]
];

$found = ['PHP', 'PHP Unit'];
foreach ($employees as $k => $v) {
    foreach ($v as $key => $value) {
        if (is_array($value)) {
            if (in_array($found[0], $value) && in_array($found[1], $value)) {
                echo "Полное совпадение с требованиями<br/>";
                echo "Имя: ".$v['name']."<br/>";
                echo "Возраст: ".$v['age']."<br/>";
                echo "<hr>";
                exit;
            }elseif (in_array($found[0], $value) || in_array($found[1], $value)){
                echo "Не полное совпадение с требованиями<br/>";
                echo "Имя: ".$v['name']."<br/>";
                echo "Возраст: ".$v['age']."<br/>";
                echo "<hr>";
            }else{continue;}
        }
    }
}
