<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>VeggieGo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="welcome.css">


</head>

<body>
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" style="" href="#">VeggieGo</a>

            <br>
            <div class="searchopt"><input type="text" class="searchbox" placeholder="search items" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
 
            <?php
                session_start(); 
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                {
                    echo "<h5>Please login</h5>";
                }
                else
                {
                    echo "welcome: ".$_SESSION['username'];
                }
                include('function/common_function.php')
                ?>
            <div class="menubar">
                <!-- <a href="cart.php" class="btn btn-outline-success">My cart <sup><?php cart_item();?></sup></a> -->

                <li style="list-style-type: none;"><a href="register.php">
                        <img src="images/login.png" class="img-thumbnail"
                            style="border-radius: 50%; margin-left: 5px;margin-right: 5px;"></a>

            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">VeggieGO</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminregistration.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
            </div>
        </div>
        </div>
    </nav>
    <br>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/e.jpg" class="d-block w-100 h-100">
                <div class="carousel-caption ">
                    <center><img src="veggiego.png" class="d-block w-50 h-50"></center>
                    <p>Fresh Vegetable</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/z.jpg" class="d-block w-100 h-100">
                <div class="carousel-caption ">
                    <center><img src="veggiego.png" class="d-block w-50 h-50"></center>
                    <p>Fresh Vegetable</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/x.jpg" class="d-block w-100 h-100">
                <div class="carousel-caption ">
                    <center><img src="veggiego.png" class="d-block w-50 h-50"></center>
                    <p>Fresh Vegetable</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="ash">Shop by Category</div>
    <div class="as">
        <div class="card-group ">
            <div class="card h-25">
                <a href="item.php">
                    <img src="images/c.jpg" class="card-img-top w-100">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Fresh Vegetable</h6>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card h-25">
                <a href="fruit.php">
                    <img src="images/zxc.jpg" class="card-img-top w-100">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Fresh Fruits</h6>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card h-25">
                <a href="dry_fruit.php">
                    <img src="images/zx.jpg" class="card-img-top w-100">
                </a>
                <div class="card-body">
                    <h6 class="card-title">Dry fruits</h6>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <h1><u>Fresh Vegetable</u></h1>
    <hr>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="images/1.jpg">
            <h1 class="veg">Broccoli</h1>
        </div>
        <div class="item">
            <img src="images/2.jpg">
            <h1 class="veg">Potato</h1>
        </div>
        <div class="item">
            <img src="images/3.jpg">
            <h1 class="veg">Tomato</h1>
        </div>
        <div class="item">
            <img src="images/4.jpg">
            <h1 class="veg">Carrot</h1>
        </div>
        <div class="item">
            <img src="images/5.jpg">
            <h1 class="veg">Corn</h1>
        </div>
        <div class="item">
            <img src="images/6.jpg">
            <h1 class="veg">Lemon</h1>
        </div>
        <div class="item">
            <img src="images/7.jpg">
            <h1 class="veg">Cabbage</h1>
        </div>
    </div>
    <hr>
    <h1><u>Fresh Fruit</u></h1>
    <hr>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <a href="item.php">
                <img src="images/apple.jpg">
            </a>
            <h1 class="veg">Apple</h1>
        </div>
        <div class="item">
            <img src="images/banana.jpg">
            <h1 class="veg">Banana</h1>
        </div>
        <div class="item">
            <img src="images/orange.jpg">
            <h1 class="veg">Orange</h1>
        </div>
        <div class="item">
            <img src="images/Watermelon.jpg">
            <h1 class="veg">Watermelon</h1>
        </div>
        <div class="item">
            <img src="images/Grapes.jpg">
            <h1 class="veg">Grapes</h1>
        </div>
        <div class="item">
            <img src="images/Pineapple.jpg">
            <h1 class="veg">Pineapple</h1>
        </div>
        <div class="item">
            <img src="images/Strawberry.jpg">
            <h1 class="veg">Strawberry</h1>
        </div>
    </div>
    </div>
    <hr>
    <div class="contain">
        <div class="container2">
            <!-- <a href="#" style=" text-decoration: none">
                    <div class="card2">
                        <div class="card_image">
                            <a href="item.php">
                            <img src="images/Apple.jpg">
                        </a>
                        </div>
                        <div class="card_name">
                            <h1>Apple</h1>
                        </div>
                        <div class="pricerating">
                            <h3>Rs.100</h3>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Banana.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Banana</h3>
                    </div>
                    <div class="pricerating">
                        <h3>Rs.60/Doz</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/orange.jpg">
                    </div>
                    <div class="card_name">
                        <h3>orange</h3>
                    </div>
                    <div class="pricerating">
                        <h3>Rs.120</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Watermelon.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Watermelon</h3>
                    </div>
                    <div class="pricerating">
                        <h3>Rs.120</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Pineapple.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Pineapple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>Rs.135</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="container2">
                <a href="#" style=" text-decoration: none">
                    <div class="card2">
                        <div class="card_image">
                            <img src="images/Apple.jpg">
                        </div>
                        <div class="card_name">
                            <h3>Apple</h3>
                        </div>
                        <div class="pricerating">
                            <h3>Rs.100</h3>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Banana.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Banana</h3>
                    </div>
                    <div class="pricerating">
                        <h3>Rs.60Doz</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/orange.jpg">
                    </div>
                    <div class="card_name">
                        <h3>orange</h3>
                    </div>
                    <div class="pricerating">
                        <h3>$13.50</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Watermelon.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Apple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>$13.50</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Pineapple.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Pineapple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>Rs.135/Kg</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Watermelon.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Apple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>$13.50</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Watermelon.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Apple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>$13.50</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Watermelon.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Apple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>$13.50</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="card2">
                    <div class="card_image">
                        <img src="images/Watermelon.jpg">
                    </div>
                    <div class="card_name">
                        <h3>Apple</h3>
                    </div>
                    <div class="pricerating">
                        <h3>$13.50</h3>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div> -->
            <div class="row px-1">
                <div class="col-md-15">
                    <div class="row">

                        <?php
//include('./config.php');
// include('function/common_function.php');
$select_query="select *from items";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $item_id=$row['i_id'];
    $item_name=$row['name'];
    $item_price=$row['price'];
    $img=$row['image'];
    $item_category=$row['category_tittle'];
    $item_quantity=$row['quantity'];
    echo '
            <div class="card" style="width: 18rem;">
             
                 <img class="card-img-top" src="'.$img.'"style="width:270px;height:220px" alt="Card image cap">
                <div class="card-body">
                </div>
                <div class="card-text">
                <h5 class="card-title">'.$item_name.'</h5>
                <p class="card-text">Price: '.$item_price.'/-</p>
                <a href="welcome.php?add_cart='.$item_id.'" class="btn btn-info"> Add to Cart</a>
                <a href="#" class="btn btn-secondary">buy now</a>
                </div>
           
            </div>
            ';

}
$ip=getIPAddress();
cart();

?>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <hr>
    <div class="grid-container">
        <div class="items">
            <img src="images/10.jpg">
            <div class="Item-name">
                <h1>Green Onion</h1>
            </div>
        </div>
        <div class="items"><img src="images/11.jpg">
            <div class="Item-name">
                <h1>Onion</h1>
            </div>
        </div>
        <div class="items"><img src="images/2.jpg">
            <div class="Item-name">
                <h1>Potato</h1>
            </div>
        </div>
        <div class="items"><img src="images/4.jpg">
            <div class="Item-name">
                <h1>Carrot</h1>
            </div>
        </div>
        <div class="items">
            <img src="images/10.jpg">
            <div class="Item-name">
                <h1>Green Onion</h1>
            </div>
        </div>
        <div class="items"><img src="images/11.jpg">
            <div class="Item-name">
                <h1>Onion</h1>
            </div>
        </div>
        <div class="items"><img src="images/2.jpg">
            <div class="Item-name">
                <h1>Potato</h1>
            </div>
        </div>
        <div class="items"><img src="images/apple.jpg">
            <div class="Item-name">
                <h1>Apple</h1>
            </div>
        </div>
        <div class="items"><img src="images/watermelon.jpg">
            <div class="Item-name">
                <h1>Watermelon</h1>
            </div>
        </div>
        <div class="items"><img src="images/banana.jpg">
            <div class="Item-name">
                <h1>Banana</h1>
            </div>
        </div>
        <div class="items"><img src="images/4.jpg">
            <div class="Item-name">
                <h1>Carrot</h1>
            </div>
        </div>
        <div class="items"><img src="images/orange.jpg">
            <div class="Item-name">
                <h1>Orange</h1>
            </div>
        </div>
        <div class="items"><img src="images/grapes.jpg">
            <div class="Item-name">
                <h1>Grapes</h1>
            </div>
        </div>
        <div class="items"><img src="images/Strawberry.jpg">
            <div class="Item-name">
                <h1>Strawberry</h1>
            </div>
        </div>
    </div>
    <footer>
        <div class="foot">
            <div class="item0">
                <img src="images/veg.png" class="footimg">
            </div>
            <div>
                <h1 class="logo1">eggieGO</h1>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        nav: false,
        stagePadding: 50,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            960: {
                items: 5
            },
            1200: {
                items: 4
            }
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        // Send Search Text to the server
        $("#search").keyup(function() {
            let searchText = $(this).val();
            if (searchText != "") {
                $.ajax({
                    url: "action.php",
                    method: "post",
                    data: {
                        query: searchText,
                    },
                    success: function(response) {
                        $("#show-list").html(response);
                    },
                });
            } else {
                $("#show-list").html("");
            }
        });
        // Set searched text in input field on click of search button
        $(document).on("click", "a", function() {
            $("#search").val($(this).text());
            $("#show-list").html("");
        });
    });
    </script>
</body>

</html>