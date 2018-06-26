<?php
ob_start();
session_start();
require_once('../config.php');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0){
        foreach($rs as $row){
            $_SESSION['user'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header('Location:../index.php');
        }
    }
    else{
        $_SESSION['flash'] = "<div class='ribbon-red'>Đăng nhập không thành công, hãy thử lại !</div>";
        header('Location:../index.php?page=login');
    }
}
?>