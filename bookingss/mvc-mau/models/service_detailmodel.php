<?php
class service_detailmodel extends Controller{
	public $tablename='service_detail';

	public $thuvienchuoi;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$image=$this->thuvien('thuvienfile')->image('image');
		$price=$_POST['price'];
		$discount=$_POST['discount'];
		$word_seo=$this->thuvienchuoi->khongdau($name);
		$status=$_POST['status'];
		$service_id=$_POST['service_id'];
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);


		
		
		$column='
		name,
		content,
		image,
		price,
		discount,
		word_seo,
		status,
		service_id,
		meta_description,
		meta_keywords'
		;
		$va=
		"
		'$name',
		'$content',
		'$image',
		'$price',
		'$discount',
		'$word_seo',
		'$status',
		'$service_id',
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
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$price=$_POST['price'];
		$discount=$_POST['discount'];
		$word_seo=$this->thuvienchuoi->khongdau($name);
		$status=$_POST['status'];
		$service_id=$_POST['service_id'];
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);

		$va="
		name='$name',
		content='$content',
		image='$image',
		price='$price',
		discount='$discount',
		word_seo='$word_seo',
		status='$status',
		service_id='$service_id',
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