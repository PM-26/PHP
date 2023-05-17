<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>

    <!-- Even/Odd
    <form method="get">
        Enter Number <input type="number" name="n">
        <br>
    </form>
    <?php
    if ($_GET){
        $n=$_GET['n'];
        if ($n%2==0){
            echo $n," is Even number";
        }
        else{
            echo $n," is an odd number.";
        }
    }
    ?> -->

    <!-- Swap using function.
    <form method="post">
        Enter Number <input type="number" name="n">
        <br>
        Enter Second Number <input type="number" name="n2">
        <br>
        <input type="submit">
    </form>

    <?php
    if($_POST){
        $n=$_POST['n'];
        $n2=$_POST['n2'];

        echo "First number= ",$n;
        echo"<br>";
        echo "Second number= ",$n2;
        echo"<br>";

        function swap(&$a,&$b){
            $temp=$a;
            $a=$b;
            $b=$temp;
        }
        swap($n,$n2);
        echo "First number after swapping is ",$n,"<br>";
        echo "Second number after swapping is ",$n2,"<br>";
    }
    ?> -->

    <!-- Facorial using recursive.
    <form method="post">
        Enter number <input type="number" name="n"><br>
    </form>
        <?php
        if($_POST){
            $n=$_POST['n']; 
        }
        function factorial($n){
            if($n<2){
                return 1;
            }
            else{
                return ($n*factorial($n-1));
            }
        }
        echo factorial($n);
        ?> -->

        <!-- Armstrong
        <form method="post">
            Enter number: <input type="number" name="n"><br>
        <form>

        <?php
        if($_POST){
            $n=$_POST['n'];
            
            $temp=$n;
            function arm($n){
                $total=0;
                while($n!=0){
                    $rem= $n%10;
                    $total+=$rem*$rem*$rem;
                    $n=($n/10);
                }
                return $total;
            }
            if ($temp==arm($n)){
                echo"Yes Armstrong Number.<br>";
            }
            else{
                echo "Not an Armstrong Number.<br>";
            }
        }
        ?> -->

        <!-- Square
        <?php
        function square($i){
            return $i*$i;
        }
        for ($i=0;$i<=100;$i++){
            echo square($i)."<br>";
        }
        ?> -->

</body>
</html>
