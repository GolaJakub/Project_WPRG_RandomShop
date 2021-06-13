<?php

session_start();

require_once('./functions.php');



if(isset($_POST['addButton'])){
    //print_r($_POST['product_ID']);
    if(isset($_SESSION['cart'])){



        print_r($_SESSION['cart']);
    }
    else{
        $product_array = array('product_ID'=>$_POST['product_ID']);

        $_SESSION['cart'][0] = $product_array;
        print_r($_SESSION['cart']);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">

        <title>Main Page</title>

        <link rel="stylesheet" href="style.css">
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <ul>
        <li><a class="active" href="main_page.php">Home</a></li>
        <li><a href="AccountInfo.php">Account</a></li>
        <li><a href="Cart.php">Cart</a></li>
    </ul>
    <div class="container">
        <div class="row text-center py-5">
            <?php
                $result = getData();
                while($row = mysqli_fetch_assoc($result)){
                    DisplayProduct($row['product_ID'],$row['product_name'],$row['product_price'],$row['product_desc'],$row['product_image']);
                }
            ?>

        </div>
    </div>







    <footer>
        <p style="font-size:14px; color:#dbdbdb">(c) Made by RandomE</p>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
