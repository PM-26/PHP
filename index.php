<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    *{
        font-size:30px;
    }
    </style>

<body>
    <?php
    echo "<u>Arithmetic Operators</u> <br>";
    $a=5;echo "a=5 <br>";
    $b=10;echo "b=10 <br>";
    echo "a+b=",$a+$b; echo "<br>";
    echo "a-b=",$a-$b; echo "<br>";
    echo "a*b=",$a*$b; echo "<br>";
    echo "a/b=",$a/$b; echo "<br>";
    echo "a%b=",$a%$b; echo "<br>";

    echo "<br>";

    echo "<u>Comparison Operators</u><br>";
    echo "a > b="; var_dump($a > $b);echo"<br>";
    echo "a < b="; var_dump($a < $b);echo"<br>";                                                                ;
    echo "a == b="; var_dump($a == $b);echo"<br>";
    echo "a >= b="; var_dump($a >= $b);echo"<br>";
    echo "a <= b="; var_dump($a <= $b);echo"<br>";
     
    echo "<br>";

    echo "<u>Logical Operators</u><br>";
    echo "a && b="; var_dump($a && $b);echo"<br>";
    echo "a || b="; var_dump($a || $b);echo"<br>";
    echo "a xor b="; var_dump($a xor $b);echo"<br>";
    echo "!b="; var_dump(!$b);echo"<br>";                                                                ;
    

    ?>
</body>

</html>