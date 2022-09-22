
<?php
include("database.php");
$result=mysqli_query($con,"SELECT * FROM form");
?>

<?php
include("database.php");
$di=$_GET['id'];
$query="DELETE FROM form WHERE id='$di'"; 

$data=mysqli_query($con,$query);
if($data)
{
    echo"DATA DELETE SUCCESS FULL ";
}

?>
<!--
// include("database.php");
// $uid = $_GET['id'];
// $update=""UPDATE $table SET""


?> -->

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insertdata.php" method="post">
    

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
<table border="2" align="center">
   
        <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th colspan="2">opretion</th>
    


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
    <td><a href ='form.php?id=$res[id]'>Delete</td>
    

    <tr>";
}

?>

</table>

</body>
</html>