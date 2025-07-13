<?php
class detail extends Controller{
	
	function __construct(){
		
		// tuy bien
		//$this->blogmodel=$this->model('blogmodel');
		
	}
	
	function chao($a=false){
		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('plugin/detail/detail');
		$mang['blog']=$this->model('blogmodel')->selecta();

		//goi views
		$this->view('web',$mang);	
	}


}
?>
