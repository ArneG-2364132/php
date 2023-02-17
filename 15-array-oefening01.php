<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>

<?php

$producten = array("Boeken","CD's","Smarphones","DVD's");
print_r($producten);
echo "<br>";
echo count($producten)." producten zijn beschikbaar <br>";
echo var_dump($producten)."<br>";
unset($producten[2]);
print_r($producten)."<br>";
echo isset($producten[1])."<br>";




?>
    
</body>
</html>