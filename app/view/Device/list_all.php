<div id="content_col1">
    <a href="<?php echo _WEB_ROOT ?>/Device/search/camera">Camera</a>
    <a href="<?php echo _WEB_ROOT ?>/Device/search/detector">Cảm biến</a>
</div>
<div id="content_col2">
    <div class="directory">
        <a href="http://localhost/BTL/Device">Thiết bị</a>
        <?php
        if(isset($search_type)){
            echo ' > '.'<a href="javascript:void(0)">'.ucfirst($search_type).'</a>';
        }
        ?>
    </div>
    <div id="product_table">
    <?php
    $output = '';
    
    $count = 0;
    $max_in_row = 4;
    if(mysqli_num_rows($query)>0){
        while($rows = mysqli_fetch_array($query)){
            if($count == 0) $output .= '<div class="product_row">';
            $output .= '
                <a class="product" href="'._WEB_ROOT.'/Device/detail/'.$rows['id'].'" >
                    <div class="product_img">
                        <img src="'._WEB_ROOT.'/app/images/'.$rows['img'].'">
                    </div>
                    <div class="product_name">
                        <p>'.$rows['name'].'</p>
                    </div>
                    <div class="product_price">
                        <p>'.$rows['price'].' đ</p>
                    </div>
                </a>';
            $count++;
            if($count == $max_in_row){
                $output .= '</div>';
                $count = 0;
            }
        }
        if($count > 0){
            $output .= '</div>';
        }
    }
    echo $output;
    ?>
    </div>
</div>
<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Device_list_all.css">
<script src="<?php echo _WEB_ROOT ?>/app/view/scripts/Device_list_all.js"></script>