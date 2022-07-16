<?php

// --------------------------- FOR EACH ---------------------------
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun)
{
    if ($pronoun == 'He/She') {
        echo $pronoun . ' codes.<br>';
    } else {
        echo $pronoun . ' code.<br>';
    }    
};

echo '<br />';

// --------------------------- WHILE ---------------------------
$amount_of_lines = 1;

while ($amount_of_lines <= 10)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    $amount_of_lines ++; 
};

echo '<br />';

// --------------------------- FOR ---------------------------
for ($amount_of_lines = 1; $amount_of_lines <= 5; $amount_of_lines ++)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
};

echo '<br />';

// --------------------------- EXERCICES ---------------------------
    // WHILE
$numbers = 1;

while ($numbers <= 120)
{
    echo $numbers . ' ';
    $numbers ++;
};

echo '<br /> <br />';

    // FOR
for ($numbers = 1; $numbers <= 120; $numbers ++)
{
    echo $numbers . ' ';
};

echo '<br /> <br />';
    // FOREACH

$coworkers = ['Antoine', 'Semih', 'Mariya', 'Latifa', 'Quentin', 'Anais', 'Tanguy', 'Kevin', 'Dylan'];

foreach ($coworkers as $coworker)
{
    echo $coworker . '<br />';
};

echo '<br /> <br />';

    // ARRAY + DISPLAY IN SELECT INPUT FORM

$countrys = [
    'FR' => 'France',
    'DE' => 'Germany',
    'SP' => 'Spain',
    'IT' => 'Italy',
    'UK' => 'United Kingdom',
    'US' => 'United States',
    'CA' => 'Canada',
    'AUS' => 'Australia',
    'NZ' => 'New-Zealand',
    'JP' => 'Japan'
];

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
    <form action="loops.php" method="get">
        <select name="country">
            <?php foreach ($countrys as $key => $country) { ?>
                <option value="<?= $key; ?>"><?= $country; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
