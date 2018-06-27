<?php
ob_start();
session_start();
require_once('../config.php');

if(isset($_POST['submit'])){
    $idpost = $_GET['id'];
    $user_id = $_SESSION['id'];
    $title = $_POST['title'];
    $linkdown = $_POST['linkdown'];
    $linkorigin = $_POST['linkorigin'];
    $user_id = $_SESSION['id'];
    $sql = "UPDATE `origin_link` 
            SET `name_link`='$title',
                `linkdownload`='$linkdown',
                `linkorigin`='$linkorigin'
            WHERE id='$idpost' AND user_id='$user_id'";
    $conn->query($sql);
    $_SESSION['flash'] = "<div class='ribbon-green'>Đã cập nhật !!!</div>";
    header('Location:../index.php?page=update&id='.$idpost);
    return;
}

?>