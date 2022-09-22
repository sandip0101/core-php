<?php
include ('database.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    foreach($data as $d)
    {
        $d.=$data.",";
    }
    $query="insert into form(name,email,password)values('$name','$email','$password')";
    if(mysqli_query($con,$query))
    {
        echo"Your Data Success Fully Insert !!!";
    }
}

?>




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