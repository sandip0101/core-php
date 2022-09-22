<?php
include("database.php");
$di=$_GET['id'];
$query="DELETE FROM form WHERE id='$di'"; 

$data=mysqli_query($con,$query);
if($data)
{
    echo"OK";
}

?>