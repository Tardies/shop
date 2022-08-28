<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    // deletion script
    $sku = $_POST['sku'];
    $conn = mysqli_connect('localhost', 'root', '', 'product_list');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    for ($i = 0; $i < count($sku); $i++){
        $query = "DELETE FROM shop WHERE `sku` = '".$sku[$i]."';";
        mysqli_query($conn, $query);
    }
    mysqli_close($conn);
    header("Location: ../index.php");
?>