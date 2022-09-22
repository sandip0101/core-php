<?php
include("database1.php");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    foreach($data as $d)
    {
        $d.=$data.",";
    }
    $sql="insert into form(name,email,password)values('$name','$email','$password')";
    if(mysqli_query($con,$sql))
    {
        echo" data insert success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test3.php" method="post">
    

    <table border="2" align="center">
        
        
   
        <tr>
            <td>Name</td>
        
            <td><input type="text" name="name">
                         </td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email">
            
            </td>
        </tr>

        <tr>
            <td>password</td>
            <td><input type="password"name="password">
          
            </td>
        </tr>
      
        <tr>
           <td> <button type="submit" name="submit">Submit</button></td>
        </tr>    

    </table>