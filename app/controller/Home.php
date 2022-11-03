<?php
class Home extends Controller{
    private $home;
    private $data;

    function __construct(){
        $this->home = $this->model('HomeModel');
        $this->data['content'] = 'Home/index';
    }

    function index(){
        $this->data['content'] = 'Home/index';
        $this->data['sub_content']['newcamera'] = $this->home->getNewProduct('camera');
        $this->data['sub_content']['newdetector'] = $this->home->getNewProduct('detector');
        $this->render('Layout/Main',$this->data);
    }

}
?>