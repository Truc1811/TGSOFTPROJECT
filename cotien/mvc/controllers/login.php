<?php
class login extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('client/login');
		

		//goi views
		$this->view('login',$mang);	
	}

	function check_login()
	{
		if (@$_POST['submit']) {
			$user = $_POST['email'];
			$password = $_POST['password'];
			$ob = json_decode($this->model('usersmodel')->where("email='$user'"));
			$phanloai=$ob[0]->role;
			if (password_verify($password, $ob[0]->password)) {
				setcookie('khachhang', $user, time() + 86400, "/", "", 0);
				setcookie('phanloai', $phanloai, time() + 86400, "/", "", 0);
				header("location:" . $this->dm . "admin/tongquan");
			} else {
				header("location:" . $this->dm . "thongbao/erros404");
			}
		} else {
			header("location:" . $this->dm . "login");
		}
	}


}
?>
