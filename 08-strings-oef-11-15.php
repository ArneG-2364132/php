<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08-strings-oef-11-15</title>
</head>
<body>
    <?php
// 11. Write a PHP script to remove all leading zeroes from a string. https://www.w3resource.com/php-exercises/php-string-exercises.php 
//Original String : '000547023.24' 
//Expected Output : '547023.24' 

    echo "test"."<br>";


    $zerostring = '000547023.24';
    echo $zerostring."<br>";
    $string = ltrim($zerostring,'0');
    echo $string."<br>";
    echo "<hr>";

//12. Write a PHP script to remove part of a string. https://www.w3resource.com/php-exercises/php-string-exercises.php 
     
    
    $fox = 'The quick brown fox jumps over the lazy dog';
    echo $fox."<br>";
    echo str_replace( "fox","",$fox );
    echo "<hr>";

//13. Write a PHP script to remove trailing slash from a string. https://www.w3resource.com/php-exercises/php-string-exercises.php 


    $fox2 = 'The quick brown fox jumps over the lazy dog//'; 
    echo $fox2."<br>";
    echo rtrim($fox2,'/');
    echo "<hr>";

//14. Write a PHP script to remove comma(s) from the following numeric string. https://www.w3resource.com/php-exercises/php-string-exercises.php 

    $string = '2,543.12';
    echo $string."<br>";
    echo str_replace(',','',$string);
    echo "<hr>";

//15. Write a PHP script to get the characters after the last '/' in an
    $my_url = 'http://www.example.com/5478631';
    echo $my_url."<br>";
    echo substr($my_url, strrpos($my_url, '/' )+1)."<br>";




    ?>
</body>
</html>