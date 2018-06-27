<?php
ob_start();
session_start();
require_once('../config.php');


function createHash($conn){
    function generateRandomString($length = 12) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $randStr = generateRandomString();
    $sql = "SELECT * FROM origin_link WHERE hash = '$randStr'";
    $rows = $conn->query($sql);;
    if($rows->num_rows > 0){
        createHash($conn);
    }
    return $randStr;
}
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $linkdown = $_POST['linkdown'];
    $linkorigin = $_POST['linkorigin'];
    $hash = createHash($conn);
    $user_id = $_SESSION['id'];
    $sql = "INSERT INTO `origin_link`(`name_link`, `linkdownload`, `hash`, `user_id`,`linkorigin`) 
            VALUES ('$title','$linkdown','$hash','$user_id','$linkorigin')";
    $conn->query($sql);
    $_SESSION['flash'] = "<div class='ribbon-green'>Đã tạo link kết !!!</div>";
    header('Location:../index.php?page=create');
    return;
}

?>