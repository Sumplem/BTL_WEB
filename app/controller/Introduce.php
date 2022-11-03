<?php
class Introduce extends Controller{
    function index(){
        $data['content'] = 'Introduce/index';
        $this->render('Layout/Main',$data);
    }
}
?>