<div class="update" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['id'];
        $idpost = $_GET['id'];
?>
    <?php 
        if(isset($_SESSION['flash'])){
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
    ?>
    <?php 
        $sql = "SELECT * FROM origin_link WHERE id = '$idpost' AND user_id = '$user_id'";
        $rows = $conn->query($sql);
        foreach($rows as $row){
    ?>
    <form method="POST" action="exe/enf-update.php?id=<?php echo $row['id']; ?>">
        <label>Tiêu đề</label> <br><input type="text" name="title" required value="<?php echo $row['name_link']; ?>"><br>
        <label>Link gốc</label> <br><input type="text" name="linkorigin" value="<?php echo $row['linkorigin']; ?>"><br>
        <label>Link tải</label> <br><input type="text" name="linkdown" value="<?php echo $row['linkdownload']; ?>" required><br>
        <br>
        <button type="submit" name="submit">SỬA</button>
    </form>
        <?php }
    }else{
        header('Location:index.php?page=login');
    }
?>
</div>