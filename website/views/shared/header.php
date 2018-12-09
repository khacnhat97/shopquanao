<?php
require_once 'website/models/cart.php';
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories',$options_parent_menu);

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <base href="http://localhost:8080/ShopAoQuan/"/>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'eCommerce - Fashion Shop'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shop thời trang nam">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Shop thời trang nam"/>
    <link href="admin/themes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<!--    <script src="public/content/jquery.min.js"></script>-->
    <script src="public/js/bootstrap.min.js"></script>
    <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css" media="all"/>
    
    
    <link href="public/css/memenu.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<div class="top_bg" id="top1">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <ul>                    
                    <li><a href="#">Nhóm 3</a></li>
                </ul>
            </div>
            <div class="top_right" style="padding-left: 2em;">
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="header-top">
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="home"><h1>Fashion Store</h1></a>
            </div>
            <div class="top-nav">
                <ul class="memenu skyblue">
                    <li><a href="home">Trang chủ</a></li>                    
                            <li class="grid">
                                <a href="group/1-quan.html">Áo</a>
                                                             
                            </li>
                            <li class="grid">
                                <a href="#">Quần</a> </li>  
                        <?php //elseif ($parent_menu['Id'] == 3): ?>
                            <!--<li class="grid"><a
                                    href="group/<?php //echo $parent_menu['Id'] ?>-<?php //echo $parent_menu['alias'] ?>.html"><?php //echo $parent_menu['Name'] ?></a>
                            </li>-->
                       
                    <!--<li><a href="livesport">Live sport</a></li>-->
                </ul>
            </div>
            <div class="cart box_1">
                <a href="cart"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng : <?php echo cart_number(); ?> sp</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
