<?php
class vanphong extends Controller{
	public $tintucmodel;
	public $sanphammodel;
	public $donhangmodel;
	public $thuvienchuoi;
	
	function __construct(){
		

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
		
	}
	
	function chao($a=false){
		//xử lý thuật toán
	}

	function mangdatacodinh(){
		//lấy data chung từ core/Controller.php 
		$mangdata=$this->data();

		//tùy biến điều chỉnh
		$mangdata['vanphong']=$this->model('vanphongmodel')->selecta();
		return $mangdata;	
	}

	function loadvanphong(){
		$id=$_POST['id'];
		$ob=json_decode($this->model('vanphongmodel')->where("id=$id"));
?>
			<div class="text-dark fw-bold mb-1 fs-5 text-uppercase">
				<?php echo $ob[0]->name; ?>
			</div>
			<div class="mb-1">
				<i class="bi bi-geo-alt-fill text-danger"></i> Địa chỉ: <?php echo $ob[0]->diachi; ?>
			</div>
			<div class="mb-1">
				<i class="bi bi-telephone-fill text-danger"></i> Hotline: <?php echo $ob[0]->hotline; ?>
			</div>


<?php
		
	}


}
?>
