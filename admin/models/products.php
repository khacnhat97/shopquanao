<?php
require_once 'MySQL.php';
function products_delete($id) {
    $conn = MySQL::KetNoi();
    $id = intval($id);
    $product = get_a_record('product', $id);
    $image = 'public/upload/product/'.$product['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM product WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}