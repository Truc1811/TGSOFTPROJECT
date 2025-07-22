<?php
// thư viện gọi model và view dùng cho các file trong folder controller
class Controller extends Data{
	protected $matheme;
	protected $dm='http://localhost/cotien/';
	public $dataamodel;	
	public $categorymodel;
	public $configurationmodel;
	//public $thongtintaisanmodel;

	//goi model
	function model($model){
		require_once "mvc/models/".$model.".php";
		return new $model;
	}
	
	//goi view
	function view($view,$data){
		require_once "mvc/views/".$view.".php";
	}

	//goi thu vien
	function thuvien($dl){
		require_once "mvc/core/thuvien/".$dl.".php";
		return new $dl;
	}

	function bang($dl){
		require_once "mvc/bang/".$dl.".php";
		return new $dl;
	}

	

	//cấu hình data
	function data(){
		$this->matheme='mau';
		$mangdata=array(
			'matheme'=>json_encode($this->matheme),
			'dm'=>json_encode($this->dm),
			// 'category'=>$this->model('categorymodel')->selectod('number'),			
			// 'category1'=>$this->model('categorymodel')->whereod('level=1','number'),
			// 'category2'=>$this->model('categorymodel')->whereod('level=2','number'),
			// 'category3'=>$this->model('categorymodel')->whereod('level=3','number'),
			//'cauhinh'=>$this->model('configurationmodel')->selecta(),
	
			
		);
		return $mangdata;	
	}

}

?>