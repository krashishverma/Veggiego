<?php
include 'dbc.php';
if(isset($_POST['submit']))
{
    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $country=$_POST['country'];
        $sql="insert into veggiego(first,last,email,password,country) values('$first','$last','$email','$password','$country')";
        if(mysqli_query($con,$sql))
        {
            echo "new record insert successfully";
        }
        else{
            echo "error:".$sql;
        }
mysqli_close($con);
}