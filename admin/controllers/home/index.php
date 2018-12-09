<?php

//data
$title = 'Quản trị hệ thống';
$user = $_SESSION['user'];

$optionsCom = array(
    'order_by' => 'id DESC'
);

$options_total_access = array(
    'order_by' => 'id'
);

$options_feedback = array(
    'order_by' => 'Createtime DESC'
);


$options_getfeedback = array(
    'order_by' => 'Id DESC'
);


$options_livesport = array(
    'order_by' => 'Id DESC'
);


$options_order_complete = array(
    'where' => 'Status = 1',
    'order_by' => 'Createtime DESC'
);
$order_completes = get_all('orders', $options_order_complete);


$options_order = array(
    'order_by' => 'Id DESC'
);
$total_order = get_total('orders', $options_order);

$options_inprocess = array(
    'where' => 'Status = 0',
    'order_by' => 'Id DESC'
);
$total_order_inprosess = get_total('orders', $options_inprocess);

$options_process = array(
    'where' => 'Status = 1',
    'order_by' => 'Id DESC'
);
$total_order_prosess = get_total('orders', $options_process);


$options_comment_new = array(
    'limit' => 1,
    'offset' => 0,
    'order_by' => 'Id DESC'
);

$options_feedback_new = array(
    'limit' => 1,
    'offset' => 0,
    'order_by' => 'Id DESC'
);

$options_order_new = array(
    'limit' => 1,
    'offset' => 0,
    'order_by' => 'Id DESC'
);
$order_new = Selecct_a_record('orders', $options_order_new);
//load view
require('admin/views/home/index.php');
