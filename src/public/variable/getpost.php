<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post</title>
</head>

<?php

if (strlen($_POST['firstname']) < 100) {
    if (isset($_POST['firstname'])) {
        echo $_POST['firstname'];
    } else { 
        echo "No data";
    }
} else {
    echo "Too long";
}

echo "<br>";
if (isset($_POST['sexe'])){
    echo $_POST['sexe'];
} else {
    echo "No data";
}
echo "<br>";
if (isset($_POST['pays'])) {
    echo $_POST['pays'];
} else {
    echo "No data";
}
echo "<br>";
if (isset($_POST['newsletter'])) {
    echo $_POST['newsletter'];
} else {
    echo "No Newsletter";
}
echo "<br><br><br>";


if (isset($_GET['majeur']))
{
    $majeur = $_GET['majeur'];

    if ($majeur == '')
{
    echo "Vous n'avez pas indiqué votre âge";
}

if ($majeur == "oui") {
    echo "Vous êtes majeur";
} else {
    echo "Vous n'êtes pas majeur";
}
}

?>

<body>


<p>Etes vous majeur ? :</p>
<br>
<a href="getpost.php?majeur=oui">OUI</a>
<br>
<a href="getpost.php?majeur=non">NON</a>
<br>
<br>


    <form action="getpost.php" method="post" name="form">
        <label for="firstname">Prénom :</label> <input type="text" name="firstname" id="firstname">
        <br/>
        <label for="sexe">Sexe :</label>
        <input type="radio" name="sexe" value="H" id="homme">Homme
        <input type="radio" name="sexe" value="F" id="femme">Femme
        <br/>
        <label for="pays">Pays :</label> <select name="pays" id="pays">
            <option value="FR">France</option>
            <option value="ES">Espagne</option>
            <option value="IT">Italie</option>
            <option value="ENG">Angleterre</option>
        </select>
        <br/>
        <label for="newsletter">Inscription newsletter :</label> <input type="checkbox" name="newsletter" id="newsletter" value="yes">
        <br/>
        <input type="submit" value="Envoyer">
    </form>
    
</body>
</html>