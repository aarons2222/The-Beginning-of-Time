<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>My basket</title>        
        <?php include 'inc_header.php' ?>
       
    </head>
    <body>
        <div id="navi">
            <?php include 'inc_navi.php';?>
            <?php
                if(isset($_GET['remove'])) {
                    $query = mysql_query("DELETE FROM `order` WHERE product_id={$_GET['remove']}");
                    if(!$query) {
                        echo "Error: " . mysql_error();
                    } else {
                        echo "<div class='info'>Product removed from basket!</div>";
                        mysql_query("DELETE FROM `order` WHERE product_id={$_GET['remove']}");
                    }
                }
            ?>
        </div>
        <div id="main">
            <div class="basket">
                <h1>Your basket</h1>
                <?php
                    $conn = mysql_connect($servername, $username, $password, $dbname);
                    mysql_select_db($dbname);
                    
                    $getBasket = mysql_query("SELECT * FROM `order`");
                    
                    if(!$getBasket) {
                        echo "Error retrieving your basket! " . mysql_error();
                        die;
                    }
                    $rows = mysql_num_rows($getBasket);
                    if(!$rows == 0) {
                        while($row = mysql_fetch_assoc($getBasket)) {
                            $getProduct = mysql_query("SELECT * FROM `product` WHERE ID={$row['product_id']}");
                            if(!$getProduct) {
                                echo "Error retrieving product in basket: " . mysql_error();
                            }
                            $row2 = mysql_fetch_assoc($getProduct);
                            echo "<div class='product'>";
                            echo "<div class='image'><span>Image of {$row2['name']} here</span></div>";
                            echo "<div class='name'><a href='product.php?id={$row2['ID']}'>{$row2['name']}</a></div>";
                            echo "<div class='desc'><span>{$row2['description']}</span></div>";
                            echo "<div class='price'><span>£{$row2['price']}</span></div>";
                            echo "<div class='amount'><span>Ordered: {$row['amount']}<br />This will cost you: £" . sprintf('%0.2f', ($row['price'] * $row['amount'])) . "</span></div>";
                            echo "<div class='remove'><a href='basket.php?remove={$row['product_id']}'>Remove this item from your basket</a></div>";
                            echo "</div>";
                        }
                    } else {
                        echo "<h2>Your basket is empty!</h2>";
                    }
                ?>
            </div>
            <div class='complete_order'>
                <form method="POST" action="done.php">
                    <input class='purchase' type="submit" name="buy" value="Complete purchase"></input>
                </form>
            </div>
        </div>
    </body>
</html>