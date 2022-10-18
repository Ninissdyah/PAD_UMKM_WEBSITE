<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM WEBSITE - KELOMPOK 7</title>

    <!-- font dari cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- header awal -->
    <section class="header">
        <a href="home.php" class="logo">INI LOGO</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="event.php">Event</a>
            <a href="kategori.php">Categories</a>
            <a href="about.php">About Us</a>
        </nav>

    <!-- menu bar di samping kanan atas -->
    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header akhir -->

    <section class="home">
        <div class="home-home">
            <div class="W">

            <div class="slide">
                <div class="content">
                        <span>500++</span>
                        <h3>UMKM HAS JOINED WITH US</h3>
                        <a href="/home" class="btn">INI NGELINK</a>
                </div>
            </div> 

        </div>
    </section>
    <!-- bagian home akhir -->


 <!-- about awal 1-->
 <section class="about">
    <div class="image">
        <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar">
    </div>

    <div class="content">
        <h3>Why Should Us?</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, nisi voluptate tempora qui inventore recusandae voluptates! Minima ut nobis deleniti nostrum nulla accusantium tempore culpa dolorum quos laborum maxime molestias sapiente soluta enim ab, ducimus suscipit recusandae, in odio vero quis ad. Doloremque laudantium alias quas pariatur id explicabo tempora labore omnis voluptatum provident molestiae, quidem, excepturi deleniti voluptas maiores.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quaerat, rem repellendus, esse qui placeat molestias excepturi odio ullam, quidem eveniet accusantium non dolore minima doloremque expedita saepe temporibus aliquam nihil earum velit voluptates. Voluptatibus nihil explicabo quibusdam beatae iste sunt expedita odit maxime atque sit. Quibusdam officiis sequi nesciunt.</p>
    </div>
</section>
    <!-- about akhir -->



    <!-- footer awal -->
    <section class="footer">
       <div class="box-container">
           <div class="box">
               <h3>INI LOGO</h3>
           </div>

           <div class="box">
               <h3>contact information</h3>
                <a href="#"><i class="fas fa-phone"></i> +62 12345678321 </a>
                <a href="#"><i class="fas fa-phone"></i> +62 32187654321 </a>
                <a href="#"><i class="fas fa-at"></i> umkmAja@gmail.com </a>
                <a href="#"><i class="fas fa-location"></i> Yogyakarta, Indonesia </a>
           </div>

           <div class="box">
               <h3>our social media</h3>
                <a href="home.php"><i class="fab fa-facebook"></i> UMKMAja! </a>
                <a href="home.php"><i class="fab fa-twitter"></i> UMKMAja! </a>
                <a href="home.php"><i class="fab fa-instagram"></i> UMKMAja! </a>
           </div>

       </div> 

       <div class="credit">created by <span>UMKMAja!</span> | All Rights Reserved. </div>
    </section>

    <!-- footer akhir -->


    <!-- javascript link -->
    <script src="script.js"></script>
    
</body>
</html>