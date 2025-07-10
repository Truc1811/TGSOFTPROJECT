<?php
class hoivien extends Controller{
	public $hoivienmodel;
	
	// tuy bien
	//public $tailieumodel;
	
	function __construct(){

		// tuy bien
		$this->hoivienmodel=$this->model('hoivienmodel');
		
	}
	
	function chao(){
			header("location:".$this->dm);	
	}

	function kiemtratt($a){
		$mangdata=$this->mangdatacodinh();

		$mangdata['donhang']=$this->model('donhangmodel')->selecta();
		$mangdata['page']=json_encode('plugin/hoivien/'.$a);
		$mangdata['title_name']=json_encode('Đăng ký');
		$mangdata['img_menu']='';

		//view
		$this->view('web',$mangdata);
	}

	function mangdatacodinh(){
		//lấy data chung từ core/Controller.php 
		$mangdata=$this->data();

		//tùy biến điều chỉnh
		$mangdata['slider']=$this->model('quangcaomodel')->slider();
		$mangdata['visao']=$this->model('quangcaomodel')->quangcaotc();
		$mangdata['faqs']=$this->model('faqsmodel')->selectque('ORDER BY rank ASC');
		$mangdata['news']=$this->model('newsmodel')->selecta();
		$mangdata['service']=$this->model('servicemodel')->selecta();
		$mangdata['thuoctinh']=$this->model('thuoctinhmodel')->selecta();
		$mangdata['product']=$this->model('productmodel')->selecta();
		return $mangdata;	
	}

	function login(){
		$user=$_POST['email_dn'];
		$password=$_POST['matkhau_dn'];
		$kq=$this->hoivienmodel->checkemail($user,$password);
		if($kq){
			$ttuser=json_decode($this->hoivienmodel->where("email='$user' AND password='$password'"));
			$id=$ttuser[0]->id;
			$name=$ttuser[0]->name;
			$email=$ttuser[0]->email;
			$hotline=$ttuser[0]->hotline;
			$diachi=$ttuser[0]->diachi;

			$_SESSION['hoivien']="$id|$name|$email|$hotline|$diachi";
			setcookie('hoivien', $_SESSION['hoivien'], time()+86400, "/","", 0);
		} 
		header("location:".$this->dm.'hoivien/quantri');
	}

	function logout(){
		if($_COOKIE['hoivien']){
			setcookie('hoivien', $_SESSION['hoivien'], time()-86400, "/","", 0);
			if(@$_SESSION['hoivien']){
				unset($_SESSION['hoivien']);
			}
			if(@$_SESSION['access_token']){
				unset($_SESSION['access_token']);
				unset($_SESSION['token']);
			}
			header("location:".$this->dm);
		}
		else{	
			header("location:".$this->dm);
		}
	}

	function dangky(){
		$kq= json_decode($this->model('hoivienmodel')->addclient());
		$tr='';
		if($kq=='true'){
			$tr='Đăng ký thành công';
		} else {
			if($kq=='false'){

			$tr='Đăng ký thất bại';
			} else {

			$tr=$kq;
			}
		}
		$mangdata=$this->mangdatacodinh();

		$mangdata['page']=json_encode('plugin/hoivien/ketqua');
		$mangdata['title_name']=json_encode('Đăng ký');
		$mangdata['img_menu']='';
		$mangdata['tr']=json_encode($tr);


		//view
		$this->view('web',$mangdata);

	}

	function quantri($page=false,$num=false){
		$mangdata=$this->mangdatacodinh();
		$mang_u=array();
		if(@$_COOKIE['hoivien']){
			$mang_u=explode('|',$_COOKIE['hoivien']);
		}
		$id_user=$mang_u[0];

		if($page){ $p=$page; } else { $p=1;}
		if($num){ $n=$num; } else { $n=20;}

		$mangdata['sumpage']=json_encode($this->model('tuyendungmodel')->getpage($n,"id_user=$id_user"));
		$mangdata['numpage']=json_encode($p);

		$mangdata['dataa']=$this->model('tuyendungmodel')->getpagerawod($p,$n,"id_user=$id_user");

		$mangdata['page']=json_encode('plugin/hoivien/quantri');
		$mangdata['title_name']=json_encode('Quản trị');
		$mangdata['img_menu']='';
		$mangdata['mot']=json_encode('Quản trị');

		//view
		$this->view('web',$mangdata);
	}

	function dangtin(){
		$mang_u=array();
		if(@$_COOKIE['hoivien']){
			$mang_u=explode(',',$_COOKIE['hoivien']);
		}
		$id_user=$mang_u[0];
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$meta_description=$this->thuvienchuoi->lockytu($_POST['meta_description']);
		$meta_keywords=$this->thuvienchuoi->lockytu($_POST['meta_keywords']);
		$yeucau=$_POST['yeucau'];
		$mota=$_POST['mota'];
		$quyenloi=$_POST['quyenloi'];
		$hannop = strtotime($_POST['hannop']);
		$hide=2;
		$rank=$_POST['rank'];
		$_POST['congviec'][]=$_POST['gioitinh'];
		$congviec=implode('|',$_POST['congviec']);

		$timestamp=time();
		$image=$this->thuvien('thuvienfile')->image('image');
		$column='name,khongdau,meta_description,meta_keywords,yeucau,mota,quyenloi,hide,timestamp,image,rank,congviec,id_user,hannop';
		$va="'$name','$khongdau','$meta_description','$meta_keywords','$yeucau','$mota','$quyenloi','$hide','$timestamp','$image','$rank','$congviec','$id_user','$hannop'";
		$this->model('tuyendungmodel')->insert($column,$va);
		header("location:".$this->dm.'hoivien/quantri');
		

	}

	function updatematkhau(){
		$email=$_POST['email'];
		$password=$_SESSION['guimatkhau'];
		$va="password='$password'";
		$this->hoivienmodel->update($va,"email='$email'");
	}

	function trangthaihoivien(){
		$id=$_POST['id'];
		$trangthai=$_POST['trangthai'];
		if($trangthai==1){
			$va="hide=2";
		} else {
			$va="hide=1";
		}

		$this->model('hoivienmodel')->update($va,"id=$id");
	}

	function capnhathoivien(){
		$mang_u=explode('|',$_COOKIE['hoivien']);
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$khongdau=$this->thuvienchuoi->khongdau($name);
		$name=$this->thuvienchuoi->lockytu($name);
		$hotline=$_POST['hotline'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		
		$timestamp=time();

		$id=$_POST['id'];
		// $image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		// $hoso=$this->thuvien('thuvienfile')->imageupdate('hoso','hoso1');
		$va="name='$name',khongdau='$khongdau',hotline='$hotline',diachi='$diachi',email='$email'";
		$this->model('hoivienmodel')->update($va,"id=$id");
		setcookie('hoivien',$_SESSION['hoivien'], time()-86400, "/","", 0);
		$_SESSION['hoivien']="$id|$name|$email|$hotline|$diachi";
		setcookie('hoivien',$_SESSION['hoivien'], time()+86400, "/","", 0);

		header("location:".$this->dm.'hoivien/quantri');	

	}

	function capnhatttdh(){
		$status=$_POST['status'];
		$id=$_POST['id'];
		$va="status='$status'";
		$this->model('donhangmodel')->update($va,"id=$id");
		
	}


}
?>
