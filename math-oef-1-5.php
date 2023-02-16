<html>
    <head>
        <meta charset="utf-8">
        <title>
            math oef 1-5
        </title> 
    </head>
    <body>
       <?php
       // 1. Write a PHP script which rounds the following values with 1 decimal digit precision.
       $n1a = 1.65;
       echo round ($n1a, 1)."<br>";
       $n1b = 1.65;
       echo round($n1b, 1, PHP_ROUND_HALF_DOWN)."<br>";
       $n1c = -1.54;
       echo round($n1c, 1, PHP_ROUND_HALF_DOWN)."<br>";
       // 2. Write a PHP script to calculate the sinus, cosinus and tangens from a angle (0-360°) 
       $n2 = 30;
       echo sin($n2)."<br>";
       echo cos($n2)."<br>";
       echo tan($n2)."<br>";
       // 3. Write a PHP script to convert scientific notation to an int and a float.
       $n3 = 4.5e3;
       echo (int) $n3;
       echo (float) $n3;
        ?>
    </body>
</html>