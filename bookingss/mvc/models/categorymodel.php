<?php
class categorymodel extends Controller{
	public $tablename='category';
	public $thuvienchuoi;
	public $thuvienmodel;

	function add_con(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$rank=$_POST['rank'];
		$rank=$_POST['rank'];
		$rank=$_POST['rank'];
		$rank=$_POST['rank'];
		$rank=$_POST['rank'];
		$rank=$_POST['rank'];
		$rank=$_POST['rank'];
		
		$father_level=$_POST['id'];
		$column='
			name,
			khongdau,
			link,
			rank,
			level,
			father_level,
			hide
		';
		$va="
			'$name',
			'$khongdau',
			'$khongdau',
			'$rank',
			'2',
			'$father_level',
			'1'
		";
		return $this->insert($column,$va);
	}

	function sua_con(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$link=$khongdau;
		$rank=$_POST['rank'];
		$id=$_POST['id'];
		$va="
			name='$name',
			khongdau='$khongdau',
			link='$link',
			rank='$rank'
		";
		return $this->update($va,"id=$id");
	}

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$this->thuvienmodel=$this->model($_POST['model']);
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$link=$_POST['link'];
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
		$column='name,khongdau,link,rank,level,father_level,hide,icon,image';
		$va="'$name','$khongdau','$link','$rank','$level','$father_level','$hide','$icon','$image'";
		return $this->thuvienmodel->insert($column,$va);
	}

	function capnhat(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$this->thuvienmodel=$this->model($_POST['model']);
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$link=$_POST['link'];
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
		$va="name='$name',khongdau='$khongdau',link='$link',rank='$rank',level='$level',father_level='$father_level',hide='$hide',icon='$icon',image='$image'";
		return $this->thuvienmodel->update($va,"id=$id");
	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);
		$this->delete("id=$id");
	}


}
?>