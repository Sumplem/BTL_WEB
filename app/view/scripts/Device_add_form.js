const regex_name = /^[a-zA-Z0-9 ]{2,30}$/;
const regex_number = /^\d+$/;
const regex_extensions =/(\.jpg|\.jpeg|\.png)$/i;

const Name = document.getElementById('name');
const type = document.getElementById('type');
const price = document.getElementById('price');
const quantity = document.getElementById('quantity');
const description = document.getElementById('description');
const img = document.getElementById('img');
const sub_img = document.getElementById('sub_img');

const form = document.getElementById('form');

form.onsubmit = function(e){
    var bool = false;
    var checks = false;
	var message = "";
	if(!regex_name.test(Name.value)){
		message += "-Sai tên!\n";
		bool = true;
	}
    if(type.value !== 'camera' && type.value !== 'detector'){
		message += "-Xin hãy chọn loại là camera hoặc cảm biến!\n";
		bool = true;
	}
	if(!regex_number.test(price.value)){
		message += "-Giá phải là 1 số!\n";
		bool = true;
	}
    if(!regex_number.test(quantity.value)){
		message += "-Số lượng phải là 1 số!\n";
		bool = true;
	}
    if(!regex_extensions.test(img.value)){
		message += "-Ảnh chính phải là file jpg, jpeg, png!\n";
		bool = true;
	}
    for(let i=0;i<sub_img.files.length;i++){
        if(!regex_extensions.test(sub_img.files[i].name)){
            checks = true;
        }
    }
    if(checks){
        message += "-Hình ảnh phụ phải là file jpg, jpeg, png!\n";
        bool = true;
    }
	if(bool){
		e.preventDefault();
		window.alert(message);
        return false;
	}
	window.alert("Thêm thành công!");
    return true;
}