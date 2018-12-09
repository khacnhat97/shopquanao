<?php
require_once 'MySQL.php';
function order_detail($oid) {
    $sql = "SELECT product.Id, product.Name,product.Image1, product.Price,product.TypeId, product.Percent_off, order_detail.Quantity
			FROM order_detail
			INNER JOIN product ON product.Id=order_detail.ProductId
			WHERE order_detail.OrderId=$oid";
    $conn = MySQL::KetNoi();
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}