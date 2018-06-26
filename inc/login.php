<div class="login" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(!isset($_SESSION['user'])){
?>
    <?php 
        if(isset($_SESSION['flash'])){
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
    ?>
    <form method="POST" action="exe/enf-login.php">
        <label>Tên đăng nhập</label> <br><input type="text" name="username"><br>
        <label>Mật khẩu</label> <br><input type="password" name="password"><br>
        <br>
        <button type="submit" name="submit">Đăng nhập</button>
    </form>
<?php
    }else{
        echo "<div class='ribbon-red'>Bạn đã đăng nhập rồi !!!</div>";
    }
?>
</div>