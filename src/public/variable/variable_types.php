<?php 

$my_name = 'Kevin';
$my_age = '29';
$my_eyes_color = 'red like the devil';
$my_family = [
    0 => 'Papa', 
    1 => 'Maman', 
    2 => 'Frere 1', 
    3 => 'Frere 2', 
    4 => 'Frere 3', 
    5 => 'Cousins'];
$hungry = true;

$my_family[] = 'Cousines ouais ouais';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi!</h1>
    <p>My name is <?= $my_name; ?>.</p>
    <p>I'm <?= $my_age; ?> years old.</p>
    <p>My eyes color is <?= $my_eyes_color; ?>.</p>
    <p>My family is:</p>
    <ul>
        <?php foreach ($my_family as $member) { ?>
            <li><?= $member; ?></li>
        <?php } ?>
    </ul>
    <p>I'm <?= $hungry ? 'hungry' : 'not hungry'; ?>.</p>
</body>
</html>