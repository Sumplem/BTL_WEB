<?php
class Device extends Controller{
    private $device;
    private $data;

    function __construct(){
        $this->device = $this->model('DeviceModel');
        $this->data['content'] = 'Device/list_all';
    }

    function index(){
        $this->data['content'] = 'Device/list_all';
        if(isset($_SESSION['login'])){
            if($_SESSION['type']=='admin'){
                $this->data['content'] = 'Admin/device_edit';
            }
        }
        $this->data['sub_content']['query'] = $this->device->getDeviceList();
        $this->render('Layout/Main',$this->data);
    }

    function search($type){
        $this->data['content'] = 'Device/list_all';
        $this->data['sub_content']['query'] = $this->device->getDeviceList($type);
        $this->data['sub_content']['search_type'] = $type;
        $this->render('Layout/Main',$this->data);
    }

    function detail($id = 0){
        $this->data['content'] = 'Device/detail';
        $this->data['sub_content']['query'] = $this->device->getDevice($id);
        $this->render('Layout/Main',$this->data);
    }

    function add_form(){
        $this->data['content'] = 'Admin/device_add_form';
        $this->render('Layout/Main',$this->data);
    }

    function add(){
        $resp = new Response();
        $request = new Request();
        $data['info'] = $request->getData();
        $data['img'] = $_FILES['img'];
        $data['sub_img'] = $_FILES['sub_img'];
        if($this->device->validate($data)){
            $con = new DataBase();
            $con = $con->connectDB();

            $name = $data['info']['name'];
            $type = $data['info']['type'];
            $price = $data['info']['price'];
            $quantity = $data['info']['quantity'];
            $description = $data['info']['description'];

            $img = $data['img']['name'];
            $sub_img = '';
            while(file_exists('app/images/'.$img)){
                $img_name = substr($img,0,strpos($img, ".") - 1);
                $img_type = substr($img, strpos($img, ".") + 1);
                $img = $img_name.rand(0,99).'.'.$img_type;
            }
            move_uploaded_file($_FILES["img"]["tmp_name"],'app/images/'.$img);
            $count = 0;
            foreach($data['sub_img']['name'] as $sub_img_name){
                while(file_exists('app/images/'.$sub_img_name)){
                    $img_name = substr($img,0,strpos($sub_img_name, "."));
                    $img_type = substr($img, strpos($sub_img_name, ".") + 1);
                    $sub_img_name = $img_name.rand(0,99).'.'.$img_type;
                }
                move_uploaded_file($_FILES["sub_img"]["tmp_name"][$count],'app/images/'.$sub_img_name);
                $sub_img .= '/'.$sub_img_name;
                $count++;
            }
            $path = "INSERT INTO device(name,type,price,quantity,description,img,sub_img) VALUES ('$name','$type',$price,'$quantity','$description','$img','$sub_img')";
            mysqli_query($con,$path);
            $path = "SELECT MAX(id) as id FROM device LIMIT 1";
            $id = mysqli_fetch_array(mysqli_query($con,$path))['id'];
            $resp->redirect('Device/detail/'.$id);
        }else{
            $resp->redirect('Device/add_form');
        }
    }

    function delete($id = 0){
        $resp = new Response();
        if(isset($_SESSION['login'])){
            if($_SESSION['type']=='admin'){
                $con = new DataBase();
                $con = $con->connectDB();
                $query = mysqli_query($con,"DELETE FROM device WHERE id = $id LIMIT 1");
                $resp->redirect('Device');
                exit;
            }
        }else{
            $resp->redirect('Device');
        }
        
    }

}
?>