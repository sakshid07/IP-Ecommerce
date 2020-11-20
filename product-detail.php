<?php 
session_start();
require('top.php'); 
require('functions.php');
require('connection.php');
?><br><br>
<?php 
$id= $_GET['varname'];
$get_product = get_product($dbconnect,$id);
          foreach($get_product as $list) {
            if ($list['id'] != ''){ 
              ?>


<div class="cont" style="margin-left:200px">
    <div class="row1">
        <div class="column1">
            <img src="<?php echo $list['image']?>" alt="Avatar" width="300px" height="400px" style="border-radius:8%">
        </div>
        <div class="column1">
            <p style="font-size:28px;"><b>Macrame</b><br><br>
                <span style="font-size:21px;margin-bottom:0px;"><b>₹<?php echo $list['price']?></b></span><br>
                <span style="font-size:17px;margin-top:0px;">Inclusive of all taxes</span>
            </p>
            <p><b>Description:</b><br>This age-old practice has gone in and out of popularity for thousands of years.
                You can find a variety of beautiful and elegant macrame art on our website.</p>
            <br>
            <select id="qty">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>


            </select>
            <a href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">Add to
                cart</a>
            <!-- <form method="post"> 
            <button  type="submit" name="button1" style="background-color:#d81b60;height:50px;width:150px;border-radius:4%;border:none;color:white"><b><i style="font-size:20px;margin-right:3px;" class="fa fa-shopping-bag"></i> Add to Bag</b></button>
            </form> -->

        </div>
    </div>
</div>



<?php } }?>

<?php
      
    //   if(isset($_POST['button1'])) { 
    //       echo "This is Button1 that is selected"; 
    //       $image = $list['image'];
    //       $email= $_SESSION['email'];
    //       $product_id = $list['id'];
    //       $price = $list['price'];
      
    //       $sql="INSERT INTO cart(product_id,email,price,image) VALUES('$product_id',$email','$price','$image')";  
    //   }
    // $result=mysqli_query($dbconnect,$sql);  
    //     if($result){  
    // echo "Account Successfully Created";  
    // } else {  
    // echo "Failure!";  
    // } 
          

      
      
  ?>







<br><br>
<?php require('footer.php') ?>