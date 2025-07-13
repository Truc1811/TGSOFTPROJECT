<?php
class hocvien extends Controller{
	private $matheme;
	private $user;
	private $password;
	private $id;
	public $khachhang;
	public $menumodel;
	public $configurationmodel;

	// tuy bien
	public $tailieumodel;
	public $quangcaomodel;	
	public $khoahocmodel;
	public $hocvienmodel;
	public $testonlinemodel;
	public $answertestmodel;
	public $tintucmodel;
	
	function __construct(){
		$this->khachhang=$this->goithuvien('thuvienmkh');
		$this->matheme=$this->khachhang->gettheme();
		$this->user=$this->khachhang->getuk();
		$this->password=$this->khachhang->getpk();
		$this->id=$this->khachhang->getik();
		$this->menumodel=parent::model('menumodel');
		$this->configurationmodel=$this->model('configurationmodel');

		//tuy bien
		$this->tailieumodel=$this->model('tailieumodel');
		$this->quangcaomodel=$this->model('quangcaomodel');
		$this->khoahocmodel=$this->model('khoahocmodel');
		$this->hocvienmodel=$this->model('hocvienmodel');
		$this->testonlinemodel=$this->model('testonlinemodel');
		$this->tintucmodel=$this->model('tintucmodel');

	}
	
	function chao(){
		$this->dangky();
	}
	
	function mangdatacodinh(){
		$mangdata=array(			
			'menu1'=>$this->menumodel->whereod('level=1','rank'),
			'menu2'=>$this->menumodel->whereod('level=2','rank'),
			'cauhinh'=>$this->configurationmodel->select(),
			'matheme'=>json_encode($this->matheme),
			'dm'=>json_encode($this->dm),
		);

		//tuy bien
		$mangdata['tailieutc']=$this->tailieumodel->getpagerod(1,4);
		$mangdata['quangcaor']=$this->quangcaomodel->quangcaor();
		$mangdata['testonline']=$this->testonlinemodel->select();		
		$mangdata['tintucf']=$this->tintucmodel->tintucf();		
	
		return $mangdata;
	}

	function dangky(){
		$mangdata=$this->mangdatacodinh();
		
		// tuy bien		
		$mangdata['title_name']=json_encode('Đăng ký khóa học');		
		$mangdata['page']=json_encode('plugin/hocvien/dang-ky-khoa-hoc');	
		$mangdata['khoahoc']=$this->khoahocmodel->select();	
		
		//view
		$this->view('web',$mangdata);
	}
	
	function ghidanh(){
		if(@$_POST['bn']){
			$test=$_POST['phone'];
			if($this->hocvienmodel->wherec("phone='$test'")>0){
				$kq=$this->goithuvien('thuviendata5')->bangdata('updatec');
			} else {
				$kq=$this->goithuvien('thuviendata5')->bangdata('add');
			}
			$mangdata=$this->mangdatacodinh();
			
			// tuy bien
			$mangdata['title_name']=json_encode('Kết quả đăng ký');		
			$mangdata['page']=json_encode('plugin/hocvien/ket-qua-dang-ky');		
			$mangdata['kq']=$kq;	
				
			//view
			$this->view('web',$mangdata);
			
		} else {
			$this->dangky();	
		}
		
	}
	
	function dangnhap(){
		if(@$_POST['bn']){
			$user=$_POST['user'];
			$password=$_POST['password'];
			if($this->hocvienmodel->check($user,$password)){
				$ttuser=json_decode($this->hocvienmodel->where("user='$user' AND password='$password'"));
				$id=$ttuser[0]->id;
				$_SESSION[$this->id]=$id;
				$_SESSION[$this->user]=$user;
				$_SESSION[$this->password]=$password;
				$_SESSION['an']=2;
				$_SESSION['phone']=$user;
				setcookie($this->user, $user, time()+86400, "/","", 0);
				setcookie($this->password, $password, time()+86400, "/","", 0);
				setcookie($this->id, $id, time()+86400, "/","", 0);
				header("location:".$this->dm."hoc-vien/quanly");
			} else {
				$this->checkuser('Thông tin không hợp lệ. Vui lòng thử lại.');	
			}
		} else {
			$this->checkuser();
		}
	}
	
	function quanly(){
		$this->checklogin();
		$id=$_SESSION[$this->id];
		$ob=json_decode($this->hocvienmodel->where("id=$id"));
		$mangdata=$this->mangdatacodinh();
		
		// tuy bien
		$mangdata['title_name']=json_encode('Tài khoản học viên');		
		$mangdata['page']=json_encode('plugin/hocvien/quanly');		
		$mangdata['dataa']=json_encode($ob);	
		$mangdata['datab']=$this->khoahocmodel->in('id',$ob[0]->dichvu);	

		//view
		$this->view('web',$mangdata);
	}
	
	function edit(){
		$this->checklogin();
		$id=$_SESSION[$this->id];
		if(@$_POST['bn']){
			$this->goithuvien('thuviendata5')->bangdata('updatek');
			header("location:".$this->dm."hoc-vien/quanly");
		} else {
			$ob=json_decode($this->hocvienmodel->where("id=$id"));
			$mangdata=$this->mangdatacodinh();

			//tuy bien
			$mangdata['title_name']=json_encode('Cập nhật tài khoản');		
			$mangdata['page']=json_encode('plugin/hocvien/edit');		
			$mangdata['dataa']=json_encode($ob);	
					
			//view
			$this->view('web',$mangdata);
		}
	}
	
	
	
	function checkuser($a=false){
			if(@$_SESSION[$this->user] && @$_SESSION[$this->password]){
					header("location:".$this->dm."hoc-vien/quanly");
			}
			$mangdata=$this->mangdatacodinh();

			// tuy bien
			$mangdata['title_name']=json_encode('Đăng nhập');		
			$mangdata['page']=json_encode('plugin/hocvien/dangnhap');		
			$mangdata['a']=json_encode($a);	

			//view
			$this->view('web',$mangdata);
		
	}
	
	function logout(){
		if($_SESSION[$this->user] && $_SESSION[$this->password]){
			$user=$_SESSION[$this->user];
			$password=$_SESSION[$this->password];
			$id=$_SESSION[$this->id];
			setcookie($this->user, $user, time()-86400, "/","", 0);
			setcookie($this->password, $password, time()-86400, "/","", 0);
			setcookie($this->id, $id, time()-86400, "/","", 0);
			unset($_SESSION[$this->user]);
			unset($_SESSION[$this->password]);
			unset($_SESSION[$this->id]);
			unset($_SESSION['an']);
			unset($_SESSION['phone']);
			header("location:".$this->dm."hoc-vien/dangnhap");
		}
		else{	
			header("location:".$this->dm."hoc-vien/dangnhap");
		}
	}
	
	function checklogin(){
		if(!@$_SESSION[$this->user] && !@$_SESSION[$this->password]){
			if(@$_COOKIE[$this->user] && @$_COOKIE[$this->password]){
				$_SESSION[$this->user]=$_COOKIE[$this->user];
				$_SESSION[$this->password]=$_COOKIE[$this->password];
				$_SESSION[$this->id]=$_COOKIE[$this->id];
				$_SESSION['an']=2;
				$_SESSION['phone']=$_SESSION[$this->user];
			} else {
				header("location:".$this->dm."hoc-vien/dangnhap");
			}
		}
	}
	
	
	
	
	
	
	
	
	
	
}
?>