<?php
$conn=mysqli_connect("localhost","root","","pm");
if (!$conn){
    die("Connection not successfull.");
}
else{
    $sql="create table table1(
        id int(5) primary key
        name varchar(10)
        class varchar(5)
        );";
    mysqli_query($conn,$sql);
    echo "Table table1 created successfully.";
}
?>
