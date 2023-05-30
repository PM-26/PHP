<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php

    class player{
        public $speed=11;
        public $name;
        function getName($name){
            $this->name=$name;
        }
        function printName(){
            echo $this->name;
        }
        function printSpeed(){
            echo $this->speed;
        }
        function setSpeed(){
            $this->speed=10;
        }
    }
    class constructor{
        public $name;
        function __construct(){
            $this->name="C";
            echo $this->name;
        }
    }

    echo "Name using Constructor: ";
    $c= new constructor();
    echo "<br>";

    $a=new player();
    $a->getName("A");
    echo "Name of Player:";
    $a->printName();
    echo "<br>";
    echo "Speed of player:";
    $a->printSpeed();

    echo "<br>";

    $b=new player();
    $b->setSpeed();
    echo "Speed of B:";
    $b->printSpeed();


    ?>
</body>
</html>
