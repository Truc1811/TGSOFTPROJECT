<style type="text/css">


	.img_sp{
		height: 30vw;
	}
	.badge_1{
		padding: 0px 5px;
    	font-weight: 500 !important;
		background-color: #FFFFFF !important;
	}
	
	.btn-ctn{
    color: var(--maucam);
    box-shadow: none;
    border-color: var(--maucam);
    background-color:  #fff;
  	}
  
	.btn-ctn:hover{
	    color: #fff;
	    background-color: var(--maucam);
	}


 	@media(min-width: 768px){
    	.img_sp{
			height: 3vw;
		}

    }
    @media(min-width: 1400px){
    	.img_sp{
			height: 3vw;
		}
    }
</style>

<?php 
	$cart1=json_decode($_SESSION['giohangtreo']);
	$cart=array();
	$a=1;
	if(@$_SESSION['tinhthanh']!=0){
		foreach ($cart1 as $key => $value) {
			$m_tinhthanh=explode(',', $value->tinhthanh);
			if(in_array($_SESSION['tinhthanh'], $m_tinhthanh)){
				$cart[]=$value;
			}
		}
		foreach ($tinhthanh as $key => $value) {
			if($_SESSION['tinhthanh']==$value->id){
				$a=$value->chiso;
			}
		}
	} else {
		$cart=$cart1;
	}
 ?>
<div class="row p-6 d-flex justify-content-between py-5">
	<div class="col-12 col-md-6 px-0 mb-md-0 mb-3">
		<div class="py-2 fs-5">
			Shopping cart
		</div>
		<?php 
		if(@$cart){
		?>
		<div class="d-flex mw-100 d-xxl-block d-md-block d-none">
			<table class="table table-striped">
		      <thead>
			    <tr>
			    	
			     <th style="width: 10%" scope="col" >Ảnh</th>
			      <th style="width: 35%;" scope="col">Sản phẩm</th>
			      <th style="width: 15%" scope="col">Giá</th>
			      <th scope="col"></th>
			      <th scope="col">Tổng</th>
			      <th style="width: 3%;" scope="col" class="d-flex justify-content-center align-items-center"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	$tong=0;
			  	foreach ($cart as $key => $value) {

			  	?>

			    <tr>
			     <td>
			     	<img class="img_sp" src="public/upload/<?php echo $value->image; ?>">
			     </td>
			      <td>
			      	<?php 
			      		echo $value->name.'&nbsp;'; 
			      		echo $value->color?:''.'&nbsp;'; 
			      		echo $value->size?:''.'&nbsp;'; 
			      	?>
			      </td>
			      <td>
			      	<?php 
			      	$gia=0;
			      	if($value->discount>0){
	      			 		$gia=$value->discount*$a;
	      			 } else {
	      			 		$gia=$value->price*$a;
	      			 }
			      	echo number_format($gia).' đ'; 
			      	?>
			      		
			      </td>
			      <td><?php echo 'x '.$_SESSION['cart'][$value->id]; ?></td>
			      <td>
			      	<?php 
			      	if($value->discount>0){
	      			 		$gia=$value->discount*$a;
	      			 } else {
	      			 		$gia=$value->price*$a;
	      			 }
			      	 echo number_format($_SESSION['cart'][$value->id]*$gia).' đ'; 
			      	  $tong=$tong+$_SESSION['cart'][$value->id]*$gia;
			      	  
			      	?>
			      	
			      </td>
			       <td class="text-center" scope="row" class="text-danger" style="cursor: pointer;" onclick="window.location.href='cart/delete/<?php echo $value->id; ?>'"><span class="badge bg-danger">x</span>
			     </td>
			    </tr>
			    <?php
				}

			    ?>
			  </tbody>

		    </table>
		</div>
		<div class="d-flex mw-100 d-block d-md-none d-xxl-none">
			<table class="table table-striped">
			  <tbody>
			  	<?php
			  	
			  	foreach ($cart as $key => $value) {

			  	?>

			    <tr>
			     <td>
			     	<img class="img_sp" src="public/upload/<?php echo $value->image; ?>">
			     </td>
			      <td>
			      	<div class="d-flex flex-column">
			      		<span>
			      			<?php 
				      		echo $value->name.'&nbsp;'; 
				      		echo $value->color?:''.'&nbsp;'; 
				      		echo $value->size?:''.'&nbsp;'; 
				      		?>
			      		</span>
			      		<span class="d-flex">
			      			<span class="badge_1 text-dark"> <?php echo 'x'.$_SESSION['cart'][$value->id]; ?></span>
			      		</span>
			      		<span>
			      			 <?php 
			      			 if($value->discount>0){
			      			 		$gia=$value->discount*$a;
			      			 } else {
			      			 		$gia=$value->price*$a;
			      			 }
					      	
					      	 echo number_format($_SESSION['cart'][$value->id]*$gia).' đ'; 
					      	  
					      	?>
			      		</span>
			      	</div>

			      </td>
			     
			        <th class="text-center" scope="row" class="text-danger" style="cursor: pointer;" onclick="window.location.href='cart/delete/<?php echo $value->id; ?>'"><span class="badge bg-danger">x</span></th>
			    </tr>
			    <?php
				}
			    ?>
			  </tbody>

		    </table>
		</div>
		<?php 
		}else {
            echo 'No products...';
        }
        $_SESSION['tonggia']=$tong;
		?>
	</div>
	<div class="col-12 col-md-5 p-md-5 p-3 shadow">
		<div class="py-2 fs-5">
			Order summary 
		</div>
		<div class="d-flex justify-content-between mt-3">
			<div>Provisional:</div>
			<div class="text-right"><?php echo number_format($_SESSION['tonggia']).'đ'; ?></div>
		</div>
		<div class="d-flex justify-content-between pt-3 border-top text-danger">
			<div>Summary:</div>
			<div class="text-right load_tongphi" data-tong=""><?php echo number_format($_SESSION['tonggia']).'đ'; ?></div>
		</div>
		<div class="col-12 mt-3 d-flex justify-content-center">
			 <!-- <input type="submit" class="btn btn-ctn  fw-600 d-block me-3" name="" value="Tiếp tục mua hàng" onclick="window.location.href='san-pham'" />
		    <input type="submit" class="btn btn-ctn  fw-600 d-block " name="" value="Thanh toán" onclick="window.location.href='cart/payment'" /> -->
		    <input type="submit" class="btn btn-primary fw-600 w-100 rounded-pill" name="" value="Check out" onclick="window.location.href='cart/payment'" />
		 </div>
	</div>
</div>