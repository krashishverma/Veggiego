<?php
include('../config.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    $image=$_FILES['file'];
    $imagefilename=$image['name'];
    $imagefileerror=$image['error'];
    $imagefiletemp=$image['tmp_name'];
    $filename_seprate=explode('.',$imagefilename);
    $file_extension=strtolower(end($filename_seprate));
   
    echo "<br>";
    
    $extension=array('jpeg','jpg','png');
      
    $image=$_FILES['file']['name'];
    $temp_image=$_FILES['file']['tmp_name'];


        if($name=='' or $price=='' or $category==''  or $image=='' ){
          echo"<script>alert('please fill all the available field')</script>";
          exit();
        }else{
          $upload_image='./product_images/'. $imagefilename;
          move_uploaded_file($imagefiletemp, $upload_image);

        //select item from database
        $select_query="Select * from items where name='$name' ";
        $result_select=mysqli_query($conn,$select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0){
            echo"<script>alert('This item allready inserted ')</script>";
    
        }else{
        $sql="INSERT INTO items(name,price,category_tittle,quantity,image) VALUES ( '$name',' $price','$category','$quantity',' $upload_image')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success</strong>   Item inserted successfully
          </div>';
        }else{
            die(mysqli_error($conn));
        }}
    }
     
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>display items</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
   
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary my-5"><a href="insert.php" class="text-light">Add Items</a>
    </button>
</div>
    <h1 class="text-center my-4">ITEMS</h1>
    <div class="container mt-5">
   <table class="table table-bordered ">
  <thead  class="table-dark">
    <tr>
      <th scope="col">SI no</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Qnty</th>
      <th scope="col">Image</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="Select * from items";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['i_id'];
    $name=$row['name'];
    $price=$row['price'];
    $category=$row['category_tittle'];
    $quantity=$row['quantity'];
    $image=$row['image'];
    echo'<tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$price.'</td>
    <td>'.$category.'</td>
    <td>'.$quantity.'</td>
     <td><img src='.$image.' " style="width:180px;height:128px"></td>
    <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>

    </td>
    </tr>';
    }
    $conn->close();
    ?>
    

  </tbody>
</table>

  
  </body>
</html>