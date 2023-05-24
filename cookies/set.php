<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session/Cookies</title>
</head>
<body>
    <!-- cookies -->
    <?php
    setcookie("color","red",time()+86400);
    echo "Cookie is set and value is ",$_COOKIE["color"],".";
    ?>
</body>
</html>