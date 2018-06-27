<div class="create" style="width:100%;text-align:center;padding-bottom:10px;">
    <?php
        $hash = $_GET['get'];
        $sql = "SELECT name_link,linkdownload,linkorigin,username,name_service,name_url_api,user.service_id as service,user.id as user_id FROM origin_link INNER JOIN user ON origin_link.user_id = user.id INNER JOIN service ON user.service_id = service.id WHERE hash= '$hash'";
        $rows = $conn->query($sql);
        if($rows->num_rows == 0){
            echo "<h1>Không tồn tại liên kết này vui lòng kiểm tra lại</h1>";
        }else{
            $name = "";
            $origin = "";
            $url_api = "";
            $service = 0;
            $user_id = "";
            $apikey = "";
            $linkorigin = "";
            foreach($rows as $row){
                $name = $row['name_link'];
                $origin = $row['linkdownload'];
                $url_api = $row['name_url_api'];
                $service = $row['service'];
                $user_id = $row['user_id'];
                $linkorigin = $row['linkorigin'];
                if($service == 1){
                    $ssl = "SELECT tocdo_api as apikey FROM token_api WHERE user_id = '$user_id'";
                }
                if($service == 2){
                    $ssl = "SELECT 123link_api as apikey FROM token_api WHERE user_id = '$user_id'";
                }
                if($service == 3){
                    $ssl = "SELECT megaurl_api as apikey FROM token_api WHERE user_id = '$user_id'";
                }
                $rz = $conn->query($ssl);
                foreach($rz as $one){
                    $apikey = $one['apikey'];
                }
            }
?>
<h2><?php echo $name; ?></h2>
<?php $url_finally = $url_api.'api='.$apikey.'&url='.$origin; ?>
<a class="green-button" href="<?php echo $linkorigin; ?>" target="__blank">XEM KHÓA HỌC</a><a class="orange-button" href="<?php echo $url_finally; ?>" target="__blank">TẢI KHÓA HỌC</a>
<?php
        }
    ?> 
</div>