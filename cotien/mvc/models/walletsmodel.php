<?php
class walletsmodel extends Controller{
	public $tablename='wallets';

	function add($users_id){

		
		$column='
		users_id'
		;
		$va="
		'$users_id'"
		;
		$this->insert($column,$va);

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
	function capnhatsodu($newBalance, $id) {
		// Cập nhật số dư ví
		$va = "balance='$newBalance'";
		return $this->update($va, "users_id='$id'");
	}

}
?>