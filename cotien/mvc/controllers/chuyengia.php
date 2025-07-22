<?php
class chuyengia extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('client/chuyengia');
		

		//goi views
		$this->view('web',$mang);	
	}


}
?>
