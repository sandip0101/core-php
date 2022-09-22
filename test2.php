<!-- insert data -->

<?php
include ('database.php');
if(isset($_POST['submit']))

{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    foreach($data as $d)
    {
        $d.=$dada.",";
    }
    $sql="insert into form(name,email,password)values('$name','$email','$password')";
    if(mysqli_query($con,$sql))
    {
        echo 'OK';
    }
}

?>

<?php
include 'database.php';
$result=mysqli_query($con,"SELECT *FROM FORM");

?>
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

<table border="1" >

  <tr>
  <th>Id</th>
  <th>name</th>
  <th>email</th>
  <th>password</th>

</tr>
<?php
while($res=mysqli_fetch_array($result))
echo" 
<tr>
<td>".$res['id']."</td>
 <td>".$res['name']."</td>
 <td>".$res['email']."</td>
 <td>".$res['password']."</td>
 <td><a href ='test2.php?id=$res[id]'>Delete</td>
 </tr>";

?>



</table>






<html>
<head>
<body>
    <form method="post">
<table align="center"border="1">

           <tr>
            <td>Name</td>
            <td><input type="name" name="name"> </td>
           </tr>
           <tr>
            <td>email</td>
            <td><input type="name" name="email"> </td>
           </tr>
           <tr>
            <td>password</td>
            <td><input type="name" name="password"> </td>
           </tr>
           <tr>
           <td> <button type="submit" name="submit">Submit</button></td>
           </tr> 


</table>
   </form>
</body>
</head>

</html>