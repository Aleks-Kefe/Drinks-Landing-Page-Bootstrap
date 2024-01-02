<?php require 'function.php'; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drinks Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="stylesheet" href="style.css
    ">


        <style type="text/css" media="all">

        </style>
    </head>

    <body>

        

        
        <div class="container mt-5">
        <H4>EDIT PRODUCT</H4>
<a href="index.php" class="btn btn-danger float-right">Home Page</a>

   <form class="form border rounded p-4"  action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 " >
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name"  required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <button class="btn btn-primary" type="submit" name="submit" value="add">Add</button>
</form>
<br>
   </div>

        <!-- footer -->
        


        <!-- <script src="main.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>