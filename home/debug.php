<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Debug</title>        
        <?php include 'inc_header.php' ?>
        <style>
            table td div {
                max-height:36px;
                overflow-y:auto;
                overflow-x:hidden;
                min-width:90px;
            }
            
            table, tr, td {
                border:1px solid black;
            }
            table {
                background-color:rgba(0,50,120,0.6);
                padding:4px;
            }
            td,th {
                background-color:rgba(255,255,255,0.7);
                overflow-y:auto;
                max-height:24px;
            }
        </style>
    </head>
    <body>
        <div id="tables_present">
            <?php 
                $result = mysql_query("SHOW TABLES FROM " . $dbname);
                if(!$result) {
                    echo "Error: " . mysql_error();
                }
                $rows = mysql_num_rows($result);
                while($row = mysql_fetch_row($result)) {
                    $result2 = mysql_query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='".$dbname."' AND `TABLE_NAME`='".$row[0]."'");
                    $rows = mysql_num_rows($result2);
                    echo "<table width='1000px'><tbody>";
                    echo "<tr colspan='{$rows}'><th colspan='{$rows}'>{$row[0]}</th></tr>";
                    if(!$result2) {
                        echo "<tr colspan='{$rows}'><td>" . mysql_error() . "</td></tr>";
                    }
                    
                    echo "<tr>";
                    while($row2 = mysql_fetch_row($result2)) {
                        echo "<td>{$row2[0]}</td>";
                    }
                    echo "</tr>";
                    $query =  mysql_query("SELECT * FROM `" . $row[0] . "`");
                    while($row3 = mysql_fetch_row($query)) {
                        $i = 0;
                        echo "<tr>";
                        while($i < $rows) {
                            echo "<td><div>{$row3[$i]}</div></td>";
                            $i = $i + 1;
                        }
                        echo "</tr>";
                    }
                    echo "</tbody></table></br>";
                }
            ?>
        </div>
    </body>
</html>