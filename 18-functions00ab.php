<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="18-functions00ab.php" method="get">
        number 1: <input type="number" name="num1"><br>
        number 2: <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <?php
    
    
    function verdubbeling($num1,$num2){
        echo "verdubbeling nummer 1 = ". 2*$num1."<br>";
        echo "verdubbeling nummer 2 = ". 2*$num2."<br>";
    }

    verdubbeling($_GET["num1"],$_GET["num2"]);

    function gemiddelde($num1,$num2){
        echo "Het gemiddelde van $num1 en $num2 is gelijk aan ". ($num1+$num2)/2 ."<br>";
    }
    gemiddelde($_GET["num1"],$_GET["num2"]);

    echo"<hr>";


    ?>
    "Oppervlakte en inhoud cilinder"
    <form action="18-functions00ab.php" method="get">
        hoogte: <input type="number" name="h"><br>
        straal: <input type="number" name="r"><br>
        <input type="submit">
    </form>
    
    <?php
    $hoogte=$_GET["h"];
    $straal=$_GET["r"];
    function oppervlakte($hoogte,$straal){
        echo "De oppervlakte van je cilinder met hoogte $hoogte en straal $straal is gelijk aan ". 2*pi()*$straal*$hoogte + 2*pi()*pow($straal,2) ."<br>"; 

    }
    oppervlakte($hoogte,$straal);

    function inhoud($hoogte,$straal){
        echo "De inhoud van je cilinder is gelijk aan ". pi()*pow($straal,2)*$hoogte. "<br>";
    }

    inhoud($hoogte,$straal);




?>
        



</body>
</html>