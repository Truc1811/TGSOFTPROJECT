<?php
class taisan extends Controller
{

	function __construct()
	{

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');

	}

	function chao($id = false)
	{
		if (@$id) {
			$this->taisan_chitiet();
		} else {
			echo 'trang list';
		}
	}

	function taisan_chitiet()
	{
		$email = $_COOKIE['admin'];
		$customerData = json_decode($this->model('customermodel')->where("email='{$email}'"));
		$mang = $this->data();
		$mang['cus_email'] = $customerData[0]->email ?? '';
		$mang['page'] = json_encode('theme/' . $this->matheme . '/taisan/taisandetail');
		$mang['service_detail'] = $this->model('service_detailmodel')->selecta();
		$mang['service_4'] = $this->model('service_detailmodel')->join_4_bang();
		//goi views
		$this->view('web', $mang);
	}

	function dangtaisan()
	{
		if (@$_POST['submit']) {
			$kq = $this->model('servicemodel')->add();
			$data = $this->data();
			$data['kq'] = $kq;
			if ($kq) {
				$data = $this->data();
				header("location:" . $this->dm . "customer ");
			} else {
				$data = $this->data();
				$data['page'] = json_encode('theme/mau/thongbao/erros404');
			}
			$this->view('web', $data);
		}
	}

	function dangtaisan_chitiet()
	{
		if (@$_POST['submit']) {
			$kq = $this->model('service_detailmodel')->add();
			$data = $this->data();
			$data['kq'] = $kq;
			if ($kq) {
				$data = $this->data();
				header("location:" . $this->dm . "customer ");
			} else {
				$data = $this->data();
				$data['page'] = json_encode('theme/mau/thongbao/erros404');
			}
			$this->view('web', $data);
		}
	}
}
