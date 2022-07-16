<?php

$me = [
    'firstname' => 'Kevin',
    'lastname' => 'Richard',
    'age' => 29,
    'season_fav' => 'Winter',
    'hobbies' => [
        'play video games',
        'watch movies',
        'coding of course'
    ],
    'like_soccer' => false,
    'like_coding' => true
    ];

$mother = [
    'firstname' => 'Laetitia',
    'lastname' => 'Trutet',
    'age' => 50,
    'season_fav' => 'Spring',
    'hobbies' => [
        'sewing',
        'watch movies',
        'walk in nature'
    ],
    'like_soccer' => false
    ];

$soulmate = [
    'firstname' => 'Alicia',
    'lastname' => 'Mgm',
    'age' => 28,
    'season_fav' => 'Summer',
    'hobbies' => [
        'play video games',
        'watch series',
        'playing with my dog'
    ],
    'like_soccer' => false,
];

$intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$joined_array = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($intersection);
print_r($joined_array);
echo '</pre>';

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi!</h1>
    <p>My name is <?= $me['firstname']; ?>.</p>
    <p>I'm <?= $me['age']; ?> years old.</p>
    <p> My favourite season is <?= $me['season_fav'] ?></p>
</body>
</html> -->
