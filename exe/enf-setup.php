<?php
ob_start();
session_start();
require_once('../config.php');
if(isset($_POST['submit'])){
    $tocdo_api = $_POST['tocdo'];
    $link123_api = $_POST['123link'];
    $megaurl_api = $_POST['megaurl'];
    $choosen = $_POST['system'];
    $user_id = $_SESSION['id'];
    $sql = "UPDATE `token_api` 
            SET `tocdo_api`='$tocdo_api',
                `123link_api`='$link123_api',
                `megaurl_api`='$megaurl_api' 
            WHERE user_id = '$user_id'";
    $conn->query($sql);
    $sql = "UPDATE `user` 
            SET `service_id`='$choosen'
            WHERE id = '$user_id'";
    $conn->query($sql);
    $_SESSION['flash'] = "<div class='ribbon-green'>Đã lưu thông tin cài đặt</div>";
    header('Location:../index.php?page=setup');
    return;
}

?>