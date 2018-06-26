<div class="setup" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(!isset($_SESSION['user'])){
        $_SESSION['flash'] = "<div class='ribbon-red'>Bạn phải đăng nhập mới cài đặt hệ thống</div>";
        header('Location:index.php?page=login')
?>
    
<?php
    }else{
?>      

        <?php
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM token_api WHERE user_id = '$id'";
        $rows = $conn->query($sql);
        ?>
        <div class='ribbon-blue'>Cài đặt API và Chọn hệ thống Link</div>
        <?php
        if(isset($_SESSION['flash'])){
                echo $_SESSION['flash'];
                unset($_SESSION['flash']);
        }
        ?>
        <form method="POST" action="exe/enf-setup.php">
        <?php
        foreach($rows as $row){
        ?>
        <label> Tocdo.in </label> <br>
        <input type="text" name="tocdo" value="<?php echo $row['tocdo_api']; ?>"> <br>
        <label> 123Links </label> <br>
        <input type="text" name="123link" value="<?php echo $row['123link_api']; ?>"> <br>
        <label> MegaURL </label> <br>
        <input type="text" name="megaurl" value="<?php echo $row['megaurl_api']; ?>"> <br>
        <?php
        }
        ?>
        <?php
        $service = 0;
        $sql = "SELECT service.id as id FROM user INNER JOIN service ON user.service_id = service.id WHERE user.id = '$id'";
        $rows = $conn->query($sql);
        foreach($rows as $row){
            $service = $row['id'];
        }
        ?>
        <hr>
        <label> Chọn hệ thống hoạt động : </label> <br>
        <select class="choose-system" style="width:150px;" name="system">
            <?php
            $sql = "SELECT * FROM service";
            $rows = $conn->query($sql);
            foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $service){ echo 'selected'; } ?>><?php echo $row['name_service']; ?></option>
            <?php
            }
            ?>
        </select>
        <hr>
        <button type="submit" name="submit">Lưu</button>
        </form>
<?php
    }
?>
</div>