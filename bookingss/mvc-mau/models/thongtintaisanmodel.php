<?php
class thongtintaisanmodel extends Controller{
	public $tablename='thongtintaisan';

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$khong_dau=$this->thuvienchuoi->khongdau($name);
		$status=$_POST['status'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$price=$_POST['price'];
		$price_sale=$_POST['price_sale'];
		$loai=$_POST['loai'];
		$khachhang_id=$_POST['khachhang_id'];
		$image=$this->thuvien('thuvienfile')->image('image');
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);


		
		
		$column='
		name,
		address,
		content,
		phone,
		email,
		price,
		price_sale,
		image,
		loai,
		khachhang_id,
		status,
		khong_dau,
		meta_description,
		meta_keywords'
		;
		$va=
		"
		'$name',
		'$address',
		'$content',
		'$phone',
		'$email',
		'$price',
		'$price_sale',
		'$image',
		'$loai',
		'$khachhang_id',
		'$status',
		'$khong_dau',
		'$meta_description',
		'$meta_keywords'
		"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$id=$_POST['id'];
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$khong_dau=$this->thuvienchuoi->khongdau($name);
		$status=$_POST['status'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$price=$_POST['price'];
		$price_sale=$_POST['price_sale'];
		$loai=$_POST['loai'];
		$khachhang_id=$_POST['khachhang_id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);

		$va="
		name='$name',
		address='$address',
		content='$content',
		phone='$phone',
		email='$email',
		price='$price',
		price_sale='$price_sale',
		image='$image',
		loai='$loai',
		khachhang_id='$khachhang_id',
		status='$status',
		khong_dau='$khong_dau',
		meta_description='$meta_description',
		meta_keywords='$meta_keywords'
		";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>