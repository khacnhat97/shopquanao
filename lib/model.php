<?php
require "dbConnect.php";
require "function.php";
require_once './MySQL.php';
//
// intval chuyển đổi một biến hoặc một giá trị sang kiểu số nguyên (integer).
//  mysql_real_escape_string có nhiệm vụ sẽ chuyển một chuỗi thành chuỗi query an toàn

function save($table, $data = array()) {
    $conn = MySQL::KetNoi();
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $Id = intval($data['Id']);
    if ($Id > 0) {
        $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE Id=$Id";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    }
    mysqli_query($conn, $sql) or die(mysqli_connect_error);

    $Id = ($Id>0) ? $Id : mysqli_insert_id($conn);
    return $Id;
}

function delete($table, $id) {
    $conn = MySQL::KetNoi();
    $id = intval($id);
    $sql = "DELETE FROM `$table` WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function get_a_record($table, $id, $select = '*') {
    //truy v?n
    $conn = MySQL::KetNoi();
    $id = intval($id);
    $sql = "SELECT $select FROM `$table` WHERE id=$id";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $data = NULL;
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);//sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp
        mysqli_free_result($result);//Giải phóng bộ nhớ ở cuối mỗi lệnh SELECT
    }
    return $data;
}

function get_a_record_by_alias($table, $alias, $select = '*') {
    $conn = MySQL::KetNoi();
    $alias = mysqli_real_escape_string($alias);
    $sql = "SELECT $select FROM `$table` WHERE alias='$alias'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $data = NULL;
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    }
    return $data;
}
function Selecct_a_record($table, $options = array(), $select = '*') {
    //truy v?n
    $conn = MySQL::KetNoi();
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $data = NULL;
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    }
    return $data;
}

function get_all($table, $options = array()) {
    $conn = MySQL::KetNoi();
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $data = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
    }

    return $data;
}

function get_total($table, $options = array()) {
    $conn = MySQL::KetNoi();
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $sql = "SELECT COUNT(*) as total FROM `$table` $where";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

function getRealIpAddr(){
    $count_file = fopen("counter.txt", "r") or die("Unable to open file!");
    $count_visiter= print_r(fgets($count_file));
    fclose($count_file);
    return $count_visiter;
}

function get_time($timePost,$timeReply) {

    $datePost	= date_parse_from_format('Y:m:d H:i:s', $timePost);
    $dateReply	= date_parse_from_format('Y:m:d H:i:s', $timeReply);

    $tsPost		= mktime($datePost['hour'], $datePost['minute'], $datePost['second'], $datePost['month'], $datePost['day'], $datePost['year']);
    $tsReply	= mktime($dateReply['hour'], $dateReply['minute'], $dateReply['second'], $dateReply['month'], $dateReply['day'], $dateReply['year']);
    $distance 	= $tsReply - $tsPost;

    switch ($distance){
        case ($distance < 60):
            $result = ($distance == 1) ? $distance . ' second ago' : $distance . ' seconds ago';
            break;
        case ($distance >= 60 && $distance < 3600):
            $minute	= round($distance/60);
            $result = ($minute == 1) ? $minute . ' minute ago' : $minute . ' minutes ago';
            break;
        case ($distance >= 3600 && $distance < 86400):
            $hour	= round($distance/3600);
            $result = ($hour == 1) ? $hour . ' hour ago' : $hour . ' hours ago';
            break;
        case (round($distance/86400)==1):
            $result = 'Yesterday at ' . date('H:i:s', $tsReply);
            break;
        default:
            $result = date('d/m/Y \a\t H:i:s', $tsPost);
            break;
    }
    return $result;
}
