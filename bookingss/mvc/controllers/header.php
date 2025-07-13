<?php
class header extends Controller{
	
	public $menumodel;
	
	function __construct(){
		$this->menumodel=$this->model('menumodel');//tạo model
		//$this->usermodel=parent::model('usermodel');
	}

	function loadheader(){
		$menu1=json_decode($this->menumodel->where("level=1"));
		$menu2=json_decode($this->menumodel->where("level=2"));
		$menu3=json_decode($this->menumodel->where("level=3"));
		$id=$_POST['id'];
		$ob=json_decode($this->menumodel->where("id=$id"));
		if($ob[0]->level==1){

?>
	<script type="text/javascript">
    $(document).ready(function(){
      // menu di dong
        $('.dong-menu-dd-2').click(function(){
          $('.menu-dd-2').animate({
              right: '100%'
            },300,'swing',function(){

          });
        });

        $('.mo-menu-dd-3').click(function(){
        	var id=$(this).data('id'); // lấy giá trị input
          $.post(
              'header/loadheader', // URL 
              {'id' : id},  // Data
              function(lh){ // Success
                $('.menu-dd-3').html(lh);
              }, 
              'text' // dataTyppe
          );
          $('.menu-dd-3').animate({
              left: '0%'
            },300,'swing',function(){
            	
          });
        });
        
    });
  </script>

			<div class="container-fluid min-vh-100 bg-light p-0">
	      <div class="row g-0">
	        <div class="col-6 bg-dark border-bottom d-flex align-items-center justify-content-start p-2">
	          <a class="text-white text-decoration-none" href="#"><?php echo $ob[0]->name; ?></a>
	        </div>
	        <div class="col-6 bg-dark border-bottom d-flex align-items-center justify-content-end p-2" style="margin-left: -1px;">
	          <button class="btn btn-outline-light dong-menu-dd-2"><i class="bi bi-x-lg"></i></button>
	        </div>
	        <?php
            foreach ($menu2 as $va2) {
                if(in_array($id, explode(',', $va2->father_level))){
                	$m3=array();
				          foreach ($menu3 as $va3) {
				            if(in_array($va2->id, explode(',', $va3->father_level))){ $m3[]=$va3; }
				          } 
              
	        ?>
		        <div class="row border-bottom justify-content-between g-0">
		          <div class="col py-2 px-2" onclick="window.location.href='<?php echo $va2->link.'/'.$va2->khongdau; ?>'">
		            <?php echo $va2->name; ?>
		          </div>
		          <?php
		          if(count($m3)>0){
		          ?>
		          <div class="col-2 text-center border-start">
		            <button class="btn mo-menu-dd-3" data-id="<?php echo $va2->id; ?>"><i class="bi bi-arrow-bar-right"></i></button>
		          </div>
		          <?php
		          }
		          ?>
		        </div>
	        <?php
	        }}
	        ?>
	      </div>
	    </div>

<?php
		} else if($ob[0]->level==2){
?>
			<script type="text/javascript">
		    $(document).ready(function(){
		      // menu di dong
		        $('.dong-menu-dd-3').click(function(){
		          $('.menu-dd-3').animate({
		              left: '100%'
		            },300,'swing',function(){

		          });
		        });

		    });
		  </script>
			<div class="container-fluid min-vh-100 bg-light p-0">
	      <div class="row g-0">
	        <div class="col-6 bg-dark border-bottom d-flex align-items-center justify-content-start p-2">
	          <a class="text-white text-decoration-none" href="#"><?php echo $ob[0]->name; ?></a>
	        </div>
	        <div class="col-6 bg-dark border-bottom d-flex align-items-center justify-content-end p-2"
	        style="margin-left: -1px;" >
	          <button class="btn btn-outline-light dong-menu-dd-3"><i class="bi bi-x-lg"></i></button>
	        </div>
	        <?php
            foreach ($menu3 as $va3) {
                if(in_array($id, explode(',', $va3->father_level))){  
              
	        ?>
	        <div class="row border-bottom justify-content-between g-0">
	          <div class="col py-2 px-2" onclick="window.location.href='<?php echo $va3->link.'/'.$va3->khongdau; ?>'">
	            <?php echo $va3->name; ?>
	          </div>
	        </div>
	        <?php
	        	}}
	        ?>
	      </div>
	    </div>


<?php

		}
	}
	
	
	
}
?>