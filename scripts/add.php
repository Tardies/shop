<?php 
    error_reporting(0);
    ini_set('display_errors', 0);
    // adding to database script
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
        $length = $_POST["length"];

        $sku_check = mysqli_query($conn, "SELECT `sku` FROM `shop` WHERE `sku` = '".$sku."';");
        if (mysqli_num_rows($sku_check) == 0){
            $insert = "INSERT INTO `shop` (`id`, `type`, `sku`, `name`, `price`, `size`, `weight`, `width`, `height`, `length`) VALUES (NULL, '".$type."', '".$sku."', '".$name."', '".$price."', '".$size."', '".$weight."', '".$width."', '".$height."', '".$length."');";
            mysqli_query($conn, $insert);
        }
        
    }
    mysqli_close($conn);
    header("Location: ../index.php");
?>