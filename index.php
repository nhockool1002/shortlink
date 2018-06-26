<?php
ob_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>API Shorlink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table border="1" style="width:50%;margin:0 auto">
        <tr>
        <td style="width:30%">
            <ul class="menu">
            <?php if(isset($_SESSION['user'])){ ?>
                <li><a href="index.php?page=logout">Thoát</a></li>
            <?php }else{ ?>
                <li><a href="index.php?page=login">Đăng nhập</a></li>
            <?php } ?>
            <li><a href="index.php?page=setup">Cài đặt hệ thống</a></li>
            <li><a href="#">Tạo link</a></li>
            </ul>
        </td>
        <td>
            <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                    case 'login':
                        require_once('inc/login.php');
                        break;
                    case 'logout':
                        require_once('inc/logout.php');
                        break;
                    case 'setup':
                        require_once('inc/setup.php');
                        break;
                    default:
                        echo "Đi sai hướng";
                        break;
                }
            }
            else{
                echo "Trang chủ";
            }
            ?>
        </td>
        </tr>
    </table>
</body>
</html>