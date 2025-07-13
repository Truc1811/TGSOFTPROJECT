<?php
class tracuu extends Controller{
    // public $tintucmodel;

	function __construct(){
		// $this->tintucmodel=$this->model('tintucmodel');

        //tuy bien
        // $this->quangcaomodel=$this->model('quangcaomodel');
        // $this->tintucmodel=$this->model('tintucmodel');
	}
	
	//methods default
	function chao(){
        
		//view	
	}

    function tracuubaohanh(){
        $so = $_POST['so'];
        $this->baohanhmodel = $this->model('baohanhmodel');
        $kq = $this->baohanhmodel->where("telephone='$so'");
        $mangin = json_decode($kq);
        if(count($mangin)>=1){
            foreach ($mangin as $key => $value) {
                $mangtt=explode('|', $value->information);
            
?>
        <div class="text-center fs-5 fw-bold">
            Chứng nhận bảo hành phim cách nhiệt 3M
        </div>

        <!-- ttkh -->
        <div class="fw-bold mt-3 p-0">
            Thông tin khách hàng
        </div>
        <div style="height: 0.6vw; background: linear-gradient(to right, #33ccff 0%, #000099 46%);"></div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Họ và tên 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $value->name; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Số điện thoại 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $value->telephone; ?>
            </div>
        </div>

        <!-- ttsp -->
        <div class="fw-bold mt-3 p-0">
            Thông tin sản phẩm
        </div>
        <div style="height: 0.6vw; background: linear-gradient(to right, #33ccff 0%, #000099 46%);"></div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Kính chắn gió 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[0]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Kính hông trước 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[1]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Kính hông sau 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[2]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Kính hông hàng thứ 3 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[3]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Kính lưng
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[4]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Cửa sổ trời 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[5]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Ngày dán FILM
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo date('d-m-Y',$value->startdate); ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Ngày hết hạn 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo date('d-m-Y',$value->enddate); ?>
            </div>
        </div>

         <!-- ttkh -->
        <div class="fw-bold mt-3 p-0">
            Thông tin phương tiện
        </div>
        <div style="height: 0.6vw; background: linear-gradient(to right, #33ccff 0%, #000099 46%);"></div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Thương hiệu
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[6]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Mẫu xe 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[7]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 ">
            <div class="col-6 col-md-4">
               Biển số
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[8]; ?>
            </div>
        </div>
        <div class="d-flex mt-3 mb-5">
            <div class="col-6 col-md-4">
               Năm sản xuất 
            </div>
            <div class="col-6 col-md-8">
                : &ensp;<?php echo $mangtt[9]; ?>
            </div>
        </div>
    

<?php 
            }
        } else{
                echo '<p>Cannot find your maintain service</p>';
        }
    }
 
    	
}
?>