<?php
class logon extends Controller
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
		$mang['page'] = json_encode('client/logon');
		//goi views
		$this->view('login', $mang);
	}
	function dangky()
	{
		if (@$_POST['submit']) {
			$kq = $this->model('usersmodel')->add();
			$data = $this->data();
			$data['kq'] = $kq;
			if ($kq) {
				header("location:" . $this->dm . "thongbao/success");
			} else {
				$data = $this->data();
				$data['page'] = json_encode('client/success');
			}
			$this->view('web', $data);
		}
	}

	function kiemtraemail()
	{
		$kte = $_POST['kte'];
		$setemail = json_decode($this->model('usersmodel')->wherec("email='$kte'"));
		if($setemail>0){
			echo 'true';
		}else{
			echo 'fasle';
		}
	}
}
