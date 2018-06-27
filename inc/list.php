<div class="list" style="width:100%;text-align:center;padding-bottom:10px;">
<?php 
        if(isset($_SESSION['flash'])){
            echo $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
?>
<?php
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM origin_link WHERE user_id = '$user_id'";
        $rows = $conn->query($sql);
        echo "<table style='width:100%;' border='1'>";
    ?>
        <tr>
        <td style="width:10%;">STT</td>
        <td style="width:70%;">Tên</td>
        <td style="width:20%;">Option</td>
        </tr>
    <?php
        foreach($rows as $row){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><a class="urllist" href="?get=<?php echo $row['hash']; ?>" target="__blank"><?php echo $row['name_link']; ?></a></td>
        <td>[<a href="index.php?page=update&id=<?php echo $row['id']; ?>">Sửa</a>|<a onClick="return confirm('Bạn có chắn chắn xóa link không ?')" href="index.php?page=delete&id=<?php echo $row['id']; ?>">Xóa</a>]</td>
    </tr>
<?php
        }
        echo "</table>";
    }
    else{
        header('Location:index.php?page=login');
    }
?>

</div>