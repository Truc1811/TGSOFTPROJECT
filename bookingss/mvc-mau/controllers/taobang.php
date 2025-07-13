<?php
class taobang extends Controller
{


	function __construct()
	{
		// $this->usermodel=$this->model('usermodel');
	}

	function chao()
	{
		//$this->bang('configurationbang')->taobang();
		//$this->bang('userbang')->taobang();
		//$this->bang('customerbang')->taobang();
		//$this->bang('categorybang')->taobang();
		//$this->bang('blogbang')->taobang();
		//$this->bang('faqsbang')->taobang();
		//$this->bang('servicebang')->taobang();
		$this->bang('service_detailbang')->taobang();
		//$this->bang('ordersbang')->taobang();
		//$this->bang('order_detailbang')->taobang();
	}

	function reset()
	{
		$this->bang('service_detailbang')->xoabang();
		$this->chao();
	}

	function xoakhoa()
	{
		$this->bang('servicebang')->xoakhoangoai();
	}
	function themcot()
	{
		$this->bang('customerbang')->addcot();
	}

	function data()
	{
		$this->bang('customerbang')->add_record();
	}


	function themkhoa()
	{
		//$this->bang('blogbang')->themkhoangoai();
		//$this->bang('faqsbang')->themkhoangoai();
		//$this->bang('servicebang')->themkhoangoai();
		//$this->bang('ordersbang')->themkhoangoai();
		$this->bang('order_detailbang')->themkhoangoai();
	}
}
