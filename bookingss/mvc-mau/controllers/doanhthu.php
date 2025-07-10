<?php
class doanhthu extends Controller
{

	function __construct()
	{

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');

	}

	function chao($id = false)
	{
		if (@$id) {
			$this->chitietdoanhthu();
		} else {
			$mang = $this->data();
			$mang['page'] = json_encode('theme/' . $this->matheme . '/tongquan');
		}

		//goi views
		$this->view('login', $mang);
	}

	function tongquan($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/doanhthu/tongquan');
		//goi views
		$this->view('login', $mang);
	}
	function doanhthu($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/doanhthu/doanhthu');
		//goi views
		$this->view('login', $mang);
	}

	function choxacnhan($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/doanhthu/choxacnhan');
		//goi views
		$this->view('login', $mang);
	}

		function daxacnhan($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/doanhthu/daxacnhan');
		//goi views
		$this->view('login', $mang);
	}

		function dahoanthanh($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/doanhthu/dahoanthanh');
		//goi views
		$this->view('login', $mang);
	}








}
?>