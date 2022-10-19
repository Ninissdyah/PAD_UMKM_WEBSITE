<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font dari cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    <!-- Dashboard awal -->
    <section class="dashboard" style="padding: 100px;">
        <h3 class="text-center m-5"> Dashboard </h3>
        <div class="images" style="margin-top: 100px;">
            <img src="https://preview.redd.it/045ta5yxysd41.jpg?auto=webp&s=5bfedc95bf863f0a8466f1facebdcb4d9540efe1" 
            style="width: 500px; height: 400px;">
        </div>
        <div class="my-5">
            <div class="py-2 my-2" style="text-align: center; background-color: #f1f1f1; width: 200px;"><h3>Store Name</h3></div>
            <p style="font-size: 16px;">Pasar Gelap</p>
        </div>
        <div class="my-5">
            <div class="py-2 my-2" style="text-align: center; background-color: #f1f1f1; width: 200px;"><h3>Description</h3></div>
            <p style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                aliquip ex ea commodo consequat. </p>
        </div>
        <div class="my-5">
            <div class="py-2 my-2" style="text-align: center; background-color: #f1f1f1; width: 200px;"><h3>Address</h3></div>
            <p style="font-size: 16px;">Jl. Kenangan , No. 78, Kab. Seleman, D.I.Y, Indonesia</p>
        </div>
        <div class="my-5">
            <div class="py-2 my-2" style="text-align: center; background-color: #f1f1f1; width: 200px;"><h3>Social Media</h3></div>
            <p style="font-size: 16px;">Instagram : @pasarGelap</p>
            <p style="font-size: 16px;">WhatsApp : 086xxxxxxxxx</p>
        </div>

        <input type="submit" class="btn px-5" name="submit" value="Edit" style="font-size: 16px; float: right; display:block; background: #5DCAA0; font-weight:700; border-radius: 20px; margin-left: -100px;">
        <input type="submit" class="btn px-5" name="submit" value="Post" style="font-size: 16px; float: right; display:block; background: #5DCAA0; font-weight:700; border-radius: 20px; margin-top: 60px;">
    </section>

    <div class="flex-container" style="margin-top: 100px; margin-left: 50px; margin-right: 50px;">
      <div class="row p-5">
        <div class="col-6">
          <img src="https://th.bing.com/th/id/OIP.xzxVRE2CPj19jiH-sUAsiAHaHa?pid=ImgDet&rs=1"
          style="width: 500px; height:500px;">
        </div>
        <div class="col-6" style="margin-top: -20px;">
            <p style="font-weight: bold;"> Telur </p>
            <p style="font-size: 16px; line-height: 40px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </p>
            <input type="submit" class="btn px-5" name="submit" value="Readmore" style="font-size: 16px; float: left; display:block; background: #5DCAA0; font-weight:700; border-radius: 20px;">
        </div>
      </div>
    </div>
    <!-- Dashboard akhir -->

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
    




    
</body>
</html>