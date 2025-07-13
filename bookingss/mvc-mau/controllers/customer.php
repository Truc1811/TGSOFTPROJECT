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
		//goi views
		$this->view('login', $mang);
	}

	function khachthue($a = false)
	{
		$mang = $this->data();
		$mang['page'] = json_encode('theme/' . $this->matheme . '/taikhoan/khachthue/taikhoan');
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
		$id_kt = $_POST['customer_tenant'];
		$status_od = $_POST['status'];
		$this->model('ordermodel')->add($serviceId,$status_od);
		// $status_order=json_decode($this->model('ordermodel')->selecta());
		// $status=$status_order[0]->status;
		
		// if ($status >1){
		// 	echo ("Phòng đã được đặt trước đó!");
		// }else{
		// 	echo ('phong da dat');
		// }
	}
	public function huyphong()
	{
		$serviceId = isset($_POST['id']) ? intval($_POST['id']) : 0;
		$email = isset($_POST['customer_tenant']) ? $_POST['customer_tenant'] : 0;
		$ob=json_decode($this->model('customermodel')->where("email='$email'"));
		$id_kt = $ob[0]->id;
		$order_id=json_decode($this->model('ordermodel')->where("customer_tenant='$id_kt'"));
	
		$id=$order_id[0]->id;
		$result = $this->model('ordermodel')->capnhat($id);
	
		if($result ){
			echo "Hủy đặt phòng thành công";
		}
		else{
			echo "Chưa hủy được phòng";
		}
	
	
	}
}
