

<?php
function DbQuery($query){
    $dbConnect = mysqli_connect("localhost", "wprg", "wprg","randomshop");
    $result = mysqli_query($dbConnect,$query);
    mysqli_close($dbConnect);
    return $result;
}

function DisplayProduct($product_id,$product_name,$product_price,$product_desc,$product_image){
    $product = "
    <div class=\"col-md-3 col-sm-4 my-3 my-md-0\">
                <form action=\"main_page.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$product_name</h5>
                            <p class=\"card-text\">$product_desc</p>
                            <h5>  
                                <span class=\"price\">$$product_price</span>
                            </h5>

                            <button type=\"submit\" name=\"addButton\">Add to cart</button>
                            <input type=\"hidden\" name=\"product_ID\" value=\"$product_id\">
                        </div>
                    </div>
                </form>
            </div>
            ";
    echo $product;
}

function getData(){
    $sql = "SELECT * FROM products";
    return DbQuery($sql);
}



?>