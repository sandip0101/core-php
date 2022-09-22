<!-- insert data -->
<?php
include 'database.php';

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
        echo"Your Data Success Fully Insert !!!";
    }

}
?>

<!-- insert data end-->

<!-- show data-->
<?php
include("database.php");
$result=mysqli_query($con,"SELECT * FROM form");
?>



<!-- show data end-->
<!-- Delete Data-->
<?php
include("database.php");
$di=$_GET['id'];
$query="DELETE FROM form WHERE id='$di'"; 

$data=mysqli_query($con,$query);
if($data)
{
    echo"SUCCESS FULL DELETE DATA ";
}

?>
<!-- Delete Data End-->







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form1.php" method="post">
    

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


</form>








<!-- Show data table -->
<table border="1" align="center">
<tr>
    <th>Id</td>
    <th>Name</td>
    <th>Email</td>
    <th>password</td>

</tr>    

<?php
while ($res=mysqli_fetch_array($result)) 
{
   echo "
    <tr>
    <td>".$res['id']."</td>
    <td>".$res['name']."</td>
    <td>".$res['email']."</td>
    <td>".$res['password']."</td>
    <td><a href ='form1.php?id=$res[id]'>Delete</td>
    

    <tr>";
}

?>

</table>
