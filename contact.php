<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='contact.css' rel='stylesheet' type='text/css'>
        <link href="images/logo-removebg-preview.png" rel="icon">
    <title>Contact Us</title>
    </head>
    <body>
    <div class="header">
        <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo-removebg-preview.png" width="125px">
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>                
                </ul>
            </nav>
        </div>
    </div>
</div>
<h2 class="title"> Contact Us</h2>
<div class="offer">
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>Jln. Kentintang Universitas Negeri Surabaya</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <p>0882003365621</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p>hasaristore@gmail.com</p>
            </div>
        </div>
        </div>
        <h2 class="title"> Contact Form</h2>
        <div class="offer">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    

                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button  type="submit" name="ok"  value="Send message">Send Message</button>
                                </div>
                            </div>
                            
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        </div>
        <div class="footer">  
    <div class="sosialicon">
<a href=""><img src="images/Instagram-Icon.png" width="30px"></a>
<a href=""><img src="images/fb.png" width="30px"></a>
<a href=""><img src="images/tw.png" width="30px"></a>
<a href=""><img src="images/yt.png" width="30px"></a>
</div>
<div class="footerbottom">
<p>copyright &copy;2023: Designed by <span class="designer">HasarisStore</span></p>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
