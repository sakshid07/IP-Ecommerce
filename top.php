<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</body>

</html>