


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

    <title>VeggieGo - dry fruits</title>
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
                <a class="navbar-brand" style="" href="welcome.php">VeggieGo</a>

                <br>
               

                <div class="searchopt">
                    <input type="text" value="" class="searchbox" placeholder="search items" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                
                </div> 
             <?php   
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" actiion="search.php" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>';
 }
 include('function/common_function.php');

?>
                <div>

                    <a href="cart.php" class="btn btn-outline-success">My cart <sup><?php cart_item();?></sup></a>
                    <a href="register.php">
                        <img src="images/login.png" class="img-thumbnail" style="border-radius: 50%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
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
                            <a class="nav-link" href="#">Your Cort</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
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
                    <a href="#">
                        <img src="images/zxc.jpg" class="card-img-top w-100">
                    </a>
                    <div class="card-body">
                        <h6 class="card-title">Fresh Fruits</h6>
                        <p class="card-text"></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card h-25">
                    <a href="#">
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
        <br>
        <br>
         <div class="row px-1">
           <div class="col-md-15">
        <div class="row">
        <?php
        //calling function
          //dryfruits();
          $ip = getIPAddress();  
          echo 'User Real IP Address - '.$ip;  
          cart();
          $select_query="select *from items where category_tittle='dry fruits'";
          $result_query=mysqli_query($conn,$select_query);
          while($row=mysqli_fetch_assoc($result_query))
          {
              $item_id=$row['i_id'];
              $item_name=$row['name'];
              $item_price=$row['price'];
              $img=$row['image'];
              $item_category=$row['category_tittle'];
              $item_quantity=$row['quantity'];
             
              echo '
              <div class="card" style="width: 18rem;">
               
                   <img class="card-img-top" src="'.$img.'" style="width:270px;height:220px" alt="Card image cap">
                  <div class="card-body">
                  </div>
                  <div class="card-text">
                  <h5 class="card-title">'.$item_name.'</h5>
                  <p class="card-text">Price: '.$item_price.'/-</p>
                  <a href="dry_fruit.php?add_cart='.$item_id.'" class="btn btn-info"> Add to Cart</a>
                  <a href="#" class="btn btn-secondary">buy now</a>
                  </div>
             
              </div>
              ';
  
          }
        ?>

        

<script>
    $(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "action.php",
        method: "post",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});
</script>
    </body>

</html>