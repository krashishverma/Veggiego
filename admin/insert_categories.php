<?php 
include('../config.php');
if(isset($_POST['insert_cat'])){
    $category_tittle=$_POST['cat_tittle'];
    //select data from the database
    $select_query="Select * from categories where category_tittle='$category_tittle'";
    $result_select=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo"<script>alert('This Ctaegories allready inserted ')</script>";

    }else{
    $insert_query="insert into categories (category_tittle) values('$category_tittle')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
        echo"<script>alert('Ctaegories inserted succesfully')</script>";
    }
}}
?>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_tittle"placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class=" bg-info border-0 p-2 my-3" name="insert_cat" value="Insert categories"  aria-label="Username" aria-describedby="basic-addon1">
</div>
</form>