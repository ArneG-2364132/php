<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo "<h1>Arne's site</h1>";
    echo "<hr>";
    echo "<p>This is my site</p>";

    echo "   ___                  _____            __ <br>";    
    echo "  / _ | _______  ___   / ___/__ _______ / /____<br>";
    echo " / __ |/ __/ _ \/ -_) / (_ / -_) __/ -_) __(_-<<br>";
    echo "/_/ |_/_/ /_//_/\__/  \___/\__/_/  \__/\__/___/<br>";
  
  
    $age = 5;
    $name = "Salama";

echo "There once was a man named $name <br>";

echo "He was $age years old <br>";

echo "He really liked the name $name <br>";

echo "But didn't like being $age <br>";
echo "<hr>";


$string = "this is a string between parentheses";
$integer = -50;
$float = 0.5;
$boolean = false;
$null = null;

echo "String: $string <br>";                                               
echo "integer: $integer <br>";
echo "float: $float <br>";
echo "boolean: $boolean <br>";
echo "null = $null <br>";
echo "<hr>";

$phrase = "Very good text<br>";

echo strtoupper($phrase);
echo "<br>";
echo strtolower($phrase);
echo "<br>";
echo strlen($phrase);
echo " scharacters";
echo "<br>";
echo $phrase[0];
echo "<br>";
$phrase[0] = "N";
echo $phrase;echo "<hr>";
echo "<br>";
echo str_replace("text","live", $phrase);
echo "<br>";
echo substr($phrase, 5,4);
echo "<hr>";




?> 
</body>
</html>