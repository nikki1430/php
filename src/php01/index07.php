<?php
$people = [
    [
        'name' => 'Taro',
        'age' => '25',
        'sex' => 'men'
    ],
    [
        'name' => 'Jiro',
        'age' => '20',
        'sex' => 'men'
    ],
    [
        'name' => 'hanako',
        'age' => '16',
        'sex' => 'women'
    ],
];

foreach ($people as $person) {
    echo $person['name'] . '(' . $person['age'] . '歳' . $person['sex'] . ')' . '<br />';
}
