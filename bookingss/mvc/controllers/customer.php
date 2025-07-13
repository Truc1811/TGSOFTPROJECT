<?php
class customer extends Controller
{

	function __construct()
	{
		$this->middleware();
		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');

	}

	function chao($a = false)
	{
		$email = $_COOKIE['admin'];
		$khachthue = json_decode($this->model('customermodel')->where("email='$email'"));
		$status = $khachthue[0]->status;
		if ($status == 1) {
			$this->chothue();
		} else {
			$this->khachthue();
		}
	}

	function middleware()
	{
		if (!@$_COOKIE['admin']) {
			header("location:" . $this->dm . "login/customer ");
		}
	}


	function logout()
	{
		//$link_ob = $_SERVER['REQUEST_URI'];
		setcookie('admin', 'xoa', time() - 86400, "/", "", 0);
		header("location:" . $this->dm . "login/customer "); // tự nhảy về trang chủ

	}
	function logon()
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/mau/customer/logon');
		//goi views
		$this->view('login', $mang);
	}
	function dangky()
	{
		if (@$_POST['submit']) {
			$kq = $this->model('customermodel')->luu_dang_ky();
			$data = $this->data();
			$data['kq'] = $kq;
			if ($kq) {
				$data = $this->data();
				$data['page'] = json_encode('theme/mau/customer/success');
			} else {
				$data = $this->data();
				$data['page'] = json_encode('theme/mau/customer/404');
			}
			$this->view('web', $data);
		}
	}
	function kiemtrasdt()
	{
		$kt = $_POST['kt'];
		$setsdt = json_decode($this->model('customermodel')->wherec("phone=$kt"));
		if ($setsdt > 0) {
			require "mvc/views/plugin/ajax/ktsdt.php";
		}
	}

	function kiemtraemail(): void
	{
		$kte = $_POST['kte'];
		$setemail = json_decode($this->model('customermodel')->wherec("email=$kte"));
		if ($setemail > 0) {
			require "mvc/views/plugin/ajax/ktemail.php";
		}
	}


	function chothue($a = false)
	{
		$email = $_COOKIE['admin'];
		$customerData = json_decode($this->model('customermodel')->where("email='{$email}'"));
		$mang = $this->data();
		$mang['cus_email'] = $customerData[0]->email ?? '';
		$mang['cus_phone'] = $customerData[0]->phone ?? '';
		$mang['cus_name'] = $customerData[0]->name ?? '';
		$mang['cus_image'] = $customerData[0]->image ?? '';
		$mang['page'] = json_encode('theme/' . $this->matheme . '/taikhoan/chothue/taikhoan');
		$mang['service'] = $this->model('servicemodel')->selecta();
		$mang['service_detail'] = $this->model('service_detailmodel')->selecta();
		$mang['order'] = $this->model('order_detailmodel')->join_4_bang();
		//goi views
		$this->view('login', $mang);
	}

	function khachthue()
	{
		$email = $_COOKIE['admin'];
		$customerData = json_decode($this->model('customermodel')->where("email='{$email}'"));
		$mang = $this->data();
		$mang['cus_email'] = $customerData[0]->email ?? '';
		$mang['cus_phone'] = $customerData[0]->phone ?? '';
		$mang['cus_name'] = $customerData[0]->name ?? '';
		$mang['cus_image'] = $customerData[0]->image ?? '';
		$mang['page'] = json_encode('theme/' . $this->matheme . '/taikhoan/khachthue/taikhoan');
		$mang['service_4'] = json_decode($this->model('service_detailmodel')->join_4_bang2($email));
		// echo "<pre>";
		// var_dump($mang['service_4']);
		//  echo "</pre>";
		//goi views
		$this->view('login', $mang);
	}


	function tinnhan($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/tinnhan/tinnhan');
		//goi views
		$this->view('login', $mang);
	}
	public function datphong()
	{
		$serviceId = $_POST['id'];
		$email_cus = $_POST['customer_tenant'];
		$status_od = $_POST['status'];
		$this->model('ordermodel')->add($serviceId, $status_od, 1);
		$this->model('service_detailmodel')->capnhat($serviceId, $email_cus, 1);
	}
	public function huyphong()
	{
		$serviceId = $_POST['id'];
		$email_cus = $_POST['customer_tenant'];
		$status_order = $_POST['status'];


		// Lấy id của khách hàng
		$ob = json_decode($this->model('customermodel')->where("email='$email_cus'"));
		$id_kt = $ob[0]->id;

		// Tìm đơn đặt phòng của khách hàng này
		$order_id = json_decode($this->model('ordermodel')->where("customer_tenant='$id_kt'"));
		$id = $order_id[0]->id;

		// Cập nhật đơn hàng (ví dụ chuyển trạng thái đơn)
		$this->model('ordermodel')->capnhat($id, $status_order);

		// Cập nhật phòng: xóa email và status = 0
		$this->model('service_detailmodel')->capnhat($serviceId, $email_cus, 0);
	}
	public function capnhatstatusorder()
	{
		$id = $_POST['id'];
		$status = $_POST['status'];
		$this->model('ordermodel')->capnhatstatus($id, $status);
	}

	public function uploadimage()
	{
		$id = $_POST['id'] ;
		$status = $_POST['status'] ;
		$image = $_POST['image'];


		$this->model('ordermodel')->capnhatStatusVaImage($id,$status, $image);

		echo "success";
	}
}
