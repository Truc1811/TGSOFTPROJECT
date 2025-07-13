<style type="text/css">
    .hinh_sp{
        height: 75vw;
    }
    .text_pink{
        color: #ff2f98;
    }
    .text_blue{
        color: #82c4f8;
    }
    .frame_plus{
        padding: 5px;
        border: 2px solid #FFFFFF;
        border-radius: 50%;
        width: fit-content;
    }
    .father_frame{
        position: relative;
    }
    .fathe_frame:hover .child_frame{
        position: absolute;
        left: 45%;
        bottom: 45%;
        opacity: 1;
        transition-duration: 0.5s !important;
    }
    .child_frame{
        position: absolute;
        left: 45%;
        bottom: 45%;
        opacity: 0;
    }
   
    .new_frame{
        position: absolute;
        top: 5px;
        left: 5px;
        background-color: red;
        color: #fff;
        padding: 2px 4px;
    }
     .price-line{
        text-decoration: line-through;
    }
    @media(min-width: 768px){
        .hinh_sp{
            height: 16vw;
        }
    }
    @media(min-width: 1400px){
        .hinh_sp{
            height: 16vw;
        }
    }
</style>

<?php
class locdata extends Controller{
    public $sanphammodel;

	function __construct(){
		$this->sanphammodel=$this->model('sanphammodel');

        //tuy bien
        // $this->quangcaomodel=$this->model('quangcaomodel');
        // $this->tintucmodel=$this->model('tintucmodel');
	}
	
	//methods default
	function chao(){
        
		//view	
	}

    function loc(){
        $id=$_POST['id'];
        if(@$_SESSION['mangloc']){
            if(in_array($id, $_SESSION['mangloc'])){
                foreach ($_SESSION['mangloc'] as $key => $value) {
                    if($value==$id){
                        unset($_SESSION['mangloc'][$key]);
                    }
                }
            } else {
                $_SESSION['mangloc'][]=$id;
            }

        } else {
            $_SESSION['mangloc']=array();
            $_SESSION['mangloc'][]=$id;
        }

       $tatca=json_decode($this->sanphammodel->selecta());
       $mangin=array();
       $mangxet=array();
        if(count($_SESSION['mangloc'])>0){
           foreach ($_SESSION['mangloc'] as $key => $value) {
               $idl=$value;
               foreach ($tatca as $key => $val) {
                   if(in_array($idl, explode(',', $val->thuoctinh))){
                        if(!in_array($key,$mangxet)){
                            $mangin[]=$val;
                            $mangxet[]=$key;
                        }
                   }
               }
           }

        } else {
            foreach ($tatca as $key => $val) {
                        $mangin[]=$val;
            }
        }

       foreach ($mangin as $key => $value) {
           // code...
       
?>
                <div class="d-flex align-items-stretch flex-wrap load_sp mb-3">
            <?php
                $perc=0;
                foreach ($sanpham as $key => $value) {
            ?>
            <div class="col-xxl-3 col-md-3 col-6 d-xxl-block d-md-block p-2 fathe_frame position-relative ">
                <div class="card shadow mb-4 cursor h-100" onclick="window.location.href='san-pham/<?php echo $value->khongdau; ?>'">
                   <div class="father_frame">
                                    <?php 
                                    $perc=100-($value->discount/$value->price)*100;
                                    if (($value->discount)==0) {
                                        echo '<span>'.'</span>';
                                    } else {
                                         echo '<span class="new_frame fs-12 load_per">'.'-'.round($perc,1).'%'.'</span>' ;
                                    }
                                    ?>
                              
                             <div class="hinh_sp" style="background-image: url(public/upload/<?php echo $value->image; ?>); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
                          </div>
                  <div class="card-body">
                    <div class="card-title text-dark fs-14 text-center hover_name"><?php echo $value->name; ?></div>
                 
                    <div class="card-text fs-6 text_blue d-flex justify-content-center fw-bold">
                    <?php 
                        if (($value->discount)==0) {
                            echo '<div>'.(number_format($value->price*$a)).'đ'.'</div>';
                        } else {
                            echo '<div class="price-line text_pink pe-1">'.(number_format($value->price)).'đ'.'</div>';
                            echo '<div>'.(number_format($value->discount*$a)).'đ'.'</div>';
                        }
                    ?>
                    </div>
                  </div>
                </div>
                <div class="child_frame gap-2">
                   <div class="frame_plus text-white text-center p-2 cursor" onclick="window.location.href='san-pham/<?php echo $value->khongdau; ?>'">
                        <i class="bi bi-plus" style="color: #fff"></i>
                      </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    

<?php 
        }
    }
}
?>