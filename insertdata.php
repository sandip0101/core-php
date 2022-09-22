<?php
 include('database.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    foreach ($data as $d)
     {
        $d.=$data.",";
    }
    $sql="insert into form(name,email,password)values('$name','$email','$password')";
    $di=$_GET['id'];
    $query="DELETE FROM form WHERE 1=1"; 

    if(mysqli_query($con,$sql))
    {
        echo"OK";
    }
}
?>