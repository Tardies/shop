<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Product List</title>
        <link rel="stylesheet" href="../style/style.css" />
    </head>
    <body>
        <div id="menu">
            <p id="title">Product Add</p>        
            <input id="btn" type="submit" value="Save" style="float:right; top: 20%; margin-right: 15%;" />   
            <a href="../index.php" ><input id="btn" type="button" style="top: 20%; float: right; margin-right: 15px; margin-left: 35%;" value="Cancel" /></a>
        </div>
        <div id="content">
            <br />
            <form id="product_form">
                <label id="caption" style="line-height: 180%;">SKU <input type="text" id="text-field" name="sku" style="margin-left: 37px;"/></label><br />
                <label id="caption" style="line-height: 180%;">Name <input type="text" id="text-field" name="name" style="margin-left: 21px;"/></label><br />
                <label id="caption" style="line-height: 180%;">Price($) <input type="text" id="text-field" name="price" style="margin-left: 2px;"/></label><br />
                <br />
                <label id="caption">Type Switcher<select id="productType" name="type" style="margin-left: 5px;">
                    <option value="D">DVD</option>
                    <option value="B">Book</option>
                    <option value="F">Furniture</option>
                </select></label>
                <br /><br /><br />
                <div id="DVD">
                    <p style="text-align: left; line-height:180%;" id="caption">Please provide size in MB</p>
                    <label id="caption" style="line-height: 180%;">Size (MB) <input type="number" name="size" style="margin-left: 2px" /></label>
                </div>
                <div id="Book">
                    <p style="text-align: left; line-height:180%;" id="caption">Please provide weight in KG</p>
                    <label id="caption" style="line-height: 180%;">Weight (KG) <input type="number" name="weight" style="margin-left: 2px" /></label>
                </div>
                <div id="Furniture">
                <p style="text-align: left; line-height:180%;" id="caption">Please provide dimensions in HxWxL format</p>
                    <label id="caption" style="line-height: 180%;">Height (CM) <input type="number" name="height" style="margin-left: 5px" /></label><br />
                    <label id="caption" style="line-height: 180%;">Width (CM) <input type="number" name="width" style="margin-left: 11px" /></label><br />
                    <label id="caption" style="line-height: 180%;">Length (CM) <input type="number" name="Length" style="margin-left: 2px" /></label><br />
                </div>
            </form>
            <?php 
                
            ?>
        </div>
        <footer><p>Scandiweb Test Assigment</p></footer>
    </body>
</html>