<?php 
require('connection.php');
?>
<!doctype html>
<html>

<head>
    <title>Register</title>
    <style>
    body {
        text-align: center;
    }

    /* fieldset{
        margin:auto;
        width:400px;
        height: 400px;
    } */
    #infield {
        border-radius: 25px;
        border: 1px solid grey;
        padding: 7px;
        width: 300px;
        height: 30px;
    }
    </style>
</head>

<body>

    <h2 style="margin-top:50px">REGISTER</h2>
    <!-- <p><a href="register.php" ><button style="height:30px;width=130px;background-color:#d81b60;color:white">Register</button></a> | <a href="login.php"><button style="height:30px;width=130px;background-color:#d81b60;color:white">Login</button></a></p>   -->

    <form action="" method="POST">
        <legend>

            <input type="text" name="fname" placeholder="First Name" id="infield"><br> <br>
            <input type="text" name="lname" placeholder="Last Name" id="infield"><br><br>
            <input type="text" name="email" placeholder="Email" id="infield"><br><br>
            <input type="text" name="phone" placeholder="Phone" id="infield"><br><br>
            <input type="text" name="pass" placeholder="Password" id="infield"><br><br>


            <input type="submit" value="Register" name="submit" id="infield"
                style="height:49px;width:320px;background-color:#d81b60;border:none;color:white" /> <br><br>
            <a href="login.php">Already a member? Login</a> <br><br>

        </legend>
    </form>
    <?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
    $email=$_POST['email'];  
    $pass=$_POST['pass'];  
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    // $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    // mysqli_select_db($con,'user-registration') or die("cannot select DB");  
  
    $query=mysqli_query($dbconnect,"SELECT * FROM users WHERE email='".$email."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO users(email,password,fname,lname,phone) VALUES('$email','$pass','$fname','$lname','$phone')";  
  
    $result=mysqli_query($dbconnect,$sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} 
}  
?>
</body>

</html>