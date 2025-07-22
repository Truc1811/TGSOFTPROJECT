<?php
class customermodel extends Controller
{
	public $tablename = 'customer';
	public $thuvienchuoi;

	function add()
	{
		$this->thuvienchuoi = $this->thuvien('thuvienchuoi');
		$name = addslashes($_POST['name']);
		$name = $this->thuvienchuoi->lockytu($name);
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$level = $_POST['level'];
		$status = $_POST['status'];
		$email = $_POST['email'];
		$image = $this->thuvien('thuvienfile')->image('image');
		$column = '
		name,
		phone,
		address,
		level,
		status,
		email,
		image';
		$va = "
		'$name',
		'$phone',
		'$address',
		'$level',
		'$status',
		'$email',
		'$image'
		";
		return $this->insert($column, $va);
	}

	function capnhat()
	{
		$id = $_POST['id'];
		$this->thuvienchuoi = $this->thuvien('thuvienchuoi');
		$name = addslashes($_POST['name']);
		$name = $this->thuvienchuoi->lockytu($name);
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$level = $_POST['level'];
		$status = $_POST['status'];
		$email = $_POST['email'];
		$va = "
		name='$name',
		phone='$phone',
		address='$address',
		level='$level',
		status='$status',
		email='$email'
		";
		return $this->update($va, "id=$id");
	}

	function xoa($id)
	{
		$row = json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/" . $row[0]->image);


		$this->delete("id=$id");
	}

	function luu_dang_ky()
	{
		//$username=$_POST["name"]
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$name = $_POST["name"];
		$status = $_POST["status"];
		$level = $_POST["level"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$image = $this->thuvien('thuvienfile')->image('image');



		$columns = ' 
		password,
		name,
		status,
		phone,
		email,
		address,
		level,
		image
		';
		$va  = "
		'$password',
		'$name',
		'$status',
		'$phone',
		'$email',
		'$address',
		'$level',
		'$image'
		 ";
		return $this->insert($columns, $va);
	}
}
