<?php
//include('../config.php');
//inclde('../function/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>

    <!-- boot strap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!--css file-->
<link rel="stylesheet"href="../style.css">
<style>
    .admin_image{
    width: 100px;
    object-fit: contain;
    }
</style>
</head>
<body>
    <!-- <h1>Admin</h1> -->
    <!--nav bar-->
    <div class="container-fluid p-0 ">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="cotainer-fluid d-flex align-items-center">
                <img src="../images/veg.png"  alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="../welcome.php" class="nav-link " >Welcome admin</a>
                        </li>
                    </ul>                 
                 </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2"> Manage details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-0 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/4.jpg" alt="" class=admin_image></a>
                    <p class="text-light text-center">Admin name</p>
                </div>
                <!--button-->
                <div class="button text-center">
                    <button><a href="../insert.php" class="nav-link text-light bg-info my-1"> Insert Items</a></button>
                    <button><a href="../display.php" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_category" class="nav-link text-light bg-info my-1">View Ctegories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="index.php?list_user" class="nav-link text-light bg-info my-1">List User</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>

            </div>
        </div>

    </div>
<!--fourth child--> 
<div class="container my-5">
    <?php 
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['view_category'])){
        include('view_categories.php');
    }
    if(isset($_GET['list_user'])){
        include('list_user.php');
    }
    if(isset($_GET['delete_cat'])){
        include('delete_cat.php');
    }
    
    ?>
</div>



    <!-- boot strap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
</body>
</html>