<?php 
session_start(); 
require('functions.php');
require('connection.php');
?>
<?php 



// $email = $_SESSION['sess_user'];
// echo "Hello";
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

        transition: 0.3s;
        height: 270px;
        width: 250px;
        margin-top: 50px;
        margin-left: 80px;
        /* display: inline; */
    }

    /* On mouse-over, add a deeper shadow */
    /* .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  } */

    /* Add some padding inside the card container */
    .container {
        padding: 0px 1px;
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
            <li id="li1"><a href="logout.php" id="anchor">Logout</a></li>
            <li id="li1" style="float:right"><a href="add_to_bag_page.php" id="anchor"><i
                        style="font-size:24px;margin-right:3px;color:#d81b60" class="fa fa-shopping-bag"></i></a></li>
            <li id="li1" style="float:right;"><a href="#" id="anchor">Welcome <?php echo $_SESSION["email"]; ?></a></li>
        </ul>
    </nav><br><br>




    <div class="row" style="margin-left:0px">
        <?php 
          $get_product = get_product($dbconnect,'');
          foreach($get_product as $list) {?>
        <?php if ($list['image'] != ''){ ?>
        <div class="column">
            <a href="product-detail.php?varname=<?php echo $list['id'] ?>"
                style="text-decoration:none;text-align:center;color:black">
                <div class="card">

                    <img src="<?php echo $list['image']?>" alt="Avatar"
                        style="width:100%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);" height="250px">
                    <div class="container">
                        <p style="margin-bottom:0px;"><b>Macrame <?php echo $list['id']?></b></p>
                        <p style="margin-top:0px;">₹ <?php echo $list['price']?></p>

                    </div>
                </div>
            </a>
        </div>
        <?php  } ?>
        <?php }?>

    </div>
    <br><br>
    <footer class="foot">
        <table cellspacing="30px" style="font-size: 21px;">
            <tr>
                <td>
                    <ul style="display: inline;list-style-type: none;margin-left: 360px;">
                        <li>ABOUT US</li><br>
                        <li>Company</li>
                        <li>Artists</li>
                        <li>Products</li>
                    </ul>
                </td>
                <td>
                    <ul style="display: inline;list-style-type: none;margin-left: 300px;">
                        <li>FOLLOW US</li><br><br>
                        <a href="#"><i class="fa fa-twitter"
                                style="font-size:40px;color:#55ACEE; margin-right:20px;"></i></a>
                        <a href="#"><i class="fa fa-facebook"
                                style="font-size:40px;color:#3B5998;margin-right:20px;"></i></a>
                        <a href="#"><i class="fa fa-instagram" style="font-size:40px;color:rgb(255, 0, 85)"></i></a>

                    </ul>
                </td>
                <td>
                    <ul style="display: inline; list-style-type: none;margin-left: 300px;">
                        <li>USEFUL LINKS</li><br>
                        <li><a>Contact Us</a></li>
                        <li><a>FAQ</a></li>
                        <li><a>T&C</a></li>
                    </ul>
                </td>
            </tr>
        </table><br><br>
        <p style="font-size: 21px;">&copy; <?php  echo date('Y') ?> Flutterfly</p>
    </footer>


</body>

</html>