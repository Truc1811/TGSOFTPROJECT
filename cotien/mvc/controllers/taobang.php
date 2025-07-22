<?php
class taobang extends Controller
{


	function __construct()
	{
		// $this->usermodel=$this->model('usermodel');
	}

	function chao()
	{
		
		$this->bang('investmentsbang')->taobang();
		//$this->bang('kycsbang')->taobang();
		//$this->bang('loansbang')->taobang();
		//$this->bang('transactionsbang')->taobang();
		//$this->bang('usersbang')->taobang();
		//$this->bang('walletsbang')->taobang();
	}

	function reset()
	{
		$this->bang('usersbang')->xoabang();
		$this->chao();
	}

	function xoakhoa()
	{
		$this->bang('service_detailbang')->xoakhoangoai();
	}
	function themcot()
	{
		$this->bang('ordersbang')->addcot();
	}
	function themtrunguni()
	{
		$this->bang('kycsbang')->themtrung();
	}

	function data()
	{
		$this->bang('usersbang')->add_record();
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
