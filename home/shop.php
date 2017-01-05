<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Example page</title>        
        <?php include 'inc_header.php' ?>
    </head>
    <body>
        <div id="navi">
            <?php include 'inc_navi.php';?>
            <?php 
                if(isset($_POST['id']) && isset($_POST['action']) && isset($_POST['qty'])) {
                    $query1 = mysql_query("CREATE TABLE IF NOT EXISTS `order` (
                        ID INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
                        product_id INT(5) UNSIGNED NOT NULL,
                        price DECIMAL(4,2) NOT NULL,
                        amount INT(3) NOT NULL,
                        PRIMARY KEY(ID)
                    )");
                    $getProductInfo = mysql_query("SELECT price,name FROM `product` WHERE ID={$_POST['id']}");
                    if(!$getProductInfo) {
                        echo "Error getting product info: " . mysql_error();
                    }
                    
                    $row = mysql_fetch_assoc($getProductInfo);
                    $query2 = mysql_query("INSERT INTO `order` (product_id,price,amount) VALUES ({$_POST['id']},{$row['price']},{$_POST['qty']})");
                    echo "<div class='info'>";
                    echo "<p><strong>{$row['name']}</strong> added to basket!</p>";
                    echo "</div>";
                    if(!$query2) {
                        echo "Error: " . mysql_error();
                    }
                }
            ?>
        </div>
        <div id="main">
            <?php 
                $query = mysql_query("SELECT * FROM `product`");
                
                if(!$query) {
                    echo "Error listing products! " . mysql_error();
                    die;
                }
                
                while($row = mysql_fetch_assoc($query)) {
                    echo "<div class='product'>";
                    echo "<div class='image'><span>Image of {$row['name']} here</span></div>";
                    echo "<div class='name'><a href='product.php?id={$row['ID']}'>{$row['name']}</a></div>";
                    echo "<div class='desc'><span>{$row['description']}</span></div>";
                    echo "<div class='price'><span>£{$row['price']}</span></div>";
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>