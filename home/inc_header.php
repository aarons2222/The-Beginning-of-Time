<?php
    $servername = "localhost";
    $username = "gystudent";
    $password = "Password1";
    $dbname = "dbtest";
    $conn = mysql_connect($servername, $username, $password, $dbname);
    mysql_select_db($dbname);
?>
<link href="inc_styles.css" type="text/css" rel="stylesheet"></link>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
    //mysql_query("DROP TABLE `product`");
    $queryProductString = "CREATE TABLE IF NOT EXISTS `product` (
        ID INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(64) NOT NULL,
        description VARCHAR(128) NOT NULL,
        price DECIMAL(4,2) NOT NULL,
        PRIMARY KEY (id))";
        
    $query = mysql_query($queryProductString);
    
    if(!$query) {
        echo "Error preparing database: " . mysql_error();
        die;
    }
    
    $query2 = mysql_query("SELECT * FROM `product`");
    if(mysql_num_rows($query2) == 0) {
        $newItem1 = mysql_query("INSERT INTO `product` (name,description,price) VALUES('Product 1','Amazing product 1 suitable for all your product needs',60.75)");
        $newItem2 = mysql_query("INSERT INTO `product` (name,description,price) VALUES('Product 2','Amazing product 2 suitable for all your product needs',18.95)");

        if(!$newItem1) {
            echo "Error adding item: " . mysql_error();
        }
        if(!$newItem2) {
            echo "Error adding item: " . mysql_error();
        }
    }
?>