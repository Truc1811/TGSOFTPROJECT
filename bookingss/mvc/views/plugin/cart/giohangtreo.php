<div class="container-fluid">
	<div class="row d-flex justify-content-between">
		<div class="col-12 px-0">
			<div class="py-2 fs-3">
				Giỏ hàng
			</div>
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
				     	<img class="w-100" src="public/upload/<?php echo $value->image; ?>">
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
		      			 		$gia=$value->discount;
		      			 } else {
		      			 		$gia=$value->price;
		      			 }
				      	
				      	echo number_format($gia).' đ'; 
				      	?>
				      		
			      	</td>
				      <td><?php echo 'x '.$_SESSION['cart'][$value->id]; ?></td>
				      <td>
				      	 <?php 
				      			 
					      	 echo number_format($_SESSION['cart'][$value->id]*$gia).' đ'; 
					      	  $tong=$tong+$_SESSION['cart'][$value->id]*$gia;
					      	  $_SESSION['tonggia']=$tong;
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
			
		</div>
		<div class="col-12 px-0 ps-md-3 ps-xxl-3">
			
			
			<div class="d-flex justify-content-between pt-3 border-top text-danger">
				<div>Tổng:</div>
				<div class="text-right load_tongphi" data-tong=""><?php echo number_format($tong).' đ'; ?></div>
			</div>
			<div class="col-12 mt-3 d-flex justify-content-end">
				 <input type="submit" class="btn click btn-primary  text-uppercase fw-600 d-block me-3" name="" value="Giỏ hàng" onclick="window.location.href='cart/viewcart'" />
			    <input type="submit" class="btn click btn-primary  text-uppercase fw-600 d-block " name="" value="Thanh toán" onclick="window.location.href='cart/payment'" />
			 </div>
		</div>
	</div>
</div>