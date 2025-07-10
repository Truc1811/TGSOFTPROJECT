<?php
class login extends Controller
{

	function __construct()
	{

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');

	}

	function chao($a = false)
	{
		//gọi data
		$mang = $this->data();
		$mang['page'] = json_encode('theme/mau/customer/login');
		

		//goi views
		$this->view('login', $mang);
	}

	function check_login()
	{
		if (@$_POST['submit']) {
			$user = $_POST['email'];
			$password = $_POST['password'];
			$ob = json_decode($this->model('customermodel')->where("email='$user'"));
			if (password_verify($password, $ob[0]->password)) {
				setcookie('admin', $user, time() + 86400, "/", "", 0);
				header("location:" . $this->dm . "customer");
			} else {
				header("location:" . $this->dm . "thongbao/erros/erros404.php");
			}
		} else {
			header("location:" . $this->dm . "login/customer");
		}
	}
	function customer($a = false)
	{
		//gọi data
		if (@$_COOKIE['admin']) {
			header("location:" . $this->dm . "customer");
		} else {
			$mang = $this->data();
			$mang['page'] = json_encode('theme/mau/customer/login');
			//goi views
			$this->view('login', $mang);
		}
	}
}
