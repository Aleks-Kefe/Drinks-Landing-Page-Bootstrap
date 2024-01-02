<?php 
$conn = mysqli_connect("localhost","root","","drinks");

if(isset($_POST['submit'])){
    if($_POST['submit'] == "add" ){
        add();
    } else if($_POST['submit'] == "edit"){
        edit();
    }else{
        delete();
    }
}

function add() {
    global $conn;
    $image = $_FILES["image"]["name"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $tmpName = $_FILES["image"]["tmp_name"];
    $newfilename = uniqid(). "-" . $image;
    move_uploaded_file($tmpName, 'uploads/'. $newfilename);
    $query = "INSERT INTO product VALUES('', '$newfilename',  '$name', '$price' )";
    mysqli_query($conn, $query);
    echo 
    "
    <script>alert('Product Added Successfully'); document.location.href='index.php';</script>
    ";
}
function edit() {
    global $conn;
    $id = $_GET["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];


    if($_FILES["image"]["error"]!= 4){
    $image = $_FILES["image"]["name"];
        $tmpName=$_FILES["image"]["tmp_name"];
        $newfilename = $image;
        move_uploaded_file($tmpName, 'uploads/'.$newfilename);

        $query = "UPDATE product SET image = '$newfilename' WHERE id = $id";
        mysqli_query($conn, $query);
    }
    $query = "UPDATE product SET name = '$name', image = '$image', price = '$price'  WHERE id = $id";
    mysqli_query($conn, $query);
    echo 
    "
    <script>alert('Product Updated Successfully'); document.location.href='index.php';</script>
    ";
}
function delete() {
   global $conn;
   $id = $_POST["submit"];
   $query = "DELETE FROM product WHERE id = $id";
   mysqli_query($conn,$query);
   echo 
    "
    <script>alert('Product Deleted Successfully');</script>
    ";
}
?>