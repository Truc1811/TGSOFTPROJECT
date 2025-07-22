<?php
class thuonghieumodel extends Controller{
	public $tablename='thuonghieu';
	public $thuvienchuoi;
	public $thuvienmodel;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$this->thuvienmodel=$this->model($_POST['model']);
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$rank=$_POST['rank'];
		$icon=$this->thuvienchuoi->lockytu($_POST['icon']);
		$level=$_POST['level'];
			if(@$_POST['father_level']){				
				$father_level=implode(',',$_POST['father_level']);
			} else {
				$father_level='';
			}
		$hide=$_POST['hide'];
		$mang=array();
		$image=$this->thuvien('thuvienfile')->image('image');
		$column='name,khongdau,rank,level,father_level,hide,icon,image';
		$va="'$name','$khongdau','$rank','$level','$father_level','$hide','$icon','$image'";
		return $this->thuvienmodel->insert($column,$va);
	}

	function capnhat(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$this->thuvienmodel=$this->model($_POST['model']);
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$rank=$_POST['rank'];
		$icon=$this->thuvienchuoi->lockytu($_POST['icon']);
		$level=$_POST['level'];
			if(@$_POST['father_level']){
				$father_level=implode(',',$_POST['father_level']);
			} else {
				$father_level='';
			}
		$hide=$_POST['hide'];

		$id=$_POST['id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$va="name='$name',khongdau='$khongdau',rank='$rank',level='$level',father_level='$father_level',hide='$hide',icon='$icon',image='$image'";
		return $this->thuvienmodel->update($va,"id=$id");
	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);
		$this->delete("id=$id");
	}


}
?>