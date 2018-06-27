<div class="delete" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(isset($_SESSION['user'])){
        $idpost = $_GET['id'];
        $user_id = $_SESSION['id'];
        $sql = "DELETE FROM `origin_link` WHERE id = '$idpost' AND user_id = '$user_id'";
        if($conn->query($sql)){
            $_SESSION['flash'] = "<div class='ribbon-green'>Đã xóa liên kết</div>";
            header('Location:index.php?page=list');
        }
    }
    else{
        $_SESSION['flash'] = "<div class='ribbon-red'>Phải đăng nhập mới sử dụng được chức năng !</div>";
        header('Location:index.php?page=login');
    }
?>

</div>