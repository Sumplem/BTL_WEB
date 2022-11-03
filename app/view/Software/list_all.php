<div id="software" >
    <h2 >CHỌN GÓI PHÙ HỢP VỚI BẠN</h2>
    <div class="software_display">
        <?php 
        if(mysqli_num_rows($software)>0){
            while($rows = mysqli_fetch_array($software)){
                echo '
                <div>
                    <a class="software_plan" href="">
                        <div class="software_name">'.$rows["name"].'</div>
                        <div class="software_price">'.$rows["price"].'đ/'.$rows["duration"].'</div>
                    </a>
                </div>';
            }
        }
        ?>
    </div>
</div>

<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Software_list_all.css">