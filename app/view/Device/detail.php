<?php
    $object = mysqli_fetch_array($query);
    $sub_img = array_filter(explode('/',$object['sub_img']));
?>

<div class='directory'>
    <a href="<?php echo _WEB_ROOT ?>/Device">Thiết bị</a>
    <?php
    if(isset($object['type'])){
        echo ' > '.'<a href="'._WEB_ROOT.'/Device/search/'.$object['type'].'">'.ucfirst($object['type']).'</a>';
    }
    if(isset($object['name'])){
        echo ' > '.'<a href="javascript:void(0)">'.ucfirst($object['name']).'</a>';
    }
    ?>
</div>
<div id='displayer'>
    <div id='display_img'>
        <div id='main_display'>
            <img src="<?php echo _WEB_ROOT ?>/app/images/<?php echo $object['img'] ?>">
        </div>
        <div id='sub_display'>
            <div><img src="<?php echo _WEB_ROOT ?>/app/images/<?php echo $object['img'] ?>"></div>
            <?php
                foreach($sub_img as $img){
                    echo '<div><img src="'._WEB_ROOT.'/app/images/'.$img.'"></div>';
                }
            ?>
        </div>
    </div>
    <div id='display_info'>
        <h2><?php echo $object['name']?></h2>
        <div id='price'>
            <p>Giá:  </p>
            <p id='price_num'><?php echo $object['price']?>đ</p>
        </div>
        <div id='buy_btn'>
            <a href='<?php
                
            ?>'>MUA NGAY</a>
        </div>
    </div>
</div>
<div id='description'>
    <h2>Đặc điểm</h2>
    <p><?php echo nl2br($object['description']);?><p>
</div>


<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Device_detail.css">
<script src="<?php echo _WEB_ROOT ?>/app/view/scripts/Device_detail.js"></script>