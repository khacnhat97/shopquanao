<?php
function categories_delete($id) {
    $id = intval($id);
    require_once('admin/models/products.php');
    $options = array(
        'select' => 'id',
        'where' => 'CategoryId='.$id
    );
    $products = get_all('product', $options);
    foreach ($products as $product) {
        products_delete($product['id']);
    }
    $conn = MySQL::KetNoi();
    //xóa danh mục
    $sql = "DELETE FROM categories WHERE Id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}