<?php
class dangtin extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('plugin/dangtin/dangtin');

		//goi views
		$this->view('web',$mang);	
	}


}
?>
