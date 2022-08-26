<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Product List</title>
        <link rel="stylesheet" href="../style/style.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="menu">
            <p id="title">Product Add</p>        
            <form method="POST" style="top: 20%;"><input id="btn" type="submit" value="Save" style="float:right; margin-right: 15%;" /></form>   
            <a href="../index.php" ><input id="btn" type="button" style="top: 20%; float: right; margin-right: 15px; margin-left: 35%;" value="Cancel" /></a>
        </div>
        <div id="content">
            <br />
            <form id="product_form">
                <label id="caption" style="line-height: 180%;">SKU <input type="text" id="text-field" name="sku" style="margin-left: 37px;"/></label><br />
                <label id="caption" style="line-height: 180%;">Name <input type="text" id="text-field" name="name" style="margin-left: 21px;"/></label><br />
                <label id="caption" style="line-height: 180%;">Price($) <input type="text" id="text-field" name="price" style="margin-left: 2px;"/></label><br />
                <br />
                <label id="caption">Type Switcher<select id="productType2" name="type" style="margin-left: 5px;">
                                    <option value="D">DVD</option>
                                    <option value="B">Book</option>
                                    <option value="F">Furniture</option>
                                </select></label>
                <br /><br /><br />
                <div id="DVD" class="js-modifyByType js-modifyD">
                    <p style="text-align: left; line-height:180%;" id="caption">Please provide size in MB</p>
                    <label id="caption" style="line-height: 180%;">Size (MB) <input type="number" name="size" style="margin-left: 2px" /></label>
                </div>
                <div id="Book" class="js-modifyByType  js-modifyB">
                    <p style="text-align: left; line-height:180%;" id="caption">Please provide weight in KG</p>
                    <label id="caption" style="line-height: 180%;">Weight (KG) <input type="number" name="weight" style="margin-left: 2px" /></label>
                </div>
                <div id="Furniture" class="js-modifyByType  js-modifyF">
                    <p style="text-align: left; line-height:180%;" id="caption">Please provide dimensions in HxWxL format</p>
                    <label id="caption" style="line-height: 180%;">Height (CM) <input type="number" name="height" style="margin-left: 5px" /></label><br />
                    <label id="caption" style="line-height: 180%;">Width (CM) <input type="number" name="width" style="margin-left: 11px" /></label><br />
                    <label id="caption" style="line-height: 180%;">Length (CM) <input type="number" name="Length" style="margin-left: 2px" /></label><br />
                </div>
                <script>
                    $('#productType2').on('change', (e) => {
                        $('.js-modifyByType').hide();
                        $(`.js-modify${e.currentTarget.value}`).show();
                    });
                    $('#productType2').trigger('change');    
                </script>
            </form>
            <?php 
                //adding to database
                $conn = mysqli_connect('localhost', 'root', '', 'product_list');
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                if (isset($_POST)){
                    $sku = $_POST["sku"];
                    $name = $_POST["name"];
                    $price = $_POST["price"];
                    $type = $_POST["type"];
                    
                    $size = $_POST["size"];

                    $weight = $_POST["weight"];

                    $height = $_POST["height"];
                    $width = $_POST["width"];
                    $lenght = $_POST["lenght"];

                    $insert = "INSERT INTO `shop` (`id`, `type`, `sku`, `name`, `price`, `size`, `weight`, `width`, `height`, `length`) VALUES (NULL, '".$type."', '".$sku."', '".$name."', '".$price."', '".$size."', '".$weight."', '".$width."', '".$height."', '".$length."');";
                    mysqli_query($conn, $insert);
                }
                mysqli_close($conn);
            ?>
        </div>
        <footer><p>Scandiweb Test Assigment</p></footer>
    </body>
</html>