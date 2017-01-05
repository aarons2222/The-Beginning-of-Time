<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Product page</title>        
        <?php include 'inc_header.php' ?>
    </head>
    <body>
        <div id="navi">
            <?php include 'inc_navi.php';?>
        </div>
        <div id="main">
            <?php 
                $query = mysql_query("SELECT * FROM `product` WHERE ID={$_GET['id']}");
                
                if(!$query) {
                    echo "Error listing products! " . mysql_error();
                    die;
                }
                
                while($row = mysql_fetch_assoc($query)) {
                    echo "<div class='product expanded'>";
                        echo "<div class='image'><span>Image of {$row['name']} here</span></div>";
                        echo "<div class='name'><a href='product.php?id={$row['ID']}'>{$row['name']}</a></div>";
                        echo "<div class='desc'><span>{$row['description']}</span></div>";
                        echo "<div class='price'><span>£{$row['price']}</span></div>";
                        echo "<form method='POST' action='shop.php' class='buy_area'>";
                            echo "<div class='amount'><input type='number' name='qty' value='1'></input></div>";
                            echo "<div class='buy'><input type='hidden' name='id' value='{$row['ID']}'></input>";
                                echo "<input type='submit' name='action' value='Buy'></input>";
                            echo "</div>";
                        echo "</form>";
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>