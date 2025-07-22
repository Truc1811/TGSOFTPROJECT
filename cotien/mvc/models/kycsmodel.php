<?php
class kycsmodel extends Controller
{
	public $tablename = 'kycs';
	public $thuvienchuoi;

	function add($id_khach,$name_khach)
	{
		$id_number=$_POST['id_number'];
		$dob=$_POST['dob'];
		$front_image=$this->thuvien('thuvienfile')->image('front_image');
		$back_image=$this->thuvien('thuvienfile')->image('back_image');
		$column='
		users_id,
		full_name,
		id_number,
		dob,
		front_image,
		back_image,
		status'
		;
		$va="
		'$id_khach',
		'$name_khach',
		'$id_number',
		'$dob',
		'$front_image',
		'$back_image',
		'pending'"
		;
		$this->insert($column, $va);
	}

	function capnhat($user_id, $status)
	{
		$val = "status = '$status'";
		$where = "users_id = $user_id"; 
		return $this->update($val, $where);
	}
	// function capnhat()
	// {
	// 	$id = $_POST['id'];
	// 	$this->thuvienchuoi = $this->thuvien('thuvienchuoi');
	// 	$name = addslashes($_POST['name']);
	// 	$name = $this->thuvienchuoi->lockytu($name);
	// 	$user = $_POST['user'];
	// 	$users_id = $_POST['users_id'];
	// 	$email = $_POST['email'];
	// 	$status = $_POST['status'];
	// 	$va = "
	// 	name='$name',
	// 	user='$user',
	// 	users_id='$users_id',
	// 	email='$email',
	// 	status='$status'";
	// 	return $this->update($va, "id=$id");
	// }

	function xoa($id)
	{
		$row = json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/" . $row[0]->image);


		$this->delete("id=$id");
	}
}
