<?php
class servicemodel extends Controller
{
	public $tablename = 'service';

	public $thuvienchuoi;

	function add()
	{
		$email = $_COOKIE['admin'];
		$khachthue = json_decode($this->model('customermodel')->where("email='$email'"));
		$customer_id_kh = $khachthue[0]->id;
		$customer_email = $khachthue[0]->email; // lấy luôn từ đây, không cần query lại
		$customer_loai = $khachthue[0]->status; // lấy luôn từ đây, không cần query lại

		$this->thuvienchuoi = $this->thuvien('thuvienchuoi');
		$name = addslashes($_POST['name']);
		$name = $this->thuvienchuoi->lockytu($name);
		$address = $_POST['address'];
		$content = $_POST['content'];
		$phone = $_POST['phone'];
		$email = $customer_email;
		$image = $this->thuvien('thuvienfile')->image('image');
		$hide = $_POST['hide'];
		$customer_id = $customer_id_kh;
		$status = $customer_loai;
		$word_seo = $this->thuvienchuoi->khongdau($name);
		$meta_description = $this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords = $this->thuvienchuoi->lockytu($_POST['meta_keywords']);




		$column = '
		name,
		address,
		content,
		phone,
		email,
		image,
		hide,
		customer_id,
		status,
		word_seo,
		meta_description,
		meta_keywords';
		$va =
			"
		'$name',
		'$address',
		'$content',
		'$phone',
		'$email',
		'$image',
		'$hide',
		'$customer_id',
		'$status',
		'$word_seo',
		'$meta_description',
		'$meta_keywords'
		";
		return $this->insert($column, $va);
	}

	function capnhat()
	{
		$id = $_POST['id'];
		$this->thuvienchuoi = $this->thuvien('thuvienchuoi');
		$name = addslashes($_POST['name']);
		$name = $this->thuvienchuoi->lockytu($name);
		$address = $_POST['address'];
		$content = $_POST['content'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
		$image = $this->thuvien('thuvienfile')->imageupdate('image', 'image1');
		$hide = $_POST['hide'];
		$customer_id = $_POST['customer_id'];
		$status = $_POST['status'];
		$word_seo = $this->thuvienchuoi->khongdau($name);
		$meta_description = $this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords = $this->thuvienchuoi->lockytu($_POST['meta_keywords']);

		$va = "
		name='$name',
		address='$address',
		content='$content',
		phone='$phone',
		email='$email',
		price='$price',
		discount='$discount',
		image='$image',
		hide='$hide',
		customer_id='$customer_id',
		status='$status',
		word_seo='$word_seo',
		meta_description='$meta_description',
		meta_keywords='$meta_keywords'
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
