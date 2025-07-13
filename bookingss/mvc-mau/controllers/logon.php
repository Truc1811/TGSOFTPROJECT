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
		$mang['page'] = json_encode('theme/mau/customer/logon');
		//goi views
		$this->view('login', $mang);
	}

	function dangky()
	{
		if (@$_POST['submit']) {
			$kq = $this->model('customermodel')->luu_dang_ky();
			$data = $this->data();
			$data['kq'] = $kq;
			if ($kq) {
				$data = $this->data();
				$data['page'] = json_encode('theme/mau/thongbao/thanhcong/success');
			} else {
				$data = $this->data();
				$data['page'] = json_encode('theme/mau/thongbao/erros/erros404');
			}
			$this->view('web', $data);
		}
	}
	function kiemtrasdt()
	{
		$kt = $_POST['kt'];
		$setsdt = json_decode($this->model('customermodel')->wherec("phone=$kt"));
		if($setsdt>0){
			echo 'true';
		}else{
			echo 'fasle';
		}
		
	}

	function kiemtraemail()
	{
		$kte = $_POST['kte'];
		$setemail = json_decode($this->model('customermodel')->wherec("email='$kte'"));
		if($setemail>0){
			echo 'true';
		}else{
			echo 'fasle';
		}
	}
}
