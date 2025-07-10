<?php
class ordermodel extends Controller
{
	public $tablename = 'orders';
	public $thuvienchuoi;

	function add($serviceId, $status_od)
	{
		$email = $_COOKIE['admin'];
		$khachthue = json_decode($this->model('customermodel')->where("email='{$email}'"));
		$chu = json_decode($this->model('servicemodel')->join_svdt_sv_customer($serviceId));

		$id_chu = $chu[0]->id_customer;
		$customer_id = $khachthue[0]->id;


		$customer_tenant = $customer_id;
		$customer_owner = $id_chu;
		$status = $status_od;

		$column = '
		customer_tenant,
		customer_owner,
		status';
		$va = "
		'$customer_tenant',
		'$customer_owner',
		'$status_od'
		";
		$this->insert($column, $va);

		$oborder = json_decode($this->model('ordermodel')->selecta());
		$price = $chu[0]->price_s;
		$orders_id = $oborder[0]->id;
		$service_detail_id = $serviceId;
		$col = '
		price,
		orders_id,
		service_detail_id
		';
		$v = "
		'$price',
		'$orders_id',
		'$service_detail_id'
		";

		$this->model('order_detailmodel')->insert($col, $v);
	}

	function capnhat($id, $status_order)
	{
		$va = "
    	status='$status_order'";
		return $this->update($va, "id=$id");
	}

	function capnhatstatus($id, $status)
	{
		$val = "status = '$status'";
		$where = "id = $id";
		return $this->update($val, $where);
	}

	public function capnhatStatusVaImage($id, $status, $image)
	{
		$image = $this->thuvien('thuvienfile')->image('image');
		$val = "image = '$image', status = '$status'";
		$where = "id = $id";

		return $this->update($val, $where);
	}

	function xoa($id)
	{
		// $row = json_decode($this->where("id=$id"));
		// $this->delete("id=$id");
		// Xóa order_detail trước
		$this->model('order_detailmodel')->delete("orders_id=$id");

		// Sau đó xóa orders
		$this->delete("id=$id");
	}
}
