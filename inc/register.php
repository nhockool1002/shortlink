<div class="register" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(!isset($_SESSION['user'])){
?>
    <?php 
        if(isset($_SESSION['flash'])){
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
    ?>
    <form method="POST" action="exe/enf-register.php">
        <label>Tên đăng nhập</label> <br><input type="text" name="username" required><br>
        <label>Mật khẩu</label> <br><input type="password" name="password" required><br>
        <label>Nhập lại mật khẩu</label> <br><input type="password" name="repass" required><br>
        <label>Email</label> <br><input type="email" name="email" required><br>
        <br>
        <button type="submit" name="submit">Đăng ký</button>
    </form>
<?php
    }else{
        header('Location:index.php');
    }
?>
</div>