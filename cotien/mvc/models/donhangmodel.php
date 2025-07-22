<?php
class donhangmodel extends Controller{
	public $tablename='donhang';
	public $sanphammodel;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$this->sanphammodel=$this->model('sanphammodel');
		$name=$this->thuvienchuoi->lockytu($_POST['name']);
		$diachi=$this->thuvienchuoi->lockytu($_POST['diachi']);
		$email=$this->thuvienchuoi->lockytu($_POST['email']);
		$sodienthoai=$_POST['sodienthoai'];
		$type_payment=$_POST['type_payment'];
		$tinhthanh=$this->thuvienchuoi->lockytu($_POST['tinhthanh']);
		$ghichu=$_POST['ghichu']?:'';
		$ghichu=$this->thuvienchuoi->lockytu($ghichu);
		$time=time();
		$array_product=array();
		$tong=$_SESSION['tonggia'];
		$magiamgia=$_SESSION['magiamgia'];
		foreach ($_SESSION['cart'] as $key => $value) {
			$ob=json_decode($this->sanphammodel->where("id='$key'"));
			$namesp=$ob[0]->name.' '.$ob[0]->color.' '.$ob[0]->size;
			$gia=0;
			if($ob[0]->discount>0){
  			 		$gia=$ob[0]->discount;
  			 } else {
  			 		$gia=$ob[0]->price;
  			 }
			$array_product[]=$key.','.$namesp.','.$value.','.$gia;
			
		}
		$product=implode('|', $array_product);
		$customer=$name.'phancach'.$diachi.'phancach'.$email.'phancach'.$sodienthoai.'phancach'.$tinhthanh.'phancach'.$ghichu.'phancach'.$tong.'phancach'.$type_payment.'phancach'.$magiamgia;
		$madonhang=$_SESSION['madonhang'];
		$_SESSION['customer']=$customer;
		$_SESSION['product']=$product;

		$va="status='1'";
		$this->model('vouchermodel')->update($va,"ma_code=$magiamgia");

		$column='customer,timestamp,product,madonhang,status';
		$va="'$customer','$time','$product','$madonhang','1'";
		return $this->insert($column,$va);

	}

	function capnhat(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);
		$content=$_POST['content'];
		$father_level=implode(',',$_POST['father_level']);
		$hide=$_POST['hide'];
		$rank=$_POST['rank'];

		$mangthuoctinh=array();
		$mthuoctinh=$_POST['thuoctinh'];
		foreach ($mthuoctinh as $key => $value) {
			$mangthuoctinh[]=$value;
		}

		$thuoctinh=implode(',',$mangthuoctinh);

		$id=$_POST['id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$va="name='$name',khongdau='$khongdau',meta_description='$meta_description',meta_keywords='$meta_keywords',content='$content',father_level='$father_level',hide='$hide',image='$image',rank='$rank',thuoctinh='$thuoctinh'";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		// $this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

	
}
?>