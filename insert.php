<?php
include('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatabile" content="TE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <tittle>Admin Page</tittle>
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--custome css file link-->
        <link rel="stylesheet" href="insert.css">
    </head>
    <body>
      
        <div class="container">
            <div class ="admin-product-form-container">
                <form action="display.php" method="post" enctype="multipart/form-data">
                    <h3>add new product</h3>
                   <input type="text" placeholder="enter the items name" name="name" class="box">
                    <input type="number" placeholder="enter the item price" name="price" class="box">
                    <!-- <input type="text" placeholder="category" name="category" class="box"> -->
                    <div class="form-outline m-0 w-5 m-auto p-100">
                     <select name="category" id="" class="form-select">
                     <option value="">Select a Category</option>
                        <?php
                        $select_query="select * from categories";
                        $result_query=mysqli_query($conn,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_tittle=$row['category_tittle'];
                            $category_id=$row['category_id'];
                            echo"<option value='$category_tittle'> $category_tittle</option>";
                        }
                        ?>
                    </div>





                    <input type="text" placeholder="enter the quantity" name="quantity" class="box">
                    <input type="file" name="image" class="box">
                    <button class="btn btn-dark" type="submit" name="submit">Add item</button>
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