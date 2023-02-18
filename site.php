<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
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

echo -40.3."<br>";
echo "5+9=". 5 + 9 . "<br>";
echo "5 divided by 9 is equal to ". 5 / 9 ."<br>";
echo "the remainder (modulo) of 5∕9 = ". 5 % 9 . "<br>";
echo "this follows the normal math rules so 5+9*10 equals to ". 5+9*10 ."<br>";

$num = 10;
echo $num."<br>";
echo $num++."<br>";
$num +=10;
echo $num."<br>";
echo "two raised to the power of four = ". pow(2,4);"<br>";
echo min(1,2)." is smaller than ".max(1,2) ."<br>";
$number = 1.55;
echo $number."<br>";
echo round($number,1)."<br>";
echo floor($number)."<br>";
echo ceil($number)."<br>";


echo "<hr>";

?> 
<form 
    action="site.php" method="get" >
   Name: <input type="text" name="name">
    <input type="submit">
</form>       
    <?php echo $_GET["name"]."<br>" ?>


<form action='site.php' method="get">
    <input type='number' name='num1' >
    <br>
    <input type='number' name='num2'>
    <input type= 'submit'>

</form>

    <?php
echo $_GET["num1"] + $_GET['num2'].'<br>';

echo "<hr>";
?>
<form
    action="site.php" method="get">
    Color: <input type="text" name="color"> <br>
    plural noun: <input type="text" name="noun"> <br>
    celebrity: <input type="text" name="celebrity"> <br>
    
    <input type="submit"> <br>
    </form>
    <?php
    $color =  $_GET["color"];
    $noun =  $_GET["noun"];
    $celebrity = $_GET["celebrity"];
        
    
        echo "roses are $color <br>";
        echo "$noun are blue <br>";
        echo "I love $celebrity <br>";


?>
<form action="site.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">
    
</form>
<?php
    echo $_POST['password']
?>

<?php

echo "<hr>";
$array = array("test","salama","el","menoufi",6,9);
echo $array ."<br>";
echo $array[1]."<br>";
$array[0] = "modified";
$array[6] = "added";
?>

<form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
</form>

<?php
    $fruits= $_POST["fruits"];
    echo $fruits[0]."<br>";

    $grades = array("Jim"=>8,"Arne"=>10,"Salama"=>0);
    echo $grades["Arne"];
    echo "<hr>";

    function sayHi($name, $age){

        echo "hello $name, you are $age years old<br>";


    }
    sayHi("BOB",90);
    sayHi("Arne",20);
    sayHi("Salama",17);
    echo "<hr>";

//return statements
//function gives information back

function cube($num){
return $num * $num * $num;
}
echo cube(4);
echo "<hr>";

//if statement

    $ismale = true;
    $istall = true;
    if($ismale && $istall){
        echo "you are a tall male";
    } elseif($ismale && !$istall){
    echo "you are male and short";
    }
    elseif(!$ismale && $istall){
        echo "you are not male but tall";
    }

    else{
        echo "you are not male and not tall";
    }

?>

<br><br>
</body>
</html