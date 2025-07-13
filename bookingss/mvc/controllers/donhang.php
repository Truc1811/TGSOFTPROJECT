<?php
class donhang extends Controller
{

	function __construct()
	{

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');

	}

	function chao($id = false)
	{
		if (@$id) {
			$this->chitietdonhang();
		} else {
			$mang = $this->data();
			$mang['page'] = json_encode('theme/' . $this->matheme . '/donhang/listdonhang');
		}

		//goi views
		$this->view('login', $mang);
	}

	function listdonhang($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/donhang/listdonhang');
		//goi views
		$this->view('login', $mang);
	}
	function chitietdonhang($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/donhang/chitietdonhang');
		//goi views
		$this->view('login', $mang);
	}

	function choxacnhan($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/donhang/choxacnhan');
		//goi views
		$this->view('login', $mang);
	}

		function daxacnhan($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/donhang/daxacnhan');
		//goi views
		$this->view('login', $mang);
	}

		function dahoanthanh($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/donhang/dahoanthanh');
		//goi views
		$this->view('login', $mang);
	}








}
?>