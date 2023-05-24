<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["color"])){
        echo "Cookie is set and value is ",$_COOKIE["color"];
    }
    else{
        echo "Cookie is not set.";
    }
    ?>
</body>
</html>