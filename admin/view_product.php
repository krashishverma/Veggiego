<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view product</title>
</head>
<body>
    <h3 class="text-center">All Products</h3>
    
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
    include('../config.php'); 
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
     <td><img src="'.$image.' " style="width:180px;height:128px"></td>
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