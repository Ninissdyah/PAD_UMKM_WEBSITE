<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM WEBSITE - KELOMPOK 7</title>
       <!-- swiper css link  -->
       <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- font dari cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- comment nich -->
</head>
<body>
    <!-- header awal -->
    <section class="header">
        <a href="home.php" class="logo">INI LOGO</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="event.php">Event</a>
            <a href="categories.php">Categories</a>
            <a href="about.php">About Us</a>
            <button id="btn-daftar" class="btn btn-danger navbar-btn">Sign In</button>
        </nav>
    <!-- menu bar di samping kanan atas -->
    <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header akhir -->
    <!-- bagian home awal -->
    <div class="slides">
      <div class="slide">
        <img src="images/gambar-slide-1.jpg" alt="" height="1080" width="1920">
            <div class="content">
                <span>500++</span>
                <h3>UMKM HAS JOINED WITH US</h3>
                <a href="home.php" class="btn">INI NGELINK</a>
            </div>
      </div>
      <div class="slide">
        <img src="images/gambar-slide-2.jpg" alt="" height="1080" width="1920">
            <div class="content">
                <span>500++</span>
                <h3>UMKM HAS JOINED WITH US</h3>
                <a href="home.php" class="btn">INI NGELINK</a>
            </div>
      </div>
      <div class="slide">
        <img src="images/gambar-slide-3.jpg" alt="" height="1080" width="1920">
            <div class="content">
                <span>500++</span>
                <h3>UMKM HAS JOINED WITH US</h3>
                <a href="home.php" class="btn">INI NGELINK</a>
            </div>
      </div>
      <div class="slide">
        <img src="images/gambar-slide-4.jpg" alt="" height="1080" width="1920">
      </div>
      <div class="slide">
        <img src="images/gambar-slide-5.jpg" alt="" height="1080" width="1920">
      </div>
      <div class="navigation">
        <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
        <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
      </div>
    </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length)
        {
          slideIndex = 1;
        }
        if (n < 1)
        {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++)
        {
          slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }
    </script>
        <!-- bagian home akhir -->
        <!-- event awal -->
        <section class="home-event">
            <h1 class="heading-title"> Latest Information </h1>
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="" alt="" height="650" width="650">
                </div>
            </div> 
            <div class="box">
                <div class="image">
                    <img src="" alt="" height="650" width="650">
                </div>
            </div> 
            <div class="box">
                <div class="image">
                    <img src="" alt="" height="650" width="650">
                </div>
            </div> 
            </div>
            <div class="load-more"><a href="event.php" class="btn">Read More</a></div>
        </section>
        <!-- event akhir -->
        <!-- kategori awal -->
        <section class="home-kategori">
            <h1 class="heading-title"> Categories </h1>
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1543353071-087092ec393a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <h3>Food And Drink</h3>
                </div>
            </div> 
            <div class="box">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <h3>Clothes</h3>
                </div>
            </div> 
            <div class="box">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1500839941678-aae14dbfae9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=951&q=80" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <h3>Beauty and Health</h3>
                </div>
            </div> 
            </div>
            <div class="load-more"><a href="kategori.php" class="btn">Read More</a></div>
        </section>
        <!-- kategori akhir -->
            <!-- home about awal -->
        <section class="home-about">
            <div class="image">
                <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="100" width="550">
            </div>
            <div class="content">
                <h3>About Us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi pariatur eum itaque sunt esse, quis magnam necessitatibus doloribus rem ipsum odio! Quo a vitae omnis totam. Fugit iusto sequi suscipit dicta repellendus, iure deserunt quaerat, sapiente commodi ea nam quas!</p>
                <a href="about.php" class="btn">Read More</a>
            </div>
        </section>
        <!-- home about akhir -->
    <!-- bagian banner bawah awal -->
    <section class="home">
        <div class="home-banner-bawah">
            <div class="slide">
                <div class="content">
                        <span>500++</span>
                        <h3>UMKM HAS JOINED WITH US</h3>
                        <a href="/home" class="btn">Join Us!</a>
                </div>
            </div> 
        </div>
    </section>
    <!-- bagian banner bawah akhir -->

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

    <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
    
</body>
</html>