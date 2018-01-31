<?php
namespace Home\Controller;
use Think\Controller;
class Md5Controller extends Controller {
    public function index(){
    	$this->display("index");
    }

    public function ajax_md5(){
    	$dataP = I("post.");
    	$return = '';
    	if(isset($dataP['content'])){
            $return = md5($dataP['content']);
            $this->ajaxReturn($return);
    	}else{
            $return = 'Error';
            $this->ajaxReturn($return);
    	}
    }
}