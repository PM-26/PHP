<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection not successfull.");
}
else{
    echo "Connection is succesfull.";
}
$sql="CREATE DATABASE pm";
mysqli_query($conn,$sql);
$sql="DROP DATABASE pm";
mysqli_query($conn,$sql);

?>
