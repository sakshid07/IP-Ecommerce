<?php require('functions.php');
require('connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    height: 300px;
    width: 250px;
    margin-top: 50px;
    margin-left: 80px;
    /* display: inline; */
  }
  
  /* On mouse-over, add a deeper shadow */
  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  
  /* Add some padding inside the card container */
  .container {
    padding: 2px 16px;
  }
  
        </style>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
      
    <nav>
    <ul id="ul1">
      <li id="li1"><a href="homepage.php" id="anchor">Home</a></li>
      <li id="li1"><a href="macrame.php" id="anchor">Macrame</a></li>
      
      <li id="li1"><a href="#" id="anchor">Paintings</a></li>
      <li id="li1"><a href="#" id="anchor">About Us</a></li>
    </ul>
  </nav><br><br>
        <div class="sidenav" style="width: 170px;
        position: fixed;
        /* z-index: 1; */
        top: 100px;
        left: 10px;
        background: #fff;
        overflow-y: hidden;
        padding: 8px 0;
        text-align: center;">
          <p class="text-center" style="  font-family: 'Satisfy', cursive; font-size:30px;">Filter by</p>
          <hr>
          <h4>~Price~</h4>
          <a href='2500' style="color:#9e9e9e;text-decoration: none;" class="activity"><p>less than 2500</p></a>
          <a href="4000" style="color:#9e9e9e;text-decoration: none;" class="activity"><p>2500-4000</p></a>
          <a href="6000" style="color:#9e9e9e;text-decoration: none;" class="activity"><p>5000-6000</p></a>
          <a href="8000" style="color:#9e9e9e;text-decoration: none;" class="activity"><p>more than 6000</p></a>
          <hr>
          <!-- <h4>~Brand~</h4>
          <a href='hm' style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>H&M</h6></a>
          <a href="lui" style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>Louis Vuitton</h6></a>
          <a href="nike" style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>Nike</h6></a>
          <a href="reebok" style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>Reebok</h6></a>
          <a href="puma" style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>Puma</h6></a>
          <a href="pant" style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>Pantaloons</h6></a>
          <a href="gap" style="color:#9e9e9e;text-decoration: none;" class="activity"><h6>GAP</h6></a> -->
          
          
        </div>

        
        
   <div class="row" style="margin-left:150px">
   <?php 
          $get_product = get_product($dbconnect,'');
          foreach($get_product as $list) {?>
          <?php if ($list['image'] != ''){ ?>
        <div class="column">
        <a href="product-detail.php?varname=<?php echo $list['id'] ?>" style="text-decoration:none;text-align:center;color:black">
           <div class="card">
                
                <img src="<?php echo $list['image']?>" alt="Avatar" style="width:100%" height="200px">
                <div class="container">
                    <h4><b>Macrame <?php echo $list['id']?></b></h4>
                    <p>Price: Rs.<?php echo $list['price']?></p>
                    
                </div>
              </div></a>
        </div>
          <?php  } ?>
        <?php }?> 
        
    </div>
    <br><br>
    <footer class="foot">
    <table cellspacing="30px" style="font-size: 21px;">
    <tr><td><ul style="display: inline;list-style-type: none;margin-left: 360px;">
      <li>ABOUT US</li><br>
      <li>Company</li>
      <li>Artists</li>
      <li>Products</li>
    </ul></td>
    <td><ul style="display: inline;list-style-type: none;margin-left: 300px;">
      <li>FOLLOW US</li><br><br>
      <a href="#"><i class="fa fa-twitter" style="font-size:40px;color:#55ACEE; margin-right:20px;"></i></a>
        <a href="#"><i class="fa fa-facebook" style="font-size:40px;color:#3B5998;margin-right:20px;"></i></a>
      <a href="#"><i class="fa fa-instagram" style="font-size:40px;color:rgb(255, 0, 85)"></i></a>
      
    </ul></td>
    <td><ul style="display: inline; list-style-type: none;margin-left: 300px;">
      <li>USEFUL LINKS</li><br>
      <li><a>Contact Us</a></li>
      <li><a>FAQ</a></li>
      <li><a>T&C</a></li>
    </ul></td></tr></table><br><br>
    <p style="font-size: 21px;">&copy; <?php  echo date('Y') ?> Flutterfly</p>
</footer>        
    

    </body>
    </html>