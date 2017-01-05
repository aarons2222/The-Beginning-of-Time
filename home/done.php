<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Purchase complete</title>        
        <?php include 'inc_header.php' ?>
        <?php
            $getBasket = mysql_query("SELECT * from `order`");
            
            
        ?>
    </head>
    <body>
        <div id="navi">
            <?php include 'inc_navi.php';?>
        </div>
        <div id="main">
            <div class="message">
                <h1>
                <?php 
                    if(mysql_num_rows($getBasket) == 0) {
                        echo "Your basket contains no items, this cannot be done";
                    } else {
                        echo "Thank you for your purchase.";
                    }
                
                ?></h1>
                <?php
                    if(!mysql_num_rows($getBasket) == 0) {
                        echo "<h3>You paid for " . mysql_num_rows($getBasket) . " products!</h3>";
                        $cost = 0;
                        while($row = mysql_fetch_assoc($getBasket)) {
                            $cost = $cost + ($row['price'] * $row['amount']);
                        }
                        echo "<h3>This cost you £" . sprintf('%0.2f', $cost) . " in total.</h3>";
                    }
                ?>
            </div>
        </div>
        <?php 
            $complete = mysql_query("DELETE FROM `order`");
            if(!$complete) {
                echo "Error completing order: " . mysql_error();
            }
        ?>