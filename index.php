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
	   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DATA K-ZONE Redirect Page - Chuyên trang dùng để lưu trữ nội dung và phân tích dữ liệu hiện có và quản lý theo tài khoản" />
	<meta name="keywords" content="data, data k zone, data-k-zone, dkz, tài liệu, mã nguồn, sourcecode, dữ liệu" />
	<meta name="author" content="Data K-Zone" />
	<meta property="og:title" content="DATA K-ZONE Redirect Page"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content="DATA K-ZONE Redirect Page"/>
	<meta property="og:description" content="DATA K-ZONE Redirect Page - Chuyên trang dùng để lưu trữ nội dung và phân tích dữ liệu hiện có và quản lý theo tài khoản"/>
	<meta name="twitter:title" content="DATA K-ZONE Redirect Page" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="img/img.jpg">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Francois+One&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table border="1" style="width:50%;margin:0 auto">
        <tr>
        <td style="width:30%">
            <ul class="menu">
            <li><a href="index.php">Trang chủ</a></li>
            <?php if(isset($_SESSION['user'])){ ?>
                <li><a href="index.php?page=setup">Cài đặt hệ thống</a></li>
                <li><a href="index.php?page=create">Tạo link</a></li>
                <li><a href="index.php?page=list">Danh sách link</a></li>
                <li><a href="index.php?page=logout">Thoát</a></li>
            <?php }else{ ?>
                <li><a href="index.php?page=login">Đăng nhập</a></li>
                <li><a href="index.php?page=register">Đăng ký</a></li>
            <?php } ?>
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
                    case 'register':
                        require_once('inc/register.php');
                        break;
                    case 'create':
                        require_once('inc/create.php');
                        break;
                    case 'list':
                        require_once('inc/list.php');
                        break;
                    case 'delete':
                        require_once('inc/delete.php');
                        break;
                    case 'update':
                        require_once('inc/update.php');
                        break;
                    default:
                        echo "Đi sai hướng";
                        break;
                }
            }
            else{
                if(isset($_GET['get'])){
                    require_once('inc/getlink.php');
                }
                else{
                require_once('inc/home.php');
                }
            }
            ?>
        </td>
        </tr>
        <tr>
            <td colspan=2 style="font-family: 'Francois One', sans-serif;background-color:#ff93c2;text-align:center;color:white;line-height:10px;">
                <p>Auto Change ShortLink - Develop by KANGCODE</p>
                <p>&copy; Copyright 2018 Reversed</p>
                <p>Email : nhut.nguyenminh.it@gmail.com</p>
            </td>
        </tr>
    </table>
</body>
</html>