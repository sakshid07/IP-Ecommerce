<?php 
require('connection.php');
?>
<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>
    body{
        text-align:center;
    }
    fieldset{
        margin:auto;
        width:200px;
        height: 200px;
    }
    
    </style>
</head>  
<body>  
     
    <h1>REGISTER</h1>
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
    
<form action="" method="POST">  
    <legend>  
    <fieldset>  <br><br>
          
Email: <input type="text" name="email"><br><br>
Password: <input type="password" name="pass"><br>   <br>
<input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
    $email=$_POST['email'];  
    $pass=$_POST['pass'];  
    // $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    // mysqli_select_db($con,'user-registration') or die("cannot select DB");  
  
    $query=mysqli_query($dbconnect,"SELECT * FROM users WHERE email='".$email."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO users(email,password) VALUES('$email','$pass')";  
  
    $result=mysqli_query($dbconnect,$sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   
