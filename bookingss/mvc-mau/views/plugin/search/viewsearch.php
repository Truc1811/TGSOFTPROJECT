<?php 
$sanpham=json_decode($data['dataa']);
$spl=json_decode($data['dataa']);
?>
<style>
		.hinh_sp{
		height: 43vw;
	}
	.text_pink{
    	color: #ff2f98;
    }
    .text_blue{
    	color: #82c4f8;
    }
    .father_frame{
        position: relative;
    }
    .fathe_frame:hover .child_frame{
        position: absolute;
        bottom: 35%;
        left: 35%;
        opacity: 1;
        transition-duration: 0.5s;
        display: none;
    }
    .child_frame{
        position: absolute;
        bottom: 20%;
        left: 35%;
        opacity: 0;
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
		height: 16vw;
	}
	.fathe_frame:hover .child_frame{
        position: absolute;
        bottom: 35%;
        left: 35%;
        opacity: 1;
        transition-duration: 0.5s;
        display: none;
    	}
}
@media(min-width: 1400px){
    .hinh_sp{
			height: 16vw;
		}
    .fathe_frame:hover .child_frame{
        position: absolute;
        bottom: 35%;
        left: 35%;
        opacity: 1;
        transition-duration: 0.5s;
        display: block;
    	}
}
</style>

<div class="row p-6 py-2 align-items-stretch">
	<?php 
	if(count($spl)>0){
        foreach ($sanpham as $key => $value) {
	?>
	<div class="col-xxl-3 col-md-3 col-6 d-xxl-block d-md-block p-2 fathe_frame position-relative">
				<div class="card shadow mb-4 cursor h-100" onclick="window.location.href='san-pham/detail/<?php echo $value->khongdau; ?>'">
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
				    <div class="card-title text-dark fs-14 text-center"><?php echo $value->name; ?></div>
				 
				    <div class="card-text fs-12 text_blue d-flex justify-content-center">
				   	<?php 
						if (($value->discount)==0) {
							echo '<div>'.(number_format($value->price)).'đ'.'</div>';
						} else {
							echo '<div class="price-line text_pink pe-1">'.(number_format($value->price)).'đ'.'</div>';
							echo '<div>'.(number_format($value->discount)).'đ'.'</div>';
						}
					?>
				    </div>
				  </div>
				</div>
				<div class="child_frame text-dark">

                  <button data-id="<?php echo $value->id; ?>" class="addcart frame-cart"><i class="bi bi-basket2"></i></button>
                  <a href="san-pham/detail/<?php echo $value->khongdau; ?>"  class="frame-cart"><i class="bi bi-eye"></i></a>
	            </div>
			</div>
    <?php

	} }else {
		echo 'Không tìm thấy sản phẩm nào cho từ khóa tìm kiếm';
	}
	?>
</div>