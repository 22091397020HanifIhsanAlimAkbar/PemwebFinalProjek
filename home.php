<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="images/logo-removebg-preview.png" rel="icon">

    <!-- custom css file link -->
    <link rel="stylesheet" href="home.css">
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
                            <li>Home</a></li>
                            <li><a href="product.html">Products</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="home.php?logout=<?php echo $user_id; ?>">Logout</a></li>
                            <li>
                                <a href="update_profile.php" class="logo" style="margin-top: 5px;">
                                    <?php
                                    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                                    if (mysqli_num_rows($select) > 0) {
                                        $fetch = mysqli_fetch_assoc($select);
                                    }

                                    // Menentukan ukuran gambar berdasarkan keberadaan gambar
                                    $imageWidth = $fetch['image'] ? 60 : 100;
                                    $imageStyle = "width: {$imageWidth}px; height: 50px; border-radius: 50%;";

                                    echo '<img src="' . ($fetch['image'] == '' ? "images/default-avatar.png" : "uploaded_img/{$fetch['image']}") . '" style="' . $imageStyle . '">';
                                    ?>
                                
                                </a></li>
                        </ul>
                    </nav>
                </div>
            </section>

            <div class="row">
                <div class="col-2">
                    <h1>Dress to Impress with Hasarisstore</h1>
                    <p>Self-confidence is the best outfit, rock it and own it.</p>
                </div>
                <div class="col-2">
                    <img src="images/slide.png">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="sosialicon"></div>
        <div class="footerbottom">
            <p>copyright &copy;2023: Designed by <span class="designer">HasarisStore</span></p>
        </div>
    </div>
</body>
</html>
