<?php
session_start();
require_once('lib/model.php');
require_once('website/models/cart.php');



if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';
$file = 'website/controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) {
    require($file);
} 
else {
    header("Location: http://localhost:8080/ShopAoQuan/home");
   // show_404();
}
