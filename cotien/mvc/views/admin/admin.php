<?php
class admin extends Controller
{
	private $user;
	public $password;
	private $id;
	public $l;
	public $khachhang;
	public $usermodel;
	public $datamodel;

	//tuy bien

	function __construct()
	{
		$this->khachhang = $this->thuvien('thuvienmkh');
		$this->user = $this->khachhang->getu();
		$this->password = $this->khachhang->getp();
		$this->id = $this->khachhang->geti();
		$this->l = $this->khachhang->getl();

		//kiểm tra user hợp lệ
		$this->checksecurity();

		//tạo model
		$this->usermodel = parent::model('usermodel');

		//tuy bien

	}

	function chao()
	{
		$this->statistical();
	}

	function tongquan()
	{
		$mangdata = $this->mangdatacodinh();

		//tuy bien

		$mangdata['page'] = json_encode('tongquan');

		//view
		$this->view('admin', $mangdata);
	}

	function checksecurity()
	{
		if (!@$_COOKIE['khachhang'] && !@$_COOKIE['phanloai']) {
			if (@$_COOKIE[$this->user] && @$_COOKIE[$this->password]) {
				$_SESSION[$this->user] = $_COOKIE[$this->user];
				$_SESSION[$this->password] = $_COOKIE[$this->password];
				$_SESSION[$this->id] = $_COOKIE[$this->id];
				$_SESSION[$this->l] = $_COOKIE[$this->l];
			} else {
				header("location:" . $this->dm . "security");
			}
		}
	}

	function logout()
	{
		setcookie('khachhang', 'xoa', time() - 86400, "/", "", 0);
		setcookie('phanloai', 'xoaphanloai', time() - 86400, "/", "", 0);
		setcookie('xacminh', 'xoaxacminh', time() - 86400, "/", "", 0);
		header("location:" . $this->dm . "login "); // tự nhảy về trang login
	}

	function mangdatacodinh()
	{
		$mangdata = $this->data();
		$mangdata['iduser'] = json_encode($_SESSION[$this->id]);

		//tuy bien		
		$mangdata['mdv'] = $this->model('menumodel')->where("link='dich-vu' AND level=2");

		return $mangdata;
	}

	function statistical()
	{
		header("location:" . $this->dm . "admin/tongquan");
	}


	function listr($db, $page = false, $phanloai = false, $t = false)
	{
		$phanloai = $phanloai ?: '';
		$mangdata = $this->mangdatacodinh();

		//tuy bien
		//lấy và xử lý data từ 3 nguồn: post(form) -  param(link) - csdl(model)
		if ($page) {
			$p = $page;
		} else {
			$p = 1;
		}
		if ($num) {
			$n = $num;
		} else {
			$n = 10;
		}
		$pa = $db . 'default';
		if ($db != 'thongke') {
			$dbmodel = $db . 'model';
			$this->datamodel = $this->model($dbmodel);
		}
		$mangdata['page'] = json_encode($pa);

		// data displayed on the screen
		if (@$phanloai) {

			$mang = json_decode($this->datamodel->select());
			$mang_pl = json_decode($this->datamodel->loc_father_level($phanloai, $mang));

			$mangdata['dataa'] = $this->phantrangarray($p, $n, $mang_pl);
			$mangdata['sumpage'] = $this->sotrangarray($n, $mang_pl);
			$mangdata['numpage'] = json_encode($p);
		} else {
			if ($db == 'users') {
				$mang_phantrang = json_decode($this->datamodel->join_kyc_user());
			} else {
				$mang_phantrang = json_decode($this->datamodel->selecta());
			}
			$mangdata['dataa'] = $this->datamodel->phantrangarray($p, $n, $mang_phantrang);
		}


		// statistical page data
		if ($db != 'thongke') {
			$mangdata['sumpage'] = $this->datamodel->getpageall($n);
			$mangdata['numpage'] = json_encode($p);
		} else {
			$homnay = strtotime(date('Y-m-d', time()) . '0:0:0');
			$mangdata['all_tintuc'] = $this->model('tintucmodel')->soluong();
			$mangdata['all_hoivien'] = $this->model('hoivienmodel')->soluong();
			$mangdata['all_hopthu'] = $this->model('hopthumodel')->soluong();
			$mangdata['all_tuyendung'] = $this->model('tuyendungmodel')->soluong();
			$mangdata['today_tintuc'] = $this->model('tintucmodel')->soluong("timestamp>$homnay");
			$mangdata['today_hoivien'] = $this->model('hoivienmodel')->soluong("timestamp>$homnay");
			$mangdata['today_hopthu'] = $this->model('hopthumodel')->soluong("timestamp>$homnay");
			$mangdata['today_tuyendung'] = $this->model('tuyendungmodel')->soluong("timestamp>$homnay");
		}



		//view
		$this->view('admin', $mangdata);
	}

	function wallet()
	{

		$mangdata = $this->mangdatacodinh();
		$mangdata['wallet'] = $this->model('ordersmodel')->selecta();
		$mangdata['page'] = json_encode('wallet');
		$this->view('admin', $mangdata);
	}

	function businmoney()
	{

		$mangdata = $this->mangdatacodinh();
		$mangdata['businmoney'] = $this->model('ordersmodel')->selecta();
		$mangdata['page'] = json_encode('businmoney');
		$this->view('admin', $mangdata);
	}
	function myproject()
	{

		$mangdata = $this->mangdatacodinh();
		$mangdata['myproject'] = $this->model('ordersmodel')->selecta();
		$mangdata['page'] = json_encode('myproject');
		$this->view('admin', $mangdata);
	}


	function updatekyc()
	{
		// Lấy dữ liệu thô từ request body (dạng JSON)
		$data = json_decode(file_get_contents("php://input"), true);

		// lấy ra chi tiết mảng
		$id = $data['id'];
		$statuskyc = $data['status'];

		//Xử lý và cập nhật
		$status=false;
		$message='Lỗi';
		$data=[];

		$kqa=$this->model('usersmodel')->capnhat($id, $statuskyc);
		$kqb=$this->model('kycsmodel')->capnhat($id, $statuskyc);

		if($kqa && $kqb){
			$status=true;
			$message='Cập nhật thành công';
			$data['trangthai']='Đã xác thực';
		}

		// Tạo phản hồi JSON
		$response = [
		  "status" => $status,
		  "message" => $message,
		  "data" => $data
		];

		// Báo cho client biết đây là JSON
		header('Content-Type: application/json');

		// Trả dữ liệu JSON về cho client
		echo json_encode($response);

	}


	function add($db = false)
	{
		if (@$_POST['bn']) {
			$kq = $this->model($_POST['model'])->add();
			if (str_replace('model', '', $_POST['model']) == 'menu' || str_replace('model', '', $_POST['model']) == 'thuonghieu') {

				//tuy bien
				header("location:" . $this->dm . "admin/add/" . str_replace('model', '', $_POST['model']) . '/' . $_POST['ldt']);
			} else {
				header("location:" . $this->dm . "admin/listr/" . str_replace('model', '', $_POST['model']));
			}
		} else {
			$mangdata = $this->mangdatacodinh();

			//tuy bien
			$pa = $db . 'add';
			$dbmodel = $db . 'model';
			$mangdata['page'] = json_encode($pa);
			$mangdata['model'] = json_encode($dbmodel);
			if ($db == 'kho') {
				$mangdata['sanpham'] = $this->model('sanphammodel')->selecta();
			}

			//view
			$this->view('admin', $mangdata);
		}
	}

	function update($db = false, $page = false, $id = false)
	{
		if (@$_POST['bn']) {
			$trang = $_POST['trang'];
			$kq = $this->model($_POST['model'])->capnhat();
			if (str_replace('model', '', $_POST['model']) == 'configuration' || str_replace('model', '', $_POST['model']) == 'vechungtoi' || str_replace('model', '', $_POST['model']) == 'sanphamland') {

				//tuy bien
				header("location:" . $this->dm . "admin/update/" . str_replace('model', '', $_POST['model']) . '/1/1');
			} else if (str_replace('model', '', $_POST['model']) == 'menu' || str_replace('model', '', $_POST['model']) == 'thuonghieu') {

				//tuy bien
				header("location:" . $this->dm . "admin/add/" . str_replace('model', '', $_POST['model']));
			} else {
				header("location:" . $this->dm . "admin/listr/" . str_replace('model', '', $_POST['model']) . '/' . $trang);
			}
		} else {
			$mangdata = $this->mangdatacodinh();

			//tuy bien
			$pa = $db . 'update';
			$dbmodel = $db . 'model';
			$this->datamodel = $this->model($dbmodel);
			$mangdata['page'] = json_encode($pa);
			$mangdata['dataa'] = $this->datamodel->where("id=$id");
			$mangdata['trang'] = json_encode($page);
			$mangdata['id'] = json_encode($id);
			$mangdata['model'] = json_encode($dbmodel);

			//view
			$this->view('admin', $mangdata);
		}
	}

	function delete($db = false, $page = false, $id = false)
	{
		if ($id and $page) {
			$dbmodel = $db . 'model';
			$kq = $this->model($dbmodel)->xoa($id);
			if ($db == 'menu' || $db == 'thuonghieu') {

				//tuy bien
				header("location:" . $this->dm . "admin/add/$db");
			} else {
				header("location:" . $this->dm . "admin/listr/$db/$page");
			}
		} else {
			if ($_POST['bn']) {
				$db = $_POST['db'];
				$dbmodel = $db . 'model';
				$p = $_POST['page'];
				foreach ($_POST['id'] as $va) {
					$id = $va;
					$this->model($dbmodel)->delete("id=$id");
				}
				header("location:" . $this->dm . "admin/listr/$db/$p");
			}
		}
	}

	function docchat($id_chat = false)
	{
		$_SESSION['adminchat'] = $id_chat ?: '';

		$mangdata = $this->mangdatacodinh();

		//tuy bien
		$mangdata['page'] = json_encode('chatdoc');
		// bien cho testonline



		//view
		$this->view('admin', $mangdata);
	}

	function dongchat()
	{
		if (@$_SESSION['adminchat']) {
			unset($_SESSION['adminchat']);
		}


		header("location:" . $this->dm . "admin/listr/chat/1/1/chatall");
	}

	function kiemchat()
	{
		require "mvc/views/plugin/chat/kiemchat.php";
	}

	function addsanphamcon()
	{
		$page = $_POST['page'];
		$this->model('sanphamconmodel')->add();
		header("location:" . $this->dm . "admin/listr/sanpham/" . $page);
	}

	function testthu()
	{
		$a = json_decode($this->model('menumodel')->join_menu('news'));
		echo '<pre>';
		var_dump($a);
		echo '</pre>';
	}
}
