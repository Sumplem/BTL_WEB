<?php
class Software extends Controller{
    private $Software;
    private $data;

    function __construct(){
        $this->Software = $this->model('SoftwareModel');
        $this->data['content'] = 'Software/list_all';
        $this->data['sub_content'][] = '';
    }

    function index(){
        $this->data['content'] = 'Software/list_all';
        $this->data['sub_content']["software"] = $this->Software->getSoftware();
        $this->render('Layout/Main',$this->data);
    }
}
?>