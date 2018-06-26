<?php
$hostname = 'localhost';
$username = 'root'; 
$password = '';
$dbname = 'shortlink';
define('HOSTNAME',$hostname);
define('USERNAME',$username);
define('PASSWORD',$password);
define('DBNAME',$dbname);
$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

// Kiểm tra kết nối cơ sở dữ liệu
if (mysqli_connect_errno()){
  echo "Thất bại trong việc cơ sở dữ liệu " . mysqli_connect_error();
}
mysqli_set_charset($conn,"utf8");
?>