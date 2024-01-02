<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drinks Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

        <link rel="stylesheet" href="style.css
    ">


        <style type="text/css" media="all">

        </style>
    </head>

    <body>
<div class="container">
            <h1 class="text-center mt-4 mb-4">Products</h1>
            <div class="row" id="products">
            <?php 
                                $products = mysqli_query($conn, "SELECT * FROM product");
                                $id = 1;
                                foreach($products as $product) : 
            ?>
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="uploads/<?php echo $product["image"] ?>" width="300">
                        <div class="card-body">
                            <h5 id="title" class="card-title text-uppercase"><?php echo $product["name"] ?></h5>
                            <p id="price" class="card-price">₦<?php echo $product["price"] ?></p>
                            <div class="flex">
                            <a class="card-order btn btn-primary text-center">ORDER NOW!</a>
                               <a class="btn btn-primary mr-2"  href="editproduct.php?id=<?php echo $product['id']?>">Edit Product</a>
                                <form  method="post">
                                <button class="btn btn-danger"  type="submit" name="submit" value=<?php echo $product['id']?>>Delete Product</button>
                                </form>
                            </div> 
                        </div>
                    </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>