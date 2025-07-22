<?php
class wallet extends Controller{
	public $user;
	
	

	//tuy bien

	function __construct(){
		
		$this->check_wallet();
		
	}
	
	function chao (){
		
	}
	function mangdatacodinh(){
		$mangdata=$this->data();

		//tuy bien		
		//$mangdata['mdv']=$this->model('menumodel')->where("link='dich-vu' AND level=2");

		return $mangdata;
	}
	function account()
	{
		$email = $_COOKIE['khachhang'];
		$user =json_decode($this->model('usersmodel')->where("email='$email'"));
		$id=$user[0]->id;
		if (count($user)<1) {
			header("location:".$this->dm."login");
		}
		else{
			$wallet= json_decode($this->model('walletsmodel')->where("users_id='$id'"));
			$wallet_id=$wallet[0]->id;
			$transactions= json_decode($this->model('transactionsmodel')->where("wallet_id='$wallet_id'"));
			$mangdata = $this->mangdatacodinh();
			$mangdata['wallet'] = json_encode($wallet[0]->balance);
			$mangdata['transactions'] = json_encode($transactions);
			$mangdata['page'] = json_encode('walletdefault');

			// 
			// $page=isset($_GET['page']) ? intval($_GET['page']) : 1;
			// $limit=20;
			
			// $offset =($page-1) * $limit;
			// $total_transactions = count($transactions);
			// $data =array_slice($transactions, $offset, $limit);
			// $total_pages= ceil($total_transactions/ $limit);
			// $mangdata['page'] = $page;
			// $mangdata['limit'] = $limit;
			// $mangdata['total_transactions'] = $total_transactions;
			// $mangdata['total_pages'] = $total_pages;
			// $mangdata['data'] = $data;

			// echo json_encode([
			// 'data' => $data,
			// 'total_pages' => $total_pages,
			// 'current_page' => $page
			// ]);


			$this->view('admin', $mangdata);
			

		}
		
	}

	function withdraw() {
	// $amount = $_POST['amount'];
	// $email = $_COOKIE['khachhang'];
	

	// $user = $this->model('usersmodel')->where("email='$email'");
	// if (!$user || count($user) === 0) {
	// echo json_encode(['success' => false, 'message' => 'Tài khoản không tồn tại']);
	// return;
	// }

	// $id = $user[0]->id;
	// $wallet = $this->model('walletsmodel')->where("users_id='$id'");

	// if (!$wallet || $wallet[0]->balance < $amount) { echo json_encode(['success'=> false, 'message' => 'Số dư không đủ']);
	// 	return;
	// 	}

	// 	$newBalance = $wallet[0]->balance - $amount;

	// 	$this->model('walletsmodel')->update("balance='$newBalance'", "users_id='$id'");

	// 	echo json_encode([
	// 	'success' => true,
	// 	'amount' => $amount,
	// 	'new_balance' => $newBalance
	// 	]);
	// echo "okkk";
	if(!isset($_POST['amount'])|| $_POST['amount']<=0){
		echo json_encode(['success'=>false, 'message'=>'Số tiền không hợp lệ']);
		// echo "Số tiền không hợp lệ";
	}
	else{
		$amount= $_POST['amount'];
		$email=$_COOKIE['khachhang'];
		$user=json_decode($this->model('usersmodel')->where("email='$email'"));
		if(!$user || count($user)===0){
			echo json_encode(['success'=>false, 'message'=>'Tài khoản không tồn tại']);
			
		}
		else{
			$id=$user[0]->id;
			$wallet=json_decode($this->model('walletsmodel')->where("users_id='$id'"));
			if(!$wallet || $wallet[0]->balance < $amount){
				echo json_encode(['success'=>false , 'message' => 'Số dư không đủ']);
			}
			else{
				$newBalance = $wallet[0]->balance - $amount;
				$so = $_POST['amount'];
				$this->model('walletsmodel')->capnhatsodu($newBalance, $id);
			
				$this->model('transactionsmodel')->add($wallet[0]->id, $so, 'withdraw', 'Rút tiền từ ví');

					echo json_encode([
					'success' => true,
					'amount' => $amount,
					'new_balance' => $newBalance,
					'amountPrefix' => '-',
				]);
			}
		}

	}
	}

	function deposit(){
		
		 if (!isset($_POST['amount']) || $_POST['amount'] <= 0) {
		 	echo json_encode(['success' => false, 'error' => 'Số tiền không hợp lệ']);
			
		 } else {

		 	$email=$_COOKIE['khachhang']; 
		 	$user=json_decode($this->model('usersmodel')->where("email='$email'"));
		 	$id = $user[0]->id;

		 	// Lấy thông tin ví
		 	$wallet = json_decode($this->model('walletsmodel')->where("users_id='$id'"));
		

		 	$so = $_POST['amount'];
		 	$newBalance = $wallet[0]->balance + $so;
		 	
		 	$this->model('walletsmodel')->capnhatsodu($newBalance,$id);
		 	   
			$this->model('transactionsmodel')->add($wallet[0]->id, $so, 'deposit', 'Nạp tiền vào ví');
			echo json_encode(['success' => true, 'amount' => $so, 'new_balance' => $newBalance,
				'amountPrefix' => '+']);
		 	// Cập nhật số dư ví
		 	// $this->model('walletsmodel')->capnhatsodu($newBalance, $id);
		 	
		 	// Trả về kết quả
		 	// echo json_encode(['success' => true, 'amount' => $so, 'new_balance' => $newBalance]);
			   
		 }
		 	
		}
		

	

	function check_wallet(){
		$email = $_COOKIE['khachhang'];
		
		// kiểm tra đăng nhập chưa -> xem login
		if(!@$_COOKIE['khachhang'] || @$_COOKIE['xacminh']!='approved'){
			// header("location:".$this->dm."login");
		}
	

		
	}

}