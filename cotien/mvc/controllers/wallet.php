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


			$limit=6;
			$start=0;
			$end=$start+$limit;
			$total = count($transactions);
			if($end>$total ){
				$end=$total;
			}
			$total_pages = ceil($total / $limit);

			$mangdata = $this->mangdatacodinh();
			$mangdata['wallet'] = json_encode($wallet[0]->balance);
			$mangdata['transactions'] = $this->model('transactionsmodel')->phantrangarray(1, $limit, $transactions);;
			$mangdata['page'] = json_encode('walletdefault');
			$mangdata['total'] = json_encode($total_pages);
			$mangdata['tong'] = json_encode($total);
			$mangdata['limit'] = json_encode($end);

			$this->view('admin', $mangdata);
			

		}
		
	}

	function withdraw() {
	
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
		 }
		 	
		}
		

	

	function check_wallet(){
		$email = $_COOKIE['khachhang'];
		
		// kiểm tra đăng nhập chưa -> xem login
		if(!@$_COOKIE['khachhang'] || @$_COOKIE['xacminh']!='approved'){
			// header("location:".$this->dm."login");
		}
	

		
	}

	function upgiaodich()
	{
		// Báo cho client biết đây là JSON
		// lấy ra chi tiết mảng
		$pggd = $_POST['pggd'];
		$limit=6;
		$start=($pggd-1)*$limit;
		$end=$start+$limit;

		$email=$_COOKIE['khachhang'];
		$user=json_decode($this->model('usersmodel')->where("email='$email'"));
		$id=$user[0]->id;
		$wallet= json_decode($this->model('walletsmodel')->where("users_id='$id'"));
		$wallet_id=$wallet[0]->id;
		$transactions= json_decode($this->model('transactionsmodel')->where("wallet_id='$wallet_id'"));
		$total=count($transactions);
		if($end>$total ){
			$end=$total;
		}
		$mang=json_decode($this->model('transactionsmodel')->phantrangarray($pggd, $limit, $transactions));
		require "mvc/views/admin/render.php";

	}

}