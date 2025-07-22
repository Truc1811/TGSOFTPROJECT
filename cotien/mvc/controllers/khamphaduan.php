<?php
class khamphaduan extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('client/khamphaduan');
		

		//goi views
		$this->view('web',$mang);	
	}


}
?>
