<?php
include('./config.php');
//getting product
function getproducts(){
    global $conn;
$select_query="select *from items where category_tittle='fresh vegetable'";
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
             
                 <img class="card-img-top" src="'.$img.'" style="width:270px;height:220px" alt="Card image cap">
                <div class="card-body">
                </div>
                <div class="card-text">
                <h5 class="card-title">'.$item_name.'</h5>
                <p class="card-text">Price: '.$item_price.'/-</p>
                <a href="item.php?add_cart=$item_id" class="btn btn-info"> Add to Cart</a>
                <a href="#" class="btn btn-secondary">buy now</a>
                </div>
           
            </div>
            ';

        }
    }
    //get all product
    function getallproducts(){
        global $conn;
    $select_query="select *from items ";
            $result_query=mysqli_query($conn,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $item_id=$row['i_id'];
                $item_name=$row['name'];
                $item_price=$row['price'];
                $image=$row['image'];
                $item_category=$row['category_tittle'];
                $item_quantity=$row['quantity'];
                echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='admin/product_images/Apple.jpg.jpg' class='card-img-top'  alt='$item_name'>
                    <div class='card-body'>
                    <h5 class='card-title'>$item_name</h5>
                    <pclass='card-text'>Price: $item_price/-</p>
                    <a href='welcome.php?add_cart=$item_id' class='btn btn-info'> Add to Cart</a>
                    <a href='#' class='btn btn-secondary'>buy now</a>
                    </div>
                </div>
                </div>
                ";
    
            }
        }

    //getiing fresh fruit
    function fruits(){
        global $conn;
    $select_query="select *from items where category_tittle='fresh fruits'";
            $result_query=mysqli_query($conn,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $item_id=$row['i_id'];
                $item_name=$row['name'];
                $item_price=$row['price'];
                $image=$row['image'];
                $item_category=$row['category_tittle'];
                $item_quantity=$row['quantity'];
                echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='".$image."' class='card-img-top' alt='$item_name'>
                    <div class='card-body'>
                    <h5 class='card-title'>$item_name</h5>
                    <pclass='card-text'>Price: $item_price/-</p>
                    <a href='fruit.php?add_cart=$item_id' class='btn btn-info'> Add to Cart</a>
                    <a href='#' class='btn btn-secondary'>buy now</a>
                    </div>
                </div>
                </div>
                ";
    
            }
        }

        //callig dry fruits
        function dryfruits(){
            global $conn;
        $select_query="select *from items where category_tittle='dry fruits'";
                $result_query=mysqli_query($conn,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $item_id=$row['i_id'];
                    $item_name=$row['name'];
                    $item_price=$row['price'];
                    $image=$row['image'];
                    $item_category=$row['category_tittle'];
                    $item_quantity=$row['quantity'];
                    echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin../product_images/Almond.jpg.jpg' class='card-img-top' alt='$item_name'>
                        <div class='card-body'>
                        <h5 class='card-title'>$item_name</h5>
                        <pclass='card-text'>Price: $item_price/-</p>
                        <a href='dry_fruit.php?add_cart=$item_id' class='btn btn-info'> Add to Cart</a>
                        <a href='#' class='btn btn-secondary'>buy now</a>
                        </div>
                    </div>
                    </div>
                    ";
        
                }
            }


//get ip function
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
 //cart function
function cart(){
    if(isset($_GET['add_cart'])){
        global $conn;
        $ip = getIPAddress();  
        $get_item_id=$_GET['add_cart'];
        $select_query="Select * from cart where ip_address='$ip' and i_id=$get_item_id";
        $result_query=mysqli_query($conn,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows>0){
            echo"<script>alert('This item allready present in cart')</script>";
            echo"<script>window.open('item.php','_self')</script>";
        }else{
            $insert_query="insert into cart (i_id,ip_address,quantity) values ($get_item_id,'$ip',0)";
            $result_query=mysqli_query($conn,$insert_query);
            echo"<script>alert(' inserted in cart')</script>";
            echo"<script>window.open('item.php','_self')</script>";



        }

    }

}
//cart iten number
function cart_item(){
    if(isset($_GET['add_cart'])){
        global $conn;
        $ip = getIPAddress();  
        $select_query="Select * from cart where ip_address='$ip' ";
        $result_query=mysqli_query($conn,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);
       
        }else{
            global $conn;
        $ip = getIPAddress();  
        $select_query="Select * from cart where ip_address='$ip' ";
        $result_query=mysqli_query($conn,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);
        }
        echo $count_cart_items;

    
}
//total cart price
function total_price(){
    global $conn;
    $ip = getIPAddress();  
    $total=0;
    $cart_query="Select * from cart where ip_address='$ip'";
    $result=mysqli_query($conn,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $item_id=$row['i_id'];
        $select_item="Select * from items where i_id=' $item_id'";
        $result_item=mysqli_query($conn,$select_item);
        while($row_item_price=mysqli_fetch_array($result_item)){
            $item_price=array($row_item_price['price']);
            $item_values=array_sum($row_item_price);
            $total+=$item_values;
        }
    }
    echo $total;

}

?>