<?php

session_start();
require_once('lib/model.php');
if (isset($_GET['controller']))
    $controller = $_GET['controller'];
else
    $controller = 'home';
if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'index';
if (!isset($_SESSION['user'])) {
    $controller = 'home';
    $action = 'login';
}
$file = 'admin/controllers/' . $controller . '/' . $action . '.php';
if (file_exists($file)) {//Hàm này kiểm tra xem file hoặc thư mục có tồn tại không.
    require($file);
} else {
    echo 'không tìm thấy trang';;
}



