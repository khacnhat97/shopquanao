<?php


$options_orderproduct = array(
    'where' => 'TypeId = 1',
    'limit' => '16',
    'offset' => '0',
    'order_by' => 'Createdate DESC'
);
$order_products = get_all('product',$options_orderproduct);

$options_newproduct = array(
    'where' => 'TypeId = 2',
    'limit' => '16',
    'offset' => '0',
    'order_by' => 'Createdate DESC'
);
$new_products = get_all('product',$options_newproduct);

$options_saleproduct = array(
    'where' => 'TypeId = 3',
    'limit' => '16',
    'offset' => '0',
    'order_by' => 'Createdate DESC'
);
$saleoff_products = get_all('product',$options_saleproduct);

$title = 'Trang chủ';
require('website/views/home/index.php');