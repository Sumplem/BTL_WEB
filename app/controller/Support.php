<?php
class Support extends Controller{
    private $support;
    private $data;

    function __construct(){
        $this->support = $this->model('SupportModel');
        $this->data['content'] = 'Support/list_all';
        $this->data['sub_content'][] = '';
    }

    function index(){
        $this->data['content'] = 'Support/list_all';
        $this->data['sub_content']["qna"] = $this->support->getQNA();
        $this->render('Layout/Main',$this->data);
    }


}
?>