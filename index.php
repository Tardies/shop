<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Product List</title>
        <link rel="stylesheet" href="style/style.css" />
        <script src="scripts/scripts.js"></script>
    </head>
    <body>
        <form action="scripts/del.php" method="POST">
        <div id="menu">
            <p id="title">Product List</p>        
            <input id="delete-product-btn" type="submit" value="MASS DELETE" style="float:right; top: 20%; margin-right: 15%;" />   
            <button id="btn" type="button" onclick="redirect()"  style="top: 20%; float: right; margin-right: 15px; margin-left: 35%;">ADD</button>
            <script>
            function redirect() {
                location.replace("addproduct/")
            }
            </script>
        </div>
        <table id="content">
            <?php 
            // displaying the records
                $conn = mysqli_connect('localhost', 'root', '', 'product_list');
                $z1 = mysqli_query($conn, "SELECT * FROM shop");
                $il = mysqli_num_rows($z1);
                $row_count = intdiv($il, 4);
                for($i = 1; $i <= $il; $i++) {
                    $row = mysqli_fetch_array($z1);
                    if ($row[1] == "D") {
                        echo "<td id=\"product\"><input type=\"checkbox\" name=\"sku[]\" class=\"delete-checkbox\" value=\"".$row[2]."\"/><br /><p id=\"caption\">".$row[2]."<br />".$row[3]."<br />$".$row[4]."<br />Size: ".$row[5]."</p></td>";
                    }
                    if ($row[1] == "B") {
                        echo "<td id=\"product\"><input type=\"checkbox\" name=\"sku[]\" class=\"delete-checkbox\" value=\"".$row[2]."\"/><br /><p id=\"caption\">".$row[2]."<br />".$row[3]."<br />$".$row[4]."<br />Weight: ".$row[6]."</p></td>";
                    }
                    if ($row[1] == "F") {
                        echo "<td id=\"product\"><input type=\"checkbox\" name=\"sku[]\" class=\"delete-checkbox\" value=\"".$row[2]."\"/><br /><p id=\"caption\">".$row[2]."<br />".$row[3]."<br />$".$row[4]."<br />Dimension: ".$row[7]."x".$row[8]."x".$row[9]."</p></td>";
                    }
                }
                $conn -> close();
            ?>
        </table>
        </form>
        <footer><p>Scandiweb Test Assignment</p></footer>
    </body>
</html>