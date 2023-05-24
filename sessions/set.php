<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Session</title>
</head>
<body>
    <?php
    $_SESSION["userId"]="admin";
    $_SESSION["password"]="admin";
    echo "userId and Password are set.\n";
    ?>
</body>
</html>