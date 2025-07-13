<?php
class thongbao extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('theme/mau/thongbao/erros/erros404');

		//goi views
		$this->view('login',$mang);	
	}
	function thanhcong($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('theme/mau/thongbao/thanhcong/thanhcong');

		//goi views
		$this->view('login',$mang);	
	}


}
?>
