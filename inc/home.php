<div class="home" style="width:100%;text-align:center;padding-bottom:10px;">
    <?php 
        if(isset($_SESSION['flash'])){
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
    ?>
    <h1>Trang chủ</h1>
</div>