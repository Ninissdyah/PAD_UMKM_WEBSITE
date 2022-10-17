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


    <!--Regristasi Section-->
    <section>
        <div class="card">
            <div class="card-content">
              <div class="card-title">
                <h2>REGISTRATION</h2>
              </div>
              <form method="post" class="form">
                <input id="user-email" class="form-content" type="email" name="email" placeholder="Email" autocomplete="on" required />
                <input id="user-password" class="form-content" type="password" name="password" placeholder="Password" required />
                <input id="user-password" class="form-content" type="password" name="password" placeholder="Repeat Password" required />
                <input id="submit-btn" class="btn-login" type="submit" name="submit" value="REGISTER" />
              </form>
            </div>
          </div>
    </section>
    <!--End Regristasi Section-->


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