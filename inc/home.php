<div class="home" style="width:100%;text-align:center;padding-bottom:10px;">
    <?php 
        if(isset($_SESSION['flash'])){
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
    ?>
    <h1>TRANG CHỦ</h1>
    <table style="width:100%" border=0>
        <tr>
            <td style="height:100px;width:25%;background-color:#8f7611;color:white;">
                <?php
                    if(isset($_SESSION['user'])){
                        echo "Xin chào, ".$_SESSION['user'];
                    }
                    else{
                        echo "Bạn chưa đăng nhập";
                    }
                ?>
            </td>
            <td style="height:100px;width:25%;background-color:#1ca51c;color:white;">
            <a href="#" style="color:white;text-decoration:none">Giới thiệu dự án</a>
            </td>
            <td style="height:100px;width:25%;background-color:#5495df;color:white;">
            <a href="#" style="color:white;text-decoration:none">Hướng dẩn sử dụng</a>
            </td>
            <td style="height:100px;width:25%;background-color:#ff5fb6;color:white;">
            <a href="#" style="color:white;text-decoration:none">Tham gia nhóm Data K-ZONE</a>
            </td>
        </tr>
    </table>
</div>