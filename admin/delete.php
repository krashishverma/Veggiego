<?php

include('../config.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql = "delete from items where i_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted Successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>