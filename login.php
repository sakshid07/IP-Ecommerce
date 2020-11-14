<?php 
require('connection.php');
?>
<!doctype html>  
<html>  
<head>  
<title>Login</title>  
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
     <h1>LOGIN</h1> 
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  

<form action="" method="POST"> 
<legend>  
    <fieldset>   <br><br>
Email: <input type="email" name="email"><br />  <br>
Password: <input type="password" name="pass"><br /><br>   
<input type="submit" value="Login" name="submit" /> 
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
  
    $query=mysqli_query($dbconnect,"SELECT * FROM users WHERE email='".$email."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($email == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['email']=$email;  
    echo " Logged in!";
    echo "$email"; 
    /* Redirect browser */  
    header("Location: homepage.php");  
    }  
    } else {  
    echo "not Logged in!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   