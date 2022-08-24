<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Product List</title>
        <link rel="stylesheet" href="style/style.css" />
        <script src="scripts/scripts.js"></script>
    </head>
    <body>
        <div id="menu">
            <p id="title">Product List</p>        
            <input id="delete-product-btn" type="submit" value="MASS DELETE" style="float:right; top: 20%; margin-right: 15%;" />   
            <a href="addproduct/" ><input id="btn" type="button" style="top: 20%; float: right; margin-right: 15px; margin-left: 35%;" value="ADD" /></a>
        </div>
        <table id="content">
            <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'product_list');
                $z1 = mysqli_query($conn, "SELECT * FROM products");
                $il = mysqli_num_rows($z1);
                $row_count = intdiv($il, 4);
                for($i = 1; $i <= $il; $i++) {
                    if (fmod($i, 5) == 0){ echo "<tr>";}
                    $row = mysqli_fetch_array($z1);
                    echo "<td id=\"product\"><input type=\"checkbox\" class=\"delete-checkbox\" value=\"".$row[1]."\"/><br /><p id=\"caption\">".$row[1]."<br />".$row[2]."<br />$".$row[3]."<br />Size: ".$row[4]."</p></td>";
                    if (fmod($i, 4) == 0){ echo "</tr>";}
                }
                $conn -> close();
            ?>
        </table>
        <footer><p>Scandiweb Test Assigment</p></footer>
    </body>
</html>