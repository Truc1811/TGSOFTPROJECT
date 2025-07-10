<?php
class trangchu extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('plugin/trangchu/trangchu');
		$mang['thongtintaisan']=$this->model('thongtintaisanmodel')->selecta();

		//goi views
		$this->view('web',$mang);	
	}


}
?>
