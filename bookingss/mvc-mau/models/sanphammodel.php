<?php
class sanphammodel extends Controller{
	public $tablename='sanpham';

	function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$don_vi_tinh=$_POST['don_vi_tinh'];
		$ma_san_pham=$_POST['ma_san_pham'];
		$soluong=$_POST['soluong'];
		$khong_dau=$this->thuvienchuoi->khongdau($name);
		$status=$_POST['status'];
		$father_level=$_POST['father_level'];
		$image=$this->thuvien('thuvienfile')->image('image');
		
		$column='
		name,
		content,
		don_vi_tinh,
		ma_san_pham,
		soluong,
		khong_dau,
		status,
		father_level,
		image'
		;
		$va=
		"
		'$name',
		'$content',
		'$don_vi_tinh',
		'$ma_san_pham',
		'$soluong',
		'$khong_dau',
		'$status',
		'$father_level',
		'$image'
		"
		;
		return $this->insert($column,$va);

	}

	function capnhat(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		$content=$_POST['content'];
		$don_vi_tinh=$_POST['don_vi_tinh'];
		$ma_san_pham=$_POST['ma_san_pham'];
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$status=$_POST['status'];
		$father_level=$_POST['father_level'];
		$id=$_POST['id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$va="
		name='$name',
		content='$content',
		don_vi_tinh='$don_vi_tinh',
		ma_san_pham='$ma_san_pham',
		khong_dau='$khong_dau',
		status='$status',
		father_level='$father_level',
		image='$image'
		";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>