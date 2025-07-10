<?php
class testonline extends Controller{
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
    public $answertestmodel;
    public $testonlinemodel;
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
        $this->answertestmodel=$this->model('answertestmodel');
        $this->testonlinemodel=$this->model('testonlinemodel');
        $this->tintucmodel=$this->model('tintucmodel');
	}
	
	//methods default
	function chao(){
        $this->all();
		//view	
	}

    function mangdatacodinh(){
        $mangdata=array(            
            'menu1'=>$this->menumodel->whereod('level=1','rank'),
            'menu2'=>$this->menumodel->whereod('level=2','rank'),
            'cauhinh'=>$this->configurationmodel->select(),
            'matheme'=>json_encode($this->matheme),
            'dm'=>json_encode($this->dm)
        );

        //tuy bien
        $mangdata['tailieutc']=$this->tailieumodel->getpagerod(1,4);
        $mangdata['quangcaor']=$this->quangcaomodel->quangcaor();
        $mangdata['tintucf']=$this->tintucmodel->tintucf();
        
        return $mangdata;
    }

    function test($id=false){
        $mangdata=$this->mangdatacodinh();
        
        //tuy bien
        $ob=json_decode($this->testonlinemodel->where("id=$id"));
        if($ob[0]->security==2){ $this->checklogin(); }
        $mangdata['page']=json_encode('plugin/testonline/test');
        $mangdata['answertest']=$this->answertestmodel->whereoa("codetest=$id",'id');
        $mangdata['testonline']=json_encode($ob);
        $mangdata['title_name']=json_encode('Test');

        //goi view
        $this->view('web',$mangdata);
    }

    function all(){
        $mot=$_SESSION['mot'];
        $this->dataamodel=$this->model(str_replace('-','', $mot).'model');      
        $obm=json_decode($this->menumodel->where("link='$mot' AND level=1"));
        $page=json_encode($obm[0]->name);

        $mangdata=$this->mangdatacodinh();
        $mangdata['page']=json_encode('plugin/testonline/'.$_SESSION['mot']);
        $mangdata['title_name']=json_encode($obm[0]->name);
        
        //tuy bien
        $mangdata['dataa']=$this->dataamodel->getpageraod(1,9);      
        unset($_SESSION['mot']);
        
        //view
        $this->view('web',$mangdata);   
    }

    function listr($kd=false,$p=false,$n=false){
        if(@!$p){ $p=1; }
        if(@!$n){ $n=30; }
        if(@!$kd){ $kd=$_SESSION['hai'];}
        $mot=$_SESSION['mot'];
        $hai=$_SESSION['hai'];

        $this->dataamodel=$this->model(str_replace('-','', $mot).'model');
        $mangdata=$this->mangdatacodinh();
        if ($this->menumodel->wherec("khongdau='$hai'")) {
            $obm=json_decode($this->menumodel->where("khongdau='$hai'"));
            $mangdata['page']=json_encode('plugin/testonline/'.$_SESSION['mot'].'list');
            $mangdata['title_name']=json_encode($obm[0]->name);
            $mangdata['dataa']=$this->testonlinemodel->getpagerwod($p,$n,$kd,'menu');        
            
        } else {
            header("location:".$this->dm);
        }

        //tuy bien
        
        unset($_SESSION['mot']);
        unset($_SESSION['hai']);
        //view
        $this->view('web',$mangdata);   
    }

    function ketqua(){
        //$this->checklogin();
            if(@$_SESSION['phone']){
                $this->goithuvien('thuviendata8')->bangdata('updatediem');
            }
            
        
            //tuy bien
            $mangdata=$this->mangdatacodinh();
            $id=$_SESSION['idt'];
            $mangdata['testonline']=$this->testonlinemodel->where("id=$id");
            $mangdata['page']=json_encode('plugin/testonline/ketqua');
            $mangdata['title_name']=json_encode('Kết quả');

            unset($_SESSION['tg']);

            //goi view
            $this->view('web',$mangdata);       
    }

    function erros(){
         //tuy bien
        $mangdata=$this->mangdatacodinh();
        $mangdata['page']=json_encode('plugin/testonline/erros');
        $mangdata['title_name']=json_encode('Error');

        unset($_SESSION['tg']);

        //goi view
        $this->view('web',$mangdata);
    }

    function cp(){
        $a=$_POST['a'];
        $_SESSION['tg']=$a;
    }

    function tinhdiem(){
        $id=$_POST['id'];
        $diem=$_POST['diem'];
        $idt=$_POST['idt'];
        $_SESSION['diem'][$id]=$diem;        
        $_SESSION['idt']=$idt;
    }

    function checklogin($id=false){
        if(!@$_SESSION[$this->user] && !@$_SESSION[$this->password]){
            if(@$_COOKIE[$this->user] && @$_COOKIE[$this->password]){
                $_SESSION[$this->user]=$_COOKIE[$this->user];
                $_SESSION[$this->password]=$_COOKIE[$this->password];
                $_SESSION[$this->id]=$_COOKIE[$this->id];
                $_SESSION['an']=2;
                $_SESSION['phone']=$_SESSION[$this->user];
            } else {
                $this->erros();
            }
        }   
    }

    function loaicauhoi(){
        $n=$_POST['n'];
        $i=$_POST['i'];
        switch($n){
            case 1:
                echo "<textarea class='input_text' name='question$i'></textarea>";
                break;
            case 5:
                echo "<textarea class='input_text' name='question$i'></textarea>";
                echo "<input class='input_text' type='text' name='image$i'/>";
                break;
            default:
                echo "<textarea class='input_text' name='question$i'></textarea>";
                echo "<input class='input_text' type='file' name='image$i'/>";
        }
    }
	
}
?>