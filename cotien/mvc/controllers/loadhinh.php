<?php
class loadhinh extends Controller{
	
	function __construct(){

	}
	
	function chao(){
		$this->dangky();
	}
	
	function mangdatacodinh(){
		$mangdata=array(			
			'menu1'=>$this->menumodel->whereod('level=1','rank'),
			'menu2'=>$this->menumodel->whereod('level=2','rank'),
			'cauhinh'=>$this->configurationmodel->select(),
			'matheme'=>json_encode($this->matheme),
			'dm'=>json_encode($this->dm),
		);

		//tuy bien
		$mangdata['tailieutc']=$this->tailieumodel->getpagerod(1,4);
		$mangdata['quangcaor']=$this->quangcaomodel->quangcaor();
		$mangdata['testonline']=$this->testonlinemodel->select();		
		$mangdata['tintucf']=$this->tintucmodel->tintucf();		
	
		return $mangdata;
	}

	
	function loada(){
		require "mvc/views/plugin/ajax/a.php";
		
	}
	
	function loadb(){
		require "mvc/views/plugin/ajax/b.php";
		
	}
}
?>