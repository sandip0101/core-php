<?php
$servername="localhost";
$username = "root";
$password ="";
$database = "laravel";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    echo"DATA Conection Success Full";
}
?>