<?php
/** setting **/
define('BASEURL' , 'http://localhost:8080/ShopAoQuan');
define('BASEPATH', dirname(__FILE__) . '/');//dirname chỉ ra thư mục cha của đường dẫn truyền vào, __FILE__ - Tên tập tin hiện tại.
define('PATH_URL', 'http://localhost:8080/ShopAoQuan');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

$conn = mysqli_connect("localhost", "root", "", "shoponline")
or
die("Không thể kết nối đến cơ sở dữ liệu");

mysqli_set_charset($conn, 'utf8');