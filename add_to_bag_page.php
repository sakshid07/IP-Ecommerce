<?php 
session_start();

require('top.php');
require('connection.php');
require('functions.php');
require('add_to_cart.inc.php');
// prx($_SESSION['cart']);

 

// $email = $_SESSION['sess_user'];
// echo "Hello";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    .button {
        background-color: #212121;
        border: none;
        color: rgb(245, 239, 243);
        text-decoration: none;
        font-size: 25px;
    }

    .button5 {
        border-radius: 35%;
    }
    </style>
    <!-- <a href="buynow"><button type="submit" class="btn boot-btn"style="color:white; margin-bottom:40px; margin-right:30px;">BUY NOW</button></a>
      <div class=""> -->



    <h1 class="text-center" style="  font-family: 'Satisfy', cursive; font-size:50px;">My Shopping Bag</h1>
    <hr>
    <div class="row cardcon " style="padding:50px 200px ;font-family: 'Hind Siliguri', sans-serif;">
        <div class="col-lg-">
            <h1 style="font-size: 23px;font-family: 'Hind Siliguri', sans-serif;">PRICE DETAILS</h1>
            <hr>
            <p>Order Total <span style="margin-left:700px;">₹{{total}}</span></p>
            <p>Delivery Charges <span style="margin-left:651px;">₹100</span></p>
            <p style="font-weight: bold;">Total <span style="margin-left:753px;">₹{{sub_total}}</span></p>
            <a href="#"><button type="submit" style="color:white; margin-bottom:40px; margin-right:30px; background-color: #c52e47; /* Green */
            border: none;
            border-radius: 2px;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;">PLACE ORDER</button></a>
        </div>

    </div>


    <?php
    if(isset($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $key=>$val){
      $productArr=get_product($dbconnect,$key);
      $pname=$productArr[0]['name'];
      $mrp=$productArr[0]['mrp'];
      $price=$productArr[0]['price'];
      $image=$productArr[0]['image'];
      $qty=$val['qty'];
      ?>
    <section id="exit">



        <div class="row cardcon " style="padding:30px 150px;position: relative;">

            <div class="col-lg-12">
                <div class="cardgirlout row">
                    <div class="col-lg-3">
                        <img class="card-girl rounded"
                            style="width: 200px; height: 300px; float: left;padding-top: 100px;"
                            src="data:image/jpeg;base64,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">
                    </div>
                    <div class="col-lg-9" style="float: right;"><br>
                        <h1 style="font-family: 'Roboto', sans-serif;font-size:40px; text-align:left;">brand name</h1>
                        <hr><br><b>
                            <h4 style="text-align: left; font-size: 20px;">₹ price</h4>

                            <h5 style="text-align: left; font-size: 20px;">Quantity : q </h5>
                            <h5 style="text-align: left; font-size: 20px;">Size : s</h5>
                            <h3 style="font-size: 16px;color: rgb(131, 111, 111);text-align:left;">100% Original
                                Products
                                Free Delivery on order above Rs. 799BR
                                00% Original <br>Products
                                Free Delivery on order above Rs. 799BR00% Original Products
                                Free Delivery <br> on order above Rs. 799
                            </h3>

                            <!-- <div class="dropdowns">
          <button type="button"onclick="show_hide()"class=" dropbutton" style="font-family: 'Ubuntu'">Qty <i class="fas fa-arrow-down"></i></button>
          <div id="droplist" style="display:none;">
            <a href="#">1</a>
                <a href="#">2</a>
                  <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
        
        
        </div>
        </div> -->
          <hr>
          <a href="#"><button type="submit" style="color:white; margin-bottom:40px; margin-right:30px; background-color: #c52e47; /* Green */
            border: none;
            border-radius: 2px;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;">REMOVE</button></a>
            <a href="#"><button type="submit" style="background-color:  #c52e47; /* Green */
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            background-color: white; 
            color: black; 
            border: 2px solid  #c52e47;">MOVE TO WISHLIST</button></a>

                    </div>

                </div>

            </div>
        </div>

    </section><?php } } 
              include('footer.php');
              ?>

</body>

</html>