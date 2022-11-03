<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BTL</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Main.css">
</head>
<body>
    <header>
        <a class="logo" href="<?php echo _WEB_ROOT ?>">SAFE HOME</a>
        <ul id="toggle_menu">
            <li><a href="<?php echo _WEB_ROOT ?>">Trang chủ</a></li>
            <li><a href="<?php echo _WEB_ROOT ?>/Device">Thiết bị</a></li>
            <li><a href="<?php echo _WEB_ROOT ?>/Software">Phần mềm</a></li>
            <li><a href="<?php echo _WEB_ROOT ?>/Introduce">Giới thiệu</a></li>
            <li><a href="<?php echo _WEB_ROOT ?>/Support">Hỗ trợ</a></li>
            <?php
            if(isset($_SESSION['login'])){
                echo '<li><a href="'._WEB_ROOT.'/Login/logout">Đăng xuất</a></li>';
            }else{
                echo '<li><a href="'._WEB_ROOT.'/Login">Đăng nhập</a></li>';
            }
            ?>
        </ul>
        <div id="toggle_btn"></div>
    </header>
    <div id="content">
        <?php
        if(isset($sub_content)){
            $this->render($content,$sub_content);
        }else{
            $this->render($content);
        } 
        ?>
    </div>
    <script src="<?php echo _WEB_ROOT ?>/app/view/scripts/Main.js"></script>
</body>
</html>