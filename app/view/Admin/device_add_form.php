<h2>Thêm sảm phẩm mới</h2>
<form action="<?php echo _WEB_ROOT;?>/Device/add" method="post" enctype="multipart/form-data" id="form">
    <div>
        <label for="name">Tên sản phẩm:</label><br>
        <input type="text" id="name" name="name" required><br>
    <div>

    <div>
        <label for="type">Loại:</label><br>
        <select id="type" name="type" required>
            <option value="camera">Camera</option>
            <option value="detector">Cảm biến</option>
        </select><br>
    <div>

    <div>
        <label for="price">Giá:</label><br>
        <input type="number" id="price" name="price" required><br>
    <div>

    <div>
        <label for="quantity">Số lượng:</label><br>
        <input type="number" id="quantity" name="quantity" required><br>
    <div>

    <div>
        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" rows="10" cols="30"></textarea><br>
    <div>

    <div>
        <label for="img">Hình ảnh chính:</lable><br>
        <input type="file" id="img" name="img" required><br>
    <div>
    <div>
        <label for="sub_img">Hình ảnh phụ:</lable><br>
        <input type="file" multiple="multiple" id="sub_img" name="sub_img[]"><br>
    <div>
    <button type="submit">Thêm</button>
</form>


<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/app/view/styles/Form.css">
<script src="<?php echo _WEB_ROOT ?>/app/view/scripts/Device_add_form.js"></script>