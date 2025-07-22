<?php
class thongbao extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('client/erros404');
		

		//goi views
		$this->view('web',$mang);	
	}

	function success(){
		$mang=$this->data();
		$mang['page']=json_encode('client/success');
		

		//goi views
		$this->view('web',$mang);
	}


}
?>
