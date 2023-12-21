<?php

@include 'configproduct.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HasarisStore</title>
    <link rel="stylesheet" href="about.css">
    <link href="images/logo-removebg-preview.png" rel="icon">
</head>
<body>

<div class="header">
    <div class="container">
        <section id="home">
    
    <div class="navbar">
        <div class="logo">
            <img src="images/logo-removebg-preview.png" width="125px">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
          
        </nav>
        <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart"><img src="images/cart.png" width="30px" height="30px" alt="cart"><span><?php echo $row_count; ?></span> </a>
      </ul>
        </div>
    </div>
</div>
    </section>
     
    <h2 class="title"> About</h2>
    <div class="offer">

    <div class="small-container">
       
    
  
        
    <div class="row">
    
    <div class="col-2">
        <img src="images/lovepik-lovers-shopping-png-image_400680411_wh860-removebg-preview.png" class="Ofter-img">
        </div>
        <div class="col-2">
<h1>Dress to Impress with Hasarisstore</h1>
<p>Sebuah website untuk pengguna yang sedang mencari barang kebutuhan fashion Pria dan Wanita dan memudahkan pemilik toko Hasaris untuk memasarkan dan mempromosikan barang toko kebutuhan fashion pria dan wanita. Menjadikan website ini sebagai salah satu media layanan toko online untuk mempermudah pembeli mendapatkan produk yang dicari</p>
    </div>
  
    </div>
</div>
</div>
<h2 class="title"> Profil</h2>
<div class="profil">
<div class="small-container">

   
    <div class="row">
        <div class="col-3">
            <img src="images/anisa.jpg" >
            <h2>Ihda Anisa Ulfa</h2>
        </div>
        <div class="col-3">
            <img src="images/hanif.jpg" >
            <h2>Hanif Ihsan Alim A</h2>
        </div>
        <div class="col-3">
            <img src="images/nuris.jpg" >
            <h2>Nurissa’idah</h2>
        </div>
    </div>
</div>
</div>

   
    
   <!------- contact ----------->
   <div class="footer">  
    <div class="sosialicon">

</div>
<div class="footerbottom">
<p>copyright &copy;2023: Designed by <span class="designer">HasarisStore</span></p>
</div>

</div>

    <!--------- footer -------->

</body>
</html>