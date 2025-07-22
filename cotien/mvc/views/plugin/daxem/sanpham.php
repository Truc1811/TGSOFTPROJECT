<?php 
	$sanphamdaxem1=json_decode($data['sanphamdaxem']);
	$sanphamdaxem=array();
	$a=1;
	if(@$_SESSION['tinhthanh']!=0){
		foreach ($sanphamdaxem1 as $key => $value) {
			$m_tinhthanh=explode(',', $value->tinhthanh);
			if(in_array($_SESSION['tinhthanh'], $m_tinhthanh)){
				$sanphamdaxem[]=$value;
			}
		}
		foreach ($tinhthanh as $key => $value) {
			if($_SESSION['tinhthanh']==$value->id){
				$a=$value->chiso;
			}
		}
	} else {
		$sanphamdaxem=$sanphamdaxem1;
	}
	require "mvc/views/plugin/cart/iconaddcart.php";
?>

<style>
	.hinh_sp{
		height: 42vw;
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
    .hover_name:hover{
    	color: #27ACB3 !important;
    	transform: scale(1.1);
    }
    .frame-cart{
        background-color: #fff;
        color: #000000;
        border-radius: 50%;
        padding: 8px 10px;
        border: none;
    }
    .frame-cart:hover{
        background-color: #00A86E;
        color: #fff;
        border-radius: 50%;
        padding: 8px 10px;
        border: none;
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
			height: 17vw;
		}
	}
	@media(min-width: 1400px){
		.hinh_sp{
			height: 15vw;
		}
	}
</style>

<div class="row p-7 py-3">
	<div class="border border-1 p-2">
			Trang chủ / Sản phẩm / <span><?php echo $title_name; ?></span>
	</div>
</div>
<div class="row p-7 pb-3">
	<div class="col-xxl-10 col-md-10 ">
		<div class="d-flex flex-wrap">
			<?php
				$perc=0;
				foreach ($sanphamdaxem as $key => $value) {
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
	</div>
	
	<div class="col-xxl-2 col-md-2 d-xxl-block d-md-block d-none ">
		<div class="fs-6 fw-bold pb-3">DANH MỤC SẢN PHẨM</div>
			<div class="fs-14">
				<?php 
	    			foreach ($menu2 as $key => $value) {
	        	?>
	        		<li class="list-unstyled pb-2 mb-2 border-bottom">
	        			<a class="text-decoration-none cursor" href="san-pham/<?php echo $value->khongdau; ?>"><?php echo $value->name; ?></a>
	        		</li>
	        	<?php 
	            	}	
	        	?>
			</div>
	</div>
</div>