<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link href="images/logo-removebg-preview.png" rel="icon">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="registrasi.css">

</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<div class="login-container">
<div class="login-frame"></div>
        <div class="login-content">
   
        <h2>Register</h2>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <div class="input-group">
                <label for="username">Username</label>
      <input type="text" name="name"  required>
   </div>
   <div class="input-group">
               <label for="email">Email</label>
      <input type="email" name="email"  required>
   </div>
   <div class="input-group">
                <label for="password">Password</label>
      <input type="password" name="password"  required>
   </div>
   <div class="input-group">
                <label for="password">Konfirmasi Password</label>
      <input type="password" name="cpassword" required>
   </div>
   <div class="input-group">
      <input type="file" name="image"  accept="image/jpg, image/jpeg, image/png">
   </div>
      <div class="input-group">
				<button name="submit" value="register now" class="btn">Register</button>
			</div>
         <p class="login-register-text">Have an account? <a href="login.php" class="register-link"> Login</a></p>  
   </div>
   <div class="login-image">
            <img src="images/logo-removebg-preview.png" alt="User Image">
        </div>
   </form>

</div>

</body>
</html>