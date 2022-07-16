<?php

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

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

echo "<pre>";
print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="height: 100vh; overflow-y: hidden; display: flex; justify-content: center; align-items: center;">
    <form action="forms.php" method="post" style="display: flex; flex-direction: column; gap: 2px">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="country">Country</label>
        <select name="country" id="country">
            <?php
            foreach ($countrys as $key => $country)
            {
                echo '<option value="' . $key . '">' . $country . '</option>';
            };
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>