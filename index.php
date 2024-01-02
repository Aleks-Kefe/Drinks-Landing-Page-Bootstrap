<?php require 'function.php'; 
$bg_image = 'images/bg2.jpg';
$bg_image2 = 'images/display2.jpg';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drinks Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico:wght@400;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="style.css
    ">


        <style type="text/css" media="all">

        </style>
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a style="color: brown; font-size:40px; font-family: 'Pacifico', sans-serif;" class="navbar-brand" href="#">AkpoNora Ventures.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section id="hero" style="background-image: url('<?php echo $bg_image; ?>'); background-size:cover; background-position:center;" class=" d-flex align-items-center">
            
            <div class="container text-center">
                <h1 style="color: #fff;">Welcome to our Drinks Site</h1>
                <p style="color: #fff;">Discover our premium collection of drinks</p>
                <a href="#products" class="btn btn-primary btn-lg">Explore</a>
            </div>
        </section>



        <a class="btn btn-success" href="addproduct.php">Add Product</a>
       <?php include 'product.php' ?>

       
        <div id="other-products" class="text-lowercase text-white" style="background-image: url('<?php echo $bg_image2; ?>'); background-size:cover; background-position:center; 
    font-family: 'Pacifico', sans-serif;">COME SHOP WITH US...</div>
        <!-- about -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatum temporibus odio, suscipit harum atque. Quisquam praesentium quae eius eaque eum nostrum illo asperiores, suscipit maiores minima, laboriosam commodi voluptate
                            sit eos ipsam quis animi. Facilis, tempore illum amet quisquam cumque nesciunt, consequatur, pariatur molestias harum a placeat ipsa corrupti.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="./images/malt.jpg" class="img-fluid" alt="About Us Image">
                    </div>
                </div>
            </div>
        </section>

        <!-- contact  -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Contact Us</h2>
                        <p>Get in touch with us:</p>
                        <ul>
                            <li>Email: akponora@gmail.com</li>
                            <li>Phone: +905 7584 444</li>
                            <li>ENERHEN ROAD, WARRI DELTA STATE.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Follow us on social media:</p>
                        <ul class="list-inline social-link">

                            <li>
                                <a href="https://www.facebook.com"><img src="./images/icon/fa.jpg" alt="" width="15%"></a>
                                <a href="https://www.facebook.com"><img src="./images/icon/in.jpg" alt="" width="15%"></a>
                                <a href="https://www.facebook.com"><img src="./images/icon/twi.jpg" alt="" width="15%"></a>
                                <a href="https://www.facebook.com"><img src="./images/icon/wa.jpg" alt="" width="15%"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>&copy; 2023 AkpoNora Ventures</p>
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>