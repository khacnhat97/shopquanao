<?php
require_once 'MySQL.php';
function user_login($email, $password) {
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 0,1";
    $conn = MySQL::KetNoi();
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query)>0) {//trả về số hàng trong tập hợp kết quả truyền vào
        $_SESSION['user'] = mysqli_fetch_assoc($query);//tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp
        return true;
    }
    return false;
}
function user_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM user WHERE id=$id";
    mysqli_query($conn, $sql);
}