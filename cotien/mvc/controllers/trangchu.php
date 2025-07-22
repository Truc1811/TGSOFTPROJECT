<?php
class trangchu extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('client/trangchu');
		

		//goi views
		$this->view('web',$mang);	
	}
	function logout()
	{
		setcookie('khachhang', 'xoa', time() - 86400, "/", "", 0);
		setcookie('phanloai', 'xoaphanloai', time() - 86400, "/", "", 0);
		setcookie('xacminh', 'xoaxacminh', time() - 86400, "/", "", 0);
		header("location:" . $this->dm . "login "); // tự nhảy về trang login
	}


}
?>
