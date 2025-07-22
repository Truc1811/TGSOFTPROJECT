<?php
class usersmodel extends Controller{
	public $tablename='users';
	public $thuvienchuoi;

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$email=$_POST['email'];
		//$kyc_status=$_POST['kyc_status'];
		$role=$_POST['role'];
		$address=$_POST['address'];
		
		$column='
		name,
		password,
		email,
		kyc_status,
		address,
		role'
		;
		$va="
		'$name',
		'$password',
		'$email',
		'pending',
		'$address',
		'$role'"
		;
		$this->model('usersmodel')->insert($column,$va);

		$ob=json_decode($this->model('usersmodel')->selecta());
		$id_khach=$ob[0]->id;
		$name_khach=$ob[0]->name;
		
		//$status=$_POST['status'];
			
		
		$this->model('kycsmodel')->add($id_khach,$name_khach);
		$this->model('walletsmodel')->add($id_khach);




	}

	function capnhat($id, $status)
	{

		
		$val = "kyc_status = '$status'";


		$where = "id = $id";
		return $this->update($val, $where);
	}

	// function capnhat(){
	// 	$id=$_POST['id'];
	// 	$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
	// 	$name=addslashes($_POST['name']);
	// 	$name=$this->thuvienchuoi->lockytu($name);
	// 	$user=$_POST['user'];
	// 	$password=$_POST['password'];
	// 	$email=$_POST['email'];
	// 	$role=$_POST['role'];
	// 	$va="
	// 	name='$name',
	// 	user='$user',
	// 	password='$password',
	// 	email='$email',
	// 	role='$role'";
	// 	return $this->update($va,"id=$id");

	// }

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>