<div class="setup" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(!isset($_SESSION['user'])){
        $_SESSION['flash'] = "<div class='ribbon-red'>Bạn phải đăng nhập mới cài đặt hệ thống</div>";
        header('Location:index.php?page=login')
?>
    
<?php
    }else{
?>      <?php echo $_SESSION['id']; ?>
        <div class='ribbon-blue'>Cài đặt API và Chọn hệ thống Link</div>
        <form>
        <label> Tocdo.in </label> <br>
        <input type="text" name="tocdo"> <br>
        <label> 123Links </label> <br>
        <input type="text" name="123link"> <br>
        <label> MegaURL </label> <br>
        <input type="text" name="megaurl"> <br>
        <hr>
        <label> Chọn hệ thống hoạt động : </label> <br>
        <select class="choose-system" style="width:150px;">
            <?php
            $sql = "SELECT * FROM service";
            $rows = $conn->query($sql);
            foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name_service']; ?></option>
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