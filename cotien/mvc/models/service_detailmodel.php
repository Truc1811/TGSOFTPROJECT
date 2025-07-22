<?php
class service_detailmodel extends Controller
{
	public $tablename = 'service_detail';

	public $thuvienchuoi;

	function add()
	{
		$this->thuvienchuoi = $this->thuvien('thuvienchuoi');
		$name = addslashes($_POST['name']);
		$name = $this->thuvienchuoi->lockytu($name);
		$content = $_POST['content'];
		$image = $this->thuvien('thuvienfile')->image('image');
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$word_seo = $this->thuvienchuoi->khongdau($name);
		$status = $_POST['status'];
		$service_id = $_POST['service_id'];
		$meta_description = $this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords = $this->thuvienchuoi->lockytu($_POST['meta_keywords']);
		$email = $_COOKIE['admin'];
		$khachthue = json_decode($this->model('customermodel')->where("email='$email'"));
		$customer_email = $_POST['customer_email'];




		$column = '
		name,
		content,
		image,
		price,
		discount,
		word_seo,
		status,
		service_id,
		meta_description,
		meta_keywords,
		customer_email
		';
		$va =
			"
		'$name',
		'$content',
		'$image',
		'$price',
		'$discount',
		'$word_seo',
		'$status',
		'$service_id',
		'$meta_description',
		'$meta_keywords',
		'$customer_email'
		";
		return $this->insert($column, $va);
	}

	function capnhat($serviceId, $email_cus, $status)
	{
		if ($status == 0) {
			$set = "status = 0, customer_email = NULL";
		} else {
			// Ngược lại: cập nhật status và email khách
			$set = "status = '$status', customer_email = '$email_cus'";
		}

		$where = "id = $serviceId";
		return $this->update($set, $where);
	}

	function xoa($id)
	{
		$row = json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/" . $row[0]->image);


		$this->delete("id=$id");
	}
}
