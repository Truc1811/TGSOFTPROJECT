<?php
class search extends Controller{
	public $tintucmodel;
	public $sanphammodel;
	public $donhangmodel;
	public $thuvienchuoi;
	
	function __construct(){
		$this->tintucmodel=$this->model('tintucmodel');
		$this->sanphammodel=$this->model('sanphammodel');
		$this->donhangmodel=$this->model('donhangmodel');
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//xử lý thuật toán
		$a=$a?:'khong tim thay';
		$a=$this->thuvien('thuvienchuoi')->khongdau($a);

		//gọi data
		$mang=$this->data();
		$mang['page']=json_encode('plugin/search/viewsearch');
		$mang['dataa']=$this->sanphammodel->search($a);
		$mang['title_name']=json_encode('Kết quả tìm kiếm');

		//goi views
		$this->view('web',$mang);	
	}

	function mangdatacodinh(){
		//lấy data chung từ core/Controller.php 
		$mangdata=$this->data();

		//tùy biến điều chỉnh
		$mangdata['faqs']=$this->faqsmodel->selectque('ORDER BY rank ASC');
		$mangdata['tintuc']=$this->tintucmodel->selecta();
		$mangdata['thuoctinh']=$this->thuoctinhmodel->selectque("ORDER BY rank DESC,name ASC");
		$mangdata['product']=$this->model('productmodel')->selecta();
		$mangdata['tuyendung']=$this->model('tuyendungmodel')->select();
		$mangdata['hoivien']=$this->model('hoivienmodel')->selecta();
		return $mangdata;	
	}

	function timkiem(){
		$mang=json_decode($this->model('tuyendungmodel')->select());
		$mang_loc=array();
		$mang_loc[]=$_POST['a'];
		$mang_loc[]=$_POST['b'];



		$mangdata=$this->mangdatacodinh();
		
		$mangdata['dataa']=$this->locand_thuoctinh($mang,$mang_loc);

		$mangdata['page']=json_encode('plugin/search/viewsearch');
		$mangdata['title_name']=json_encode('Kết quả');
		$mangdata['img_menu']='';
		$mangdata['mot']=json_encode('Quản trị');


		//view
		$this->view('web',$mangdata);

		
	}


}
?>
