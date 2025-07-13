<?php
class hoadonchitietmodel extends Controller{
	public $tablename='hoadonchitiet';

	function add(){
		$price=$_POST['price'];
		$id_kho=$_POST['id_kho'];
		$id_hoadon=$_POST['id_hoadon'];
		$status=$_POST['status'];
		$dien_giai=$_POST['dien_giai'];
		
		
		
		$column='
		price,
		id_kho,
		id_hoadon,
		status,
		dien_giai'
		;
		$va="
		'$price',
		'$id_kho',
		'$id_hoadon',
		'$status'
		'$dien_giai'"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$price=$_POST['price'];
		$id_kho=$_POST['id_kho'];
		$id_hoadon=$_POST['id_hoadon'];
		$status=$_POST['status'];
		$dien_giai=$_POST['dien_giai'];
		$va="
		price='$price',
		id_kho='$id_kho',
		id_hoadon='$id_hoadon',
		status='$status'
		dien_giai='$dien_giai'";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>