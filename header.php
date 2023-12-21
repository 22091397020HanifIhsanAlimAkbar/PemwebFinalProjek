<header class="header">

   <div class="flex">

   <div class="logo">
                    <img src="images/logo-removebg-preview.png" width="125px">
                </div>

      <nav class="navbar">
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
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>