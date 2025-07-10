<?php
class test extends Controller{
	
	public $datamodel;

	//tuy bien

	function __construct(){
		
		//tuy bien
		
	}
	
	function chao (){
		$this->statistical();
	}
	
	function thunghiem(){
		// date_default_timezone_set('Asia/Ho_Chi_Minh');
		$time=time();
		echo $time.'<br>';
		echo date('Y-m-d H:i:s').'<br>';
		$ngay=strtotime(date('Y-m-d',time()).'0:0:0');
		echo $ngay.'<br>';
		$a=60*60;
		$gio=($time-$ngay)/$a;
		echo $gio;
		

	}

	
}
?>