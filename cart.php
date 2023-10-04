
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

    <title>VeggieGo - Cart details</title>
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
    <style>
        .cart_img{
    width: 50px;
    height: 50px;
  }
    </style>


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
        
        <br>
       
        <?php
        cart();
        ?>
        <div class="container">
            <div class="row">
                <form action="" method="post">
                <table class="table table-border text-center">
                    
                    <tbody>
                        <?php
                         global $conn;
                         $ip = getIPAddress();  
                         $total=0;
                         $cart_query="Select * from cart where ip_address='$ip'";
                         $result=mysqli_query($conn,$cart_query);
                         $result_count=mysqli_num_rows($result);
                         if($result_count>0){
                            echo "<thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Item Image</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Remove</th>
                                <th colspan='2'>Operation</th>
                            </tr>
                        </thead>
                            ";
                         while($row=mysqli_fetch_array($result)){
                             $item_id=$row['i_id'];
                             $select_item="Select * from items where i_id=' $item_id'";
                             $result_item=mysqli_query($conn,$select_item);
                             while($row_item_price=mysqli_fetch_array($result_item)){
                                 $item_price=array($row_item_price['price']);
                                 $price_table=$row_item_price['price'];
                                 $item_name=$row_item_price['name'];
                                 $image=$row_item_price['image'];
                                 $item_values=array_sum($row_item_price);
                                 $total+=$item_values;
                            
                        
                        ?>
                        <tr>
                            <td><?php  echo $item_name?></td>
                            <td><img src="<?php echo  $image ?>"alt="" class="cart_img"></td>
                            <td> <input type ="text" name="qty" class="form-input w-50"></td>
                            <?php 
                             $ip = getIPAddress(); 
                             if(isset($_POST['update_cart'])){
                                $quantity=$_POST['qty'];
                                $update_cart="update cart set quantity=$quantity where ip_address='$ip'";
                                $result_quantity=mysqli_query($conn,$update_cart);
                                $total=$total * $quantity;

                             }
                              ?>
                            <td><?php echo $price_table ?>/-</td>
                            <td> <input type="checkbox" name="removeitem[]" value="<?php echo $item_id ?>"></td>
                            <td>
                                <input type="submit" value="Update"  class="bg-info px-3 py-2 mx-3" name="update_cart">
                                <input type="submit" value="Remove"  class="bg-info px-3 py-2 mx-3" name="remove_cart">

                            </td>


                        </tr>
                        <?php }}}
                         else{
                            echo "<h2 class='text-center text-danger'> Cart is empty</h2>";
                         }
                        ?>
                    </tbody>
                </table>
                <!--sub total-->
                <div class="d-flex mb-3">
                    <h4 class="px-3">Subtotal:<strong class="text-info"><?php echo $total ?>/-</strong></h4>
                    <button class="bg-info px-3 py-2 mx-3"><a href="welcome.php" >Continue Shopping</button></a>
                    <button class="bg-secondary px-3 py-2"><a href="checkout.php" class="text-light" >Check Out</button></a>

                </div>
            </div>
        </div>
        </form>
<!--remove-->
<?php
function remove_cart(){
    global $conn;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="delete  from cart where i_id=$remove_id";
            $run_delete=mysqli_query($conn,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self)</script>";
            }
        }
    }
}
echo $remove_item=remove_cart();
?>
        

<!-- <script>
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
</script> -->
    </body>

</html>