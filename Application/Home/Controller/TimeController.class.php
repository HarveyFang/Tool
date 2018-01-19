<?php
namespace Home\Controller;
use Think\Controller;
class TimeController extends Controller {
    public function index(){
    	$now_timestamp 	= time();
    	$now_datetime 	= date("Y-m-d H:i:s");
    	$this->assign("now_timestamp",$now_timestamp);
    	$this->assign("now_datetime",$now_datetime);

    	$this->display("index");
    }

    public function ajax_timestamp_to_datetime(){
    	$dataP = I("post.");
    	$return = '';
    	if(empty($dataP['timestamp'])){
    		$return = 'Error';
    		$this->ajaxReturn($return);
    	}else{
	    	$return = date("Y-m-d H:i:s",$dataP['timestamp']);
	    	if($return){
	    		$this->ajaxReturn($return);
	    	}else{
    			$return = 'Error';
	    		$this->ajaxReturn($return);
	    	}
    	}
    }
}