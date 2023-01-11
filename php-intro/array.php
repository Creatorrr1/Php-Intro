<?php
/* ----------- Arrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
$numbers = [1,2,3,4];
$ingredients = array('apple', 'orange', 'flour');

var_dump($numbers);
// output => array(4) { [0] => int(1), [1] => int(2), [2] => int(3),[3] => int(4)}

echo $fruits[1];
// output => orange

// Associative Array
$colors = [
    1 => 'blue',
    2 => 'red',
    3 => 'purple',
];

echo $colors[1];
// output => blue

$key = [
    'blue' => '#f00',
    'red' => '#0f0',
    'purple' => '#800080',
];

echo $key[1];
// output => #f00

// Multidimensional Array
// Arrays in Arrays
$people = [
    [
        'first_name' => 'Mubarak',
        'last_name' => 'Musse',
        'email' =>  'musse@email.com'
    ],
    [
        'first_name' => 'Jonathan',
        'last_name' => 'salv',
        'email' => 'jsalv@email.com'
    ],
    [
        'first_name' => 'Xayah',
        'last_name' => 'Ali',
        'email' => 'xayah@email.com'
    ]
    ];

echo $people[0]['last_name']; 

var_dump(json_encode($people));

?>