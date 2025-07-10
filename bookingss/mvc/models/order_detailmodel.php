<?php
class order_detailmodel extends Controller
{
	public $tablename = 'order_detail';
	public $thuvienchuoi;

	function add()
	{
		$service_detail_id = $_POST['service_detail_id'];
		$order_id = $_POST['order_id'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$status = $_POST['status'];

		$column = '
		service_detail_id,
		order_id,
		price,
		quantity,
		status';
		$va = "
		'$service_detail_id',
		'$order_id',
		'$price',
		'$quantity',
		'$status',
		";
		return $this->insert($column, $va);
	}

	function capnhat()
	{
		$id = $_POST['id'];
		$service_detail_id = $_POST['service_detail_id'];
		$order_id = $_POST['order_id'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$status = $_POST['status'];
		$va = "
		service_detail_id='$service_detail_id',
		order_id='$order_id',
		price='$price',
		quantity='$quantity',
		status='$status'
		";
		return $this->update($va, "id=$id");
	}

	function xoa($id)
	{
		$row = json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/" . $row[0]->image);


		$this->delete("id=$id");
	}
}
