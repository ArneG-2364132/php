<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>09-math</title>
</head>
<body>
    <?php
    use Random\Randomizer;
    echo "test<hr>";

    //1. Write a PHP script which rounds the following values with 1 decimal digit precision. https://www.w3resource.com/php-exercises/php-math-exercises.php 
    $val = 1.65;    
    echo $val."<br>";
    echo round($val,1)."<br>";
    echo round($val,1,PHP_ROUND_HALF_DOWN)."<br>";
    $val -= 0.1;
    echo round($val,1,PHP_ROUND_HALF_DOWN)."<br>";

    //2. Write a PHP script to calculate the sinus, cosinus and tangens from an angle (0-360°) 
        echo sin(90)."<br>";

    //3. Write a PHP script to convert scientific notation to an int and a float. https://www.w3resource.com/php-exercises/php-math-exercises.php
        $scientific = '4.5e3';
        echo intval($scientific)."<br>";
        echo floatval($scientific)."<br>";

    //4. Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy. https://www.w3resource.com/php-exercises/php-math-exercises.php 
        $American = '05/17/2005';
        $month = substr($American,0,2);
        $day = substr($American,3,2);
        $year = substr($American,6,4);
        $European = $day.'/'.$month.'/'.$year;
        echo $European."<br>";

    //5. Write a PHP script to generate random 11 characters string of letters and numbers.
        $c = '0123456789abcdefghijklmnopqrstuvwxyz';
        echo $c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)].$c[rand(0,32)]."<br>";




    ?>
    
</body>
</html>