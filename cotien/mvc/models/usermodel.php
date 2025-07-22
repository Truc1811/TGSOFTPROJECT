<?php
class usermodel extends Controller{
	public $tablename='user';
	public $thuvienchuoi;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$user=$_POST['user'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$role=$_POST['role'];
		
		$column='
		name,
		user,
		password,
		email,
		role'
		;
		$va="
		'$name',
		'$user',
		'$password',
		'$email',
		'$role'"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$id=$_POST['id'];
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$user=$_POST['user'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$role=$_POST['role'];
		$va="
		name='$name',
		user='$user',
		password='$password',
		email='$email',
		role='$role'";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>