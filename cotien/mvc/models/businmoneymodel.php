<?php
class businmoneymodel extends Controller{
	public $tablename='khachhang';

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$type=$_POST['type'];
		$level=$_POST['level'];
		$status=$_POST['status'];
		$email=$_POST['email'];
		
		$column='
		name,
		phone,
		address,
		type,
		level,
		status,
		email'
		;
		$va="
		'$name',
		'$phone',
		'$address',
		'$type',
		'$level',
		'$status',
		'$email'"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$id=$_POST['id'];
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$type=$_POST['type'];
		$level=$_POST['level'];
		$status=$_POST['status'];
		$email=$_POST['email'];
		$va="
		name='$name',
		phone='$phone',
		address='$address',
		level='$level',
		type='$type',
		status='$status',
		email='$email'
		"
		;
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>