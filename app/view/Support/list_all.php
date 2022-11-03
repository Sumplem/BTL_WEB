<div id="Support">
    <h2>HỎI VÀ TRẢ LỜI</h2>
    <?php 
    $counter = 1;
    if(mysqli_num_rows($qna)>0){
        while($rows = mysqli_fetch_array($qna)){
            echo '
            <div class="qna">
                <a class="questions" href="javascript:void(0)">'.$counter.'. '.$rows["questions"].'</a>
                <div class="answers">'.$rows["answers"].'</div>
            </div>';
            $counter++;
        }
    }
    ?>
</div>

<script src="<?php echo _WEB_ROOT ?>/app/view/scripts/Support_list_all.js"></script>
<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Support_list_all.css">