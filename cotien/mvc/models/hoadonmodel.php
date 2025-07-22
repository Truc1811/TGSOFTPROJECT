<?php
class hoadonmodel extends Controller{
	public $tablename='hoadon';

	function add(){
		$id_khachhang=$_POST['id_khachhang'];
		$so_chung_tu=$_POST['so_chung_tu'];
		$tong_tien=$_POST['tong_tien'];
		$so_hoa_don=$_POST['so_hoa_don'];
		$id_nhacungcap=$_POST['id_nhacungcap'];
		$dien_giai=$_POST['dien_giai'];
		$status=$_POST['status'];
		
		$column='
		id_khachhang,
		so_chung_tu,
		tong_tien,
		so_hoa_don,
		id_nhacungcap,
		status,
		dien_giai'
		;
		$va="
		'$id_khachhang',
		'$so_chung_tu',
		'$tong_tien',
		'$so_hoa_don',
		'$id_nhacungcap',
		'$status',
		'$dien_giai'"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$id=$_POST['id'];
		$id_khachhang=$_POST['id_khachhang'];
		$so_chung_tu=$_POST['so_chung_tu'];
		$tong_tien=$_POST['tong_tien'];
		$so_hoa_don=$_POST['so_hoa_don'];
		$id_nhacungcap=$_POST['id_nhacungcap'];
		$dien_giai=$_POST['dien_giai'];
		$status=$_POST['status'];
		$va="
		id_khachhang='$id_khachhang',
		so_chung_tu='$so_chung_tu',
		tong_tien='$tong_tien',
		so_hoa_don='$so_chung_tu',
		id_nhacungcap='$id_nhacungcap',
		dien_giai='$dien_giai',
		status='$status'";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>