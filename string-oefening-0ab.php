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

    $welcome = "Hallo iedereen<br>";
    echo "test";
    echo "<br>";
    echo $welcome;
    echo $welcome;
    echo $welcome;
    echo $welcome;
    echo $welcome;
    $substring1 = substr($welcome,0,5);
    $substring2 = substr($welcome, 6,8 );

    echo "$substring1 <br>";
    echo "$substring2 <br>";
    $substring3 = "$substring1 $substring2";
    echo "$substring3 <br>";
    echo strtoupper($substring3);
    echo "<br>";
    echo strtolower($substring3);
    echo "<br>";

    echo $welcome[1]."<br>";
    echo $welcome[10]."<br>";
    
    echo $substring3[-1]."<br>";

    $length = strlen($substring3);
    echo "The length of $welcome is $length characters"."<br>";
    $t = palindromen;
    $omdraaien = $t[10].$t[9].$t[8].$t[7].$t[6].$t[5].$t[4].$t[3].$t[2].$t[1].$t[0];
    echo $omdraaien;






    ?>

</body>
</html>