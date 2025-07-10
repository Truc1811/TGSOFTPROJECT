<?php
class danhsachtaisan extends Controller
{

	function __construct()
	{

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');

	}

	function chao($id = false)
	{
		if (@$id) {
			$this->danhsach_taisan();
		} else {
			echo 'trang list';
		}
	}

	function danhsach_taisan()
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/taisan/danhsachtaisan');
		$mang['service_detail'] = $this->model('service_detailmodel')->selecta();
		//$datacus = json_decode($mang['service']);
		echo "<pre>";
		print_r($mang['service_detail']);
		 echo "</pre>";
		
		// $mang['thongtintaisan']=$this->model('khachhangmodel')->selecta();

		//goi views
		$this->view('web', $mang);
	}
}
