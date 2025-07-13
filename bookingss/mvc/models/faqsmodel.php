<?php
class faqsmodel extends Controller{
	public $tablename='faqs';
	public $thuvienchuoi;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$url_seo=$_POST['url_seo'];
		$status=$_POST['status'];
		$category_id=$_POST['category_id'];
		$image=$this->thuvien('thuvienfile')->image('image');
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);
		
		$column='
		name,
		content,
		url_seo,
		status,
		category_id,
		image,
		meta_description,
		meta_keywords'
		;
		$va=
		"
		'$name',
		'$content',
		'$status',
		'$url_seo',
		'$category_id',
		'$image',
		'$meta_description',
		'$meta_keywords'
		"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$url_seo=$_POST['url_seo'];
		$status=$_POST['status'];
		$category_id=$_POST['category_id'];
		$id=$_POST['id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);

		$va="
		name='$name',
		content='$content',
		url_seo='$url_seo',
		status='$status',
		category_id='$category_id',
		image='$image',
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