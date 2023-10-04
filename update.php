<?php
include('./config.php');
$id=$_GET['updateid'];
$sql="Select *from items where i_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $price=$row['price'];
    $category=$row['category'];
    $quantity=$row['quantity'];
    $image=$row['image'];

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
    if(in_array($file_extension,$extension)){
        $upload_image='images/'. $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        $sql="update items set i_id=$id,name='$name',price=$price,category='$category',quantity='$quantity',image='$upload_image' 
         where i_id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo"updated";
        
    //    header('location:dispaly.php');
        }else{
            die(mysqli_error($conn));
        }
    }
}
?>
<?php 

require_once('operations.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatabile" content="TE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--custome css file link-->
        <link rel="stylesheet" href="admin.css">
        <tittle><h1>Admin Page</h1></tittle>

    </head>
    <body>
     
        <div class="container">
            <div class ="admin-product-form-container">
                <form action="display.php" method="post" enctype="multipart/form-data">
                    <h3>Update product</h3>
                   <!-- <input type="text" placeholder="enter the items name" name="name" class="box">
                    <input type="number" placeholder="enter the item price" name="price" class="box">
                    <input type="file" name="image" class="box">
                    <button class="btn btn-dark" type="submit" name="">Add item</button>-->
                    <?php inputfields("enter the name of items","name","$name","text")?>
                    <?php inputfields("enter the price of items","price","$price","text")?>
                    <?php inputfields("enter the category of items","category","$category","text")?>
                    <?php inputfields("enter the quantity of items","quantity","$quantity","text")?>
                    <?php inputfields("","file","$image","file")?>
                    <button class="btn btn-dark" type="submit" name="submit">Update</button>
                    

                </form>





                <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>    
</body>
</html>