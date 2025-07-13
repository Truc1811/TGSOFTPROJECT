<?php
class vi extends Controller{
	// quy dinh chỉ lấy dataa các page có model
	public $mangvimodel;

	// tùy biến điều chỉnh
	public $newsmodel;
	
	function __construct(){
		// tùy biến điều chỉnh cot trai hay cot phai
		
	}
	
	function chao(){
			$this->all();	
	}

	function mangdatacodinh(){
		//lấy data chung từ core/Controller.php 
		$mangdata=$this->data();

		//tùy biến điều chỉnh
	
		return $mangdata;	
	}

	
	function all($p=false,$id=false){
		$mangdata=$this->mangdatacodinh();

		$a= $p?:1;
		$sotaptin=20;
		
		unset($_SESSION['mot']);
		$mangdata=$this->data();
		$mangdata['page']=json_encode('theme/'.$this->matheme.'/trangchu');
		//$mangdata['thongtintaisan']=$this->model('thongtintaisanmodel')->selecta();
		
		//view
		$this->view('web',$mangdata);	
	}

	
	function listr($p=false,$n=false,$kd=false){
		if(@!$p){ $p=1; }
		if(@!$n){ $n=20; }
		if(@!$kd){ $kd=$_SESSION['hai'];}
		$mot=$_SESSION['mot'];
		$hai=$_SESSION['hai'];
		

		$mangdata=$this->mangdatacodinh();
		if ($this->menumodel->wherec("khongdau='$hai'")) {
			if (in_array($mot,$this->mangvimodel)) {
				$this->dataamodel=$this->model(str_replace('-','', $mot).'model');
			}
			$obm=json_decode($this->menumodel->where("khongdau='$hai'"));
			$mangdata['page']=json_encode('theme/'.$this->matheme.'/'.$_SESSION['mot'].'list');
			$mangdata['title_name']=json_encode($obm[0]->name);
			$mangdata['t']=json_encode($obm[0]->image);
			$mangdata['mot']=json_encode($mot);
			$mangdata['hai']=json_encode($hai);
			if (in_array($mot,$this->mangvimodel)) {
				$mangdata['dataa']=$this->dataamodel->getpagerwod($p,$n,$kd,'menu');
				$mangdata['sotrang']=json_encode($this->dataamodel->getpagelist($n,$kd,'menu'));		
				$mangdata['trang']=json_encode($p);		
				$mangdata['kd']=json_encode($kd);		
			}

			//tuy bien
		
			unset($_SESSION['mot']);
			unset($_SESSION['hai']);
			//view
			$this->view('web',$mangdata);


		} else {
			$this->detail($hai);
		}

			
	}

	function detail($khongdau,$id=false){
		$mot=$_SESSION['mot'];
		$id=$id?:0;
		//set lai trang thai loading cua san pham detail
		$_SESSION['laydoday']='false';
		$_SESSION['laykichthuoc']='false';
		if (in_array($mot,$this->mangvimodel)) {
			$this->dataamodel=$this->model(str_replace('-','', $mot).'model');
		}

		$mangdata=$this->mangdatacodinh();
		if ($this->dataamodel->wherec("khongdau='$khongdau'")) {
			$obm=json_decode($this->dataamodel->where("khongdau='$khongdau'"));		
			$mangdata['page']=json_encode('theme/'.$this->matheme.'/'.$_SESSION['mot'].'detail');
			$mangdata['title_name']=json_encode($obm[0]->name);
			$mangdata['meta_keywords']=json_encode($obm[0]->meta_keywords);
			$mangdata['mot']=json_encode($mot);
			$mangdata['id']=json_encode($id);
			$mangdata['spop']=$this->sanphammodel->selecta();
			if (in_array($mot,$this->mangvimodel)) {	
				$mangdata['dataa']=json_encode($obm);	
			} 

			// lay do day
			$doday=array();
			$thuoctinh=json_decode($this->model('thuoctinhmodel')->selecta());
                foreach ($thuoctinh as $key => $value) {
                    if(in_array($value->id,explode(',',$obm[0]->thuoctinh))){
                        if($value->nhomthuoctinh==11){
                        	$doday[]=array($value->id,$value->name);
                        }
                    }
                }

            if(count($doday)>0){
            	$mangdata['doday']=json_encode($doday);
            }

            // lay kich thuoc
			$kichthuoc=array();
			$thuoctinh=json_decode($this->model('thuoctinhmodel')->selecta());
                foreach ($thuoctinh as $key => $value) {
                    if(in_array($value->id,explode(',',$obm[0]->thuoctinh))){
                        if($value->nhomthuoctinh==4){
                        	$kichthuoc[]=array($value->id,$value->name);
                        }
                    }
                }

            if(count($kichthuoc)>0){
            	$mangdata['kichthuoc']=json_encode($kichthuoc);
            }







		} else {
			header("location:".$this->dm);
		}
		
		//tuy bien
		
		// record lien quan level 2
		if(in_array($mot,['san-pham'])){
			$mangdata['datab']=$this->dataamodel->recordtt($khongdau,6,str_replace('-','', $mot),1);
		}
		// record lien quan level 1
		if(in_array($mot,['tin-tuc'])){
			$mangdata['datab']=$this->dataamodel->recordtt($khongdau,3,str_replace('-','', $mot),1);
		}

		

		unset($_SESSION['mot']);
		//view
		$this->view('web',$mangdata);	
	}
	
	
}
?>
