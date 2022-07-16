<?php

$suisse = '606 suisses sucent 606 saucisses dont 6 en sauce et 6 sans sauce.';

// ---------------------------- FIRST EXAMPLE ---------------------------------

$names = ['Jean', 'Pierre', 'Paul'];

function sayHello($name)
{
    echo 'Hello ' . $name . ' ! <br/>';
}

foreach ($names as $name)
{
    sayHello($name);
}

// ---------------------------- FUNCTION SHUFFLE LETTERS ---------------------------------

$str = str_shuffle($suisse);

echo '<br/>';
echo $str;
echo '<br/> <br/>';

// ---------------------------- EXERCICES ---------------------------------

$my_name = 'kevin';

echo ucwords($my_name);
echo '<br/> <br/>';

// ----------------------------------------------------------------

echo date("Y");
echo '<br/> <br/>';
echo date('l jS \of F Y h:i:s A');
echo '<br/> <br/>';

// ----------------------------------------------------------------

$number_one = 666;
$number_two = 333;

function add($number_one, $number_two)
{
    $result = $number_one + $number_two;
    return $result;
}

$result = add($number_one, $number_two);

echo $result;
echo '<br/> <br/>';

// -----------------------------------------------------

function add_string($number_one, $number_two)
{
    if (is_string($number_one) || is_string($number_two))
    {
        return 'Error';
    }
    else
    {
        $result = $number_one + $number_two;
        return $result;
    }
}

$with_string = add_string($number_one, $number_two);

echo $with_string;
echo '<br/> <br/>';

// ---------------------------------------------------------

$my_friends = ['Pierre', 'Paul', 'Jacques', 'Marcel'];

function acronym ($array)
{
    $result = '';
    foreach ($array as $friend)
    {
        $result .= $friend[0];
    }
    return $result;
}

echo acronym($my_friends);
echo '<br/> <br/>';

// ---------------------------------------------------------

function replace_ae($str)
{
    $str = str_replace('ae', 'æ', $str);
    return $str;
}

function replace_ae_2($str)
{
    $str = str_replace('æ', 'ae', $str);
    return $str;
}

$string = 'caecotrophie';
$string2 = 'cæcotrophie';

echo replace_ae($string);
echo '<br/> <br/>';
echo replace_ae_2($string2);

// ---------------------------------------------------------

// Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning").

function message($message, $css_class)
{
    return '<div class="' . $css_class . '" style>' . $message . '</div>';
}

echo message('This is a notice', 'info');