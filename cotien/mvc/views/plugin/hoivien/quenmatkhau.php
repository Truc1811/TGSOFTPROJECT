<?php 
	class gt
    {
        
        function __construct($name, $meta_description, $image){
            $this->name=$name;
            $this->meta_description=$meta_description;
            $this->image=$image;
        }
    }
	$datagt = array(
       array('Việc Làm Thêm Ngành Tổ Chức Sự Kiện Và Những Điều Cần Biết','Việc làm thêm ngành tổ chức sự kiện và những điều cần biết[…]	','lt1.jpg'),
       array('Topica Tuyển Dụng Và Kinh Nghiệm Phỏng Vấn Bạn Nên Biết','Topica tuyển dụng và kinh nghiệm phỏng vấn bạn nên biết sẽ giúp bạn[…]','lt2.jpg'),
       array('CGV Tuyển Dụng Part Time Và Những Thông Tin Cần Biết','CGV Tuyển dụng part time và những thông tin cần biết về hồ sơ, mẫu đơn[…]','lt3.jpg'),
       array('Lotte Cinema Tuyển Dụng Part Time Và Kinh Nghiệm Phỏng Vấn','Lotte Cinema tuyển dụng part time và kinh nghiệm phỏng vấn sẽ giúp cho các[…]','lt4.jpg'),
       array('Bản Tin Tổng Hợp Việc Làm Thêm Ngày 06/10/2020','Bản Tin Tổng Hợp Việc Làm Thêm Ngày 06/10/2020','lt5.jpg'),
    );

    
    $gt = array();
    foreach($datagt as $key => $value){
        array_push($gt,new gt($value[0],$value[1],$value[2]));
    }
?>
<style type="text/css">
	
	@media (min-width: 768px){
		
	}
	@media (min-width: 1400px){
		
	}
</style>
<div class="row p-7 py-3">
	<div class="col-md-12 col-12 d-flex justify-content-center">
		<?php require "mvc/views/plugin/quenmatkhau/quenmatkhau.php"; ?>
	</div>
</div>

