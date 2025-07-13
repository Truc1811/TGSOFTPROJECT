<?php
class banggia extends Controller{
	
	public $usermodel;
	public $menumodel;
	public $thuonghieumodel;
	public $productmodel;
	public $colormodel;
	
	function __construct(){
		$this->usermodel=$this->model('usermodel');//tạo model
		$this->menumodel=$this->model('menumodel');//tạo model
		$this->thuonghieumodel=$this->model('thuonghieumodel');//tạo model
		$this->productmodel=$this->model('productmodel');//tạo model
		$this->colormodel=$this->model('colormodel');//tạo model
		//$this->usermodel=parent::model('usermodel');
	}
	
	function loadm(){
		$giatri=$_POST['giatri'];
		$thuonghieu2=json_decode($this->thuonghieumodel->whereod('level=2','rank'));
		$m=array();
		foreach ($thuonghieu2 as $key => $value) {
			if(in_array($giatri,explode(',',$value->father_level))){
				$m[]=$value;
			}
		}
		echo  "<option selected>Please select a brand</option>";
		foreach ($m as $key => $value) {
			// code...
		
	

?>
 <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
<?php	
		}
	}

	function loadma(){
		$id_sp=$_POST['id_sp'];
		$product=json_decode($this->productmodel->selecta());
		$m=array();
		foreach ($product as $key => $value) {
			if(in_array($id_sp,explode(',',$value->thuonghieu))){
				$m[]=$value;
			}
		}
		echo  "<option selected>Please select a product</option>";
		foreach ($m as $key => $value) {
			// code...
		
	

?>
 <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
<?php	
		}
	}



	function load_gia(){
		$id_sp=$_POST['id_sp'];
		$product=json_decode($this->productmodel->where("id=$id_sp"));
		if(count($product)>0){

?>
 	<img class="w-100" src="public/upload/<?php echo $product[0]->image; ?>" alt="">
<?php	
		} else {
			echo 'Sản phẩm không tìm thấy. Vui lòng thử lại';
		}
	}

	function loadmam(){
		$id_sp=$_POST['id_sp'];
		$product=json_decode($this->colormodel->selecta());
		$m=array();
		foreach ($product as $key => $value) {
			if(in_array($id_sp,explode(',',$value->thuonghieu))){
				$m[]=$value;
			}
		}
		echo  "<option selected>Please select a color</option>";
		foreach ($m as $key => $value) {
			// code...
		
	

?>
 <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
<?php	
		}
	}

	function load_giam(){
		$id_sp=$_POST['id_sp'];
		$product=json_decode($this->colormodel->where("id=$id_sp"));
		if(count($product)>0){

?>
 	<img class="w-100" src="public/upload/<?php echo $product[0]->image; ?>" alt="">
<?php	
		} else {
			echo 'Sản phẩm không tìm thấy. Vui lòng thử lại';
		}
	}




}
?>