<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Event</title>
    <!-- font dari cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!-- CSS link -->
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

    <!-- form upload awal -->
    <section class="form">
        <div class="upload mb-5">
        <h3 class="text-center mb-5"> Dashboard </h3>
            <form name="formUpload" action="" method="post">
                <br>
                <div class="form-group">
                    <input type="file" class="form-control" name="file" required="" placeholder="Choose File">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="namaEvent" placeholder="Store Name" required="">
                </div>
                <br>
                <div class="form-group">
                    <select name="kategori" class="form-select">
                        <option value="">Category</option>
                        <option value="Food and Drink">Food and Drink</option>
                        <option value="Clothes" >Clother</option>
                        <option value="Art">Art</option>
                        <option value="Furniture" >Furniture</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Beauty and Health">Beauty and Health</option>
                    </select>
                </div>
                <br>
                <textarea name="desc" class="form-control" placeholder="Descriptions"></textarea>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="linkEvent" placeholder="Address" required="">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="contact" placeholder="Social Media" required="">
                </div>
                <br>
                <input type="submit" class="btn px-5" name="submit" value="Save" style="font-size: 14px; float: right; display:block; background: #5DCAA0; font-weight:700; border-radius: 20px;">
            </form>
        </div>
    </section>
    <!-- form upload akhir -->

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