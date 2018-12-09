<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $email = escape($_POST['email']);//escape: loại bỏ kí tự đặc biệt
    $password = md5($_POST['password']);//mã hóa mật khẩu dạng md5
    user_login($email, $password);
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if ($user['RoleId']==1||$user['RoleId']==2){//vai trò quyền admin
    header('location:admin.php');//điều hướng trang
    }
}
$title = 'Administrator';
require('admin/views/home/login.php');
?>

