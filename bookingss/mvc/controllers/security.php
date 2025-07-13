
<?php
class security extends Controller{
	private $user;
	public $password;
	private $id;
	private $l;
	public $usermodel;
	public $khachhang;
	
	function __construct(){
		$this->khachhang=$this->thuvien('thuvienmkh');
		$this->user=$this->khachhang->getu();
		$this->password=$this->khachhang->getp();
		$this->id=$this->khachhang->geti();
		$this->l=$this->khachhang->getl();
		
		$this->checklogin();//kiểm tra có đang dăng nhập không
		$this->usermodel=$this->model('usermodel');//tạo model
	}
	
	//methods default
	function chao(){
		//view
		$this->view('security',array(
					'page'=>'security',
					'dm'=>json_encode($this->dm)
				));
		
	}
	
	//kiểm tra user đăng nhập
	function checkuser(){
		$user=$_POST['user'];
		$password=$_POST['password'];
		$kq=$this->usermodel->check($user,$password);
		if($kq){
			$ttuser=json_decode($this->usermodel->where("user='$user' AND password='$password'"));
			$id=$ttuser[0]->id;
			$l=$ttuser[0]->data;
			$_SESSION[$this->user]=$user;
			$_SESSION[$this->password]=$password;
			$_SESSION[$this->id]=$id;
			$_SESSION[$this->l]=$l;
			setcookie($this->user, $user, time()+86400, "/","", 0);
			setcookie($this->password, $password, time()+86400, "/","", 0);
			setcookie($this->id, $id, time()+86400, "/","", 0);
			setcookie($this->l, $l, time()+86400, "/","", 0);
			header("location:".$this->dm."admin");
		} else {
			$tb='Thông tin đăng nhập không hợp lệ. Vui lòng thử lại';
			$tb=json_encode($tb);
			//view
			$this->view('security',array(
						'dulieu'=>$tb,
						'dm'=>json_encode($this->dm)
						));
		}
	}
	
	//kiểm trang tình trạng đăng nhập
	function checklogin(){
		if(!@$_SESSION[$this->user] && !@$_SESSION[$this->password]){
				if(@$_COOKIE[$this->user] && @$_COOKIE[$this->password]){
					$_SESSION[$this->user]=$_COOKIE[$this->user];
					$_SESSION[$this->password]=$_COOKIE[$this->password];
					$_SESSION[$this->id]=$_COOKIE[$this->id];
					$_SESSION[$this->l]=$_COOKIE[$this->l];
					header("location:".$this->dm."admin");
				} 
		} else {
			header("location:".$this->dm."admin");
		}
	}
}
?>