<?php 
include('connection.php');
        //   $con = mysqli_connect(connectvalues); 
          $query = "INSERT INTO cart VALUES('$product_id',$email','$price','$image');";
           mysqli_query($dbconnect, $query);  

?>