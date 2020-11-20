<?php require('top.php');
require('connection.php');
session_start(); 

// $email = $_SESSION['sess_user'];
// echo "Hello";
?>
<!-- <img src="im1.jpg" width=100% height= 700px   > -->
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="im1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="im1.jpg" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="im1.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<div id="tab1">
    <h1 style="margin-left: 470px;margin-bottom:0px;">Most Sold Products</h1>
    <table style="margin-left: 38px;margin-top:0px;">
        <tr>
            <td>
                <div class="card">
                    <img src="im2.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <p style="margin-bottom:0px;"><b>Macrame </b></p>
                        <p style="margin-top:0px;">₹ 1300</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="card">
                    <img src="im2.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <p style="margin-bottom:0px;"><b>Macrame </b></p>
                        <p style="margin-top:0px;">₹ 1300</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="card">
                    <img src="im2.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <p style="margin-bottom:0px;"><b>Macrame </b></p>
                        <p style="margin-top:0px;">₹ 1300</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="card">
                    <img src="im2.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <p style="margin-bottom:0px;"><b>Macrame </b></p>
                        <p style="margin-top:0px;">₹ 1300</p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
<section id="ban">

    <div class="part">
        <img class="gigi2" data-aos="fade-up" data-aos-duration="2500" src="images/anim1.jpg">
        <div class="gigi2con" data-aos="flip-left" data-aos-duration="2500">
            <h1 style="color:white;">PAINTINGS</h1>
            <p>A painting is an image (artwork) created using pigments (color) on a surface (ground) such as paper or
                canvas. The pigment may be in a wet form, such as paint, or a dry form, such as pastels. You can find a
                variety of beautiful and elegant paintings on our website.</p>
        </div>
    </div>

</section>
<div class="kk" style="margin-top:100px;">
    <div class="kareena-black ">
        <h1 data-aos="fade-up" data-aos-duration="1500">MACRAME</h1>
        <p data-aos="fade-up" data-aos-duration="1500">
            Macrame is a crafting technique that uses knots to create various textiles. Since this art form has regained
            popularity in recent years, crafters and artists are coming up with innovative ways to take macrame beyond
            the basic plant hangers and wall hangings.


            This age-old practice has gone in and out of popularity for thousands of years. You can find a variety of
            beautiful and elegant macrame art on our website. </p>
    </div>
    <img data-aos="flip-right" data-aos-duration="1500" class="kareena" src="images/macim1.jpg" alt="">

</div>

<?php require('footer.php') ?>



<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
AOS.init();
</script>
<style media="screen">
#ban {
    /*padding:50px 150px;*/
    position: relative;
}

.gigi1 {
    height: 670px;
    position: relative;
    left: 350px;
}

.gigi2 {
    height: 740px;

}

.gicon {
    height: 400px;
    display: inline-block;
    background-color: #ff6363;
    z-index: 1;
    position: absolute;
    right: 700px;
    padding: 100px 200px;
    top: 270px;
    width: 700px;

}

.gicon h1 {
    font-size: 25px;
    color: white;
}

.gicon p {
    color: #f8eeee;
}

.gigi2con {
    height: 300px;
    background-color: rgb(255, 0, 153);
    z-index: 1;
    position: absolute;
    display: inline-block;
    left: 580px;
    padding: 130px 140px;
    width: 360px;
    top: 160px;

}



.gigi2con p {
    color: #ffffff;
    margin-top: 30px;
    font-size: 18px;
    line-height: 1.5;
}

.part {
    margin-top: 80px;
}

.da {
    margin-left: 0;
}

.kareena {
    width: 750px;
    position: relative;
    left: 430px;
}

.polka {
    position: relative;
    /* left:515px; */


}

.kk {
    position: relative;
}

.kareena-black {
    background-color: black;
    height: 250px;
    display: inline-block;
    position: absolute;
    z-index: 1;
    width: 390px;
    top: 260px;
    padding: 100px;
    left: 40px;
}

.kareena-black h1 {
    font-size: 25px;
    margin-bottom: 30px;
    /* color: #fd5e53; */
    color: #5dcaaf;
}

.kareena-black p {
    color: #90ddca;
}

.midblack {
    background-color: #eebb4d;
    width: 444px;
    height: 625px;
    left: 40px;
    position: relative;
    padding: 10px;
}

.heights {
    /* height: 850px;
  width: 500px; */
    width: 500px;
}
</style>
<style>
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    height: 280px;
    width: 250px;
    margin-top: 50px;
    margin-left: 20px;
    text-align: center;
    /* display: inline; */
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
    background-color: white;
}
</style>





</body>

</html>