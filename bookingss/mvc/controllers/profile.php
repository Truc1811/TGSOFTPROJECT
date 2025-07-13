<?php
class profile extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('plugin/profile/profile');

		//goi views
		$this->view('web',$mang);	
	}


}
?>
