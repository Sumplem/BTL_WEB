<h2>Sản phẩm mới</h2>
<div class="new_product">
    <?php
        if(mysqli_num_rows($newcamera)>0){
            $row = mysqli_fetch_array($newcamera);
            echo '
            <a class="product" href="'._WEB_ROOT.'/Device/detail/'.$row["id"].'" >
                <div class="product_img">
                    <img src="'._WEB_ROOT.'/app/images/'.$row["img"].'">
                </div>
                <div class="product_info">
                    <div class="product_name">
                        <p>'.$row["name"].'</p>
                    </div>
                    <div class="product_price">
                        <p>'.$row["price"].'đ</p>
                    </div>
                </div>
            </a>';
        }
        if(mysqli_num_rows($newdetector)>0){
            $row = mysqli_fetch_array($newdetector);
            echo '
            <a class="product" href="'._WEB_ROOT.'/Device/detail/'.$row["id"].'" >
                <div class="product_img">
                    <img src="'._WEB_ROOT.'/app/images/'.$row["img"].'">
                </div>
                <div class="product_info">
                    <div class="product_name">
                        <p>'.$row["name"].'</p>
                    </div>
                    <div class="product_price">
                        <p>'.$row["price"].'đ</p>
                    </div>
                </div>
            </a>';
        }
    ?>
</div>

<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Home_index.css">