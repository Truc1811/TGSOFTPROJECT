<?php
class newsmodel extends Controller{
	public $tablename='news';
	public $thuvienchuoi;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);
		$content=$_POST['content'];
		$father_level=$_POST['father_level'];
		$hide=$_POST['hide'];
		$rank=$_POST['rank'];
		$view=1;
		$image=$this->thuvien('thuvienfile')->image('image');
		$column='
			name,
			khongdau,
			meta_description,
			meta_keywords,
			content,
			father_level,
			hide,
			view,
			image,
			rank'
			;
		$va="
			'$name',
			'$khongdau',
			'$meta_description',
			'$meta_keywords',
			'$content',
			'$father_level',
			'$hide',
			'$view',
			'$image',
			'$rank'
			";
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
		$father_level=$_POST['father_level'];
		$hide=$_POST['hide'];
		$rank=$_POST['rank'];
		$id=$_POST['id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$va="
			name='$name',
			khongdau='$khongdau',
			meta_description='$meta_description',
			meta_keywords='$meta_keywords',
			content='$content',
			father_level='$father_level',
			hide='$hide',
			image='$image',
			rank='$rank'
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