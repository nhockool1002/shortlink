<div class="login" style="width:100%;text-align:center;padding-bottom:10px;">
<?php
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        header('Location:index.php');
    }
    else{
        header('Location:index.php');
    }
?>

</div>