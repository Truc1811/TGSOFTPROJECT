<style type="text/css">
	.img_sp{
		height: 30vw;
	}
	input,select,button:focus{
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    outline: 0;
}
	.contact__form {
    	margin-top: 20px;
    	margin-bottom: 20px;
    	padding-top: 10px;
    	padding-bottom: 10px;
    	box-shadow: 10px 0px 40px 0px #b4b4b4;
	}

	.contact__form .bg-highlight {
		width: 100px;
	    top: 0px;
	    right: 0px;
	    background-color: #cd9a2b;
	}

	.contact__form form input {
		font-size: 14px;
	    color: var(--clr-text);
	    height: 35px;
	    min-height: 35px;
	    border: 0;
     	outline: 0;
	    border-bottom: 1px solid var(--clr-border-contact);
	}

	.contact__form form input::placeholder {
		color: var(--clr-black);
	}

	.contact__form form button {
		font-size: 16px;
		line-height: 45px;
		height: 46px;
		padding: 0px 12px;
		border: 1px solid var(--clr-black);
	}

	.contact__form form button:hover {
		background-color: #915b10 !important;
		border-color: var(--clr-primary);
	}

	.contact__infor {
		padding: 16px 40px;
	}

	.contact__infor .point {
	    width: 30px;
		height: 30px;
		top: -15px;
		left: -15px;
		background-color: #cd9a2b;
	}
	.border_0{
		border: 0 !important;
	}
	.form-control:focus {
	    color: #212529;
	    background-color: white;
	    border-color: unset; 
	    outline: 0;
	    box-shadow: unset; 
	}
	.click:hover{
		background-color: #00A86E;
		border-color: #fff;
	}
	.btn-primary{
		background-color: #167589;
		color: #fff;
	}
	.text-form{
		color: #F5F5F5;
	}
	.btn:focus {
	    outline: 0;
	    box-shadow: unset;
	}
	.collapse{
		transition: max-height 1s ease-out;
	}
	.p-order{
		padding-left: 6vw !important;
    	padding-right: 6vw !important;
	}
	.bangchat {
	   position: fixed;
	    bottom: 54px;
	    right: 10px;
	    z-index: 10000;
	}
	 .no-fc:focus {
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    outline: 0;
	}
	.btn-voucher{
		background-color: #00A86E !important;
    border-color: #00A86E !important;
    border: none;
    box-shadow: none;
    z-index: 10;
    width: 100%;
    height: -webkit-fill-available;
	}
	@media(min-width: 768px){
    	.img_sp{
				height: 10vw;
			}

    }
	}
</style>
<?php 
	$cart=json_decode($_SESSION['giohangtreo']);
	$mang_u=explode('|',$_COOKIE['hoivien']);
 ?>

<script type="text/javascript">
$(document).ready(function(){
	$('.phi').change(function(){
		var phia= $('.phi').val();
		var phi=parseInt(phia);
		var tong= $('.load_tongphi').data('tong');
		var tongtien=tong+phi;
		$('.load_phi').html('$'+phi);
		$('.load_tongphi').html('$'+tongtien);
	});

	    $('#ndradio1, #ndradio2,#ndradio3').collapse('hide'); 
	$('input[name="type_payment"]').change( function() {
	    if ($('#radio1').is(":checked")){
	      $('#ndradio1').collapse('show');
	    } else {
	      $('#ndradio1').collapse('hide');
	    } 
	    if ($('#radio2').is(":checked")){
	      $('#ndradio2').collapse('show');
	    } else {
	      $('#ndradio2').collapse('hide');
	    } 
	     if ($('#radio3').is(":checked")){
	      $('#ndradio3').collapse('show');
	    } else {
	      $('#ndradio3').collapse('hide');
	    } 
	   
	 });

		$('.tra_giamgia').click(function(){
				var magiamgia=$('.magiamgia').val();
				alert(magiamgia);
				$.post(
            'cart/tramagiamgia', // URL 
            {'magiamgia':magiamgia},  // Data
            function(tramagiamgia){ // Success
               $('.loadtbgg').html(tramagiamgia);
               		$.post(
					            'cart/tonggiamgia', // URL 
					            {'magiamgia':magiamgia},  // Data
					            function(tonggiamgia){ // Success
					               $('.load_tongphi').html(tonggiamgia);
					            }, 
					            'text' // dataTyppe
					        );
            }, 
            'text' // dataTyppe
        );
		});



});
</script>

<div class="row p-order d-flex flex-wrap justify-content-between py-5 border">	
	<div class="col-12 col-md-5 px-0 pb-3">
		<div class="d-flex mw-100 border">
			<table class="table table-striped mb-0">
		      <thead>
			    <tr>
			      <th scope="col" class="fw-600 fs-6 text-form text-black">Sản phẩm</th>
			      <th scope="col" class="fw-600 fs-6 text-form text-black">Thông tin</th>
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
			      			 		$gia=$value->discount;
			      			 } else {
			      			 		$gia=$value->price;
			      			 }
					      	
					      	 echo number_format($_SESSION['cart'][$value->id]*$gia).' đ'; 
					      	 $tong=$tong+$_SESSION['cart'][$value->id]*$gia;
					      	  
					      	?>
			      		</span>
			      	</div>

			      </td>
			    </tr>
			    <?php
				}
				$_SESSION['tonggia']=$tong;
			    ?>
			  </tbody>

		    </table>
		</div>
		
		<div class="d-flex justify-content-between mt-3">
			<div>Tạm tính:</div>
			<div class="text-right"><?php echo number_format($_SESSION['tonggia']).' đ'; ?></div>
		</div>
	<!-- 	<div class="d-flex justify-content-between pt-3 text-danger">
			<div class="col-9"><input class="form-control no-fc w-75 magiamgia" placeholder="Mã voucher"  /></div>
			<div class="col-3"><button class="no-fc btn-voucher text-white rounded tra_giamgia">Áp dụng</button></div>
		</div> -->
		<div class="d-flex justify-content-between pt-3 text-danger">
			<div class="loadtbgg">Tổng:</div>
			<div class="text-right load_tongphi" data-tong=""><?php echo number_format($_SESSION['tonggia']).' đ'; ?></div>
		</div>
	
		<div class="col-12 mt-3">
		    <input type="submit" class="btn click btn-primary w-100 text-uppercase fw-600 d-block" name="" value="Trở lại giỏ hàng" onclick="window.location.href='cart/viewcart'" />
		 </div>
	</div>
	<div class="col-12 col-md-6 border">
		<div class="py-2 fs-4 fw-bold ">
			Thông tin thanh toán
		</div>
		<form method="post" class="row g-3 " action="cart/payment">
			<div class="radio py-2  col-md-12 col-12">
				<input type="radio" name="type_payment" class="track-order-change" id="radio1" value="1">
        <label class="ms-2" for="radio1">Chuyển khoản ngân hàng</label>
      </div>

      <div class="panel-collapse collapse in py-2 col-md-12 col-12 border border-1" id="ndradio1">
        <div class="ms-2">
          <?php echo $cauhinh[0]->description; ?>
        </div>
      </div>

      <div class="radio py-2 col-md-12 col-12">
      	<input type="radio" name="type_payment" class="track-order-change" id="radio2" value="2">
        <label class="ms-2" for="radio2">
        	  Qua ví điện tử
        </label>
          
        
      </div>

      <div class="panel-collapse collapse in py-2 col-md-12 col-12 border border-1" id="ndradio2">
        <div class="ms-2">
          Momo, zalopay: <?php echo $cauhinh[0]->diachivi; ?>
       </div>
      </div>

      <div class="radio py-2  col-md-12 col-12">
      	<input type="radio" name="type_payment" class="track-order-change" id="radio3" value="3" checked>
        <label class="ms-2" for="radio3" >
        	  Trả tiền mặt khi nhận hàng (COD)
        </label>
      </div>
       <div class=" panel-collapse collapse in py-2 col-md-12 col-12 border border-1" id="ndradio3">
        <div class="ms-2">
          Trả tiền mặt khi nhận hàng
        </div>
      </div>
		  <div class="col-md-6">
		    <label for="name" class="form-label">Họ tên *</label>
		    <input type="text" class="form-control" id="name" name="name" required value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $mang_u[1];} ?>">
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="sodienthoai" class="form-label">Số điện thoại *</label>
		    <input type="number" class="form-control" id="sodienthoai" name="sodienthoai" required value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $mang_u[3];} ?>">
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="email" class="form-label">Email *</label>
		    <input type="email" class="form-control" id="email" name="email" required value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $mang_u[2];} ?>">
		  </div>
		    <div class="col-12 col-md-6">
		    <label for="diachi" class="form-label">Địa chỉ *</label>
		    <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ" name="diachi" required value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $mang_u[4];} ?>">
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="city" class="form-label">Tỉnh/Thành phố *</label>
		    <input type="text" class="form-control" id="city" name="tinhthanh" required>
		  </div>
		  <div class="col-12 col-md-12">
		    <label for="noidung" class="form-label">Ghi chú đơn hàng</label>
		    <textarea class="form-control" rows="8" cols="45" id="noidung" placeholder="Vui lòng nhập mã giao dịch tại đây khi sử dụng các phương thức chuyển khoản" name="ghichu" ></textarea>
		  </div>
		  <div class="col-12 my-3">
		    <input type="submit" class="btn click btn-primary w-100 text-uppercase fw-600 d-block" name="sbcart" value="Đặt hàng" />
		  </div>
		</form>
	</div>
	
	
</div>