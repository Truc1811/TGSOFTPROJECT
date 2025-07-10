<style type="text/css">
	.btn-primary{
		background-color: #167589;
		color: #fff;
	}
	.click:hover{
		background-color: #00A86E;
		border-color: #fff;
	}
</style>
<?php
$kq=json_decode($data['kq']);
if($kq=='true'){	
		$mc=explode('phancach',$_SESSION['customer']);
		$mp=explode('|', $_SESSION['product']);

		$mnoidungmail=array();
		$mnoidungmail[]="<h3>Cảm ơn bạn. Đơn hàng đã được nhận</h3>";
		$mnoidungmail[]="<p>Mã đơn hàng : #".$_SESSION['madonhang']."</p>";
		$mnoidungmail[]="<p>Ngày đặt hàng :".date('d/m/Y',time())."</p>";
		$mnoidungmail[]="<p>Địa chỉ giao hàng : ".$mc[1]."</p>";
		$mnoidungmail[]="<p>Số điện thoại liên hệ : ".$mc[3]."</p>";
		$mnoidungmail[]="<p>Tổng cộng : ".number_format($mc[6]).' vnđ'."</p>";
		$mnoidungmail[]="<h3>Đơn hàng</h3>";
		$mnoidungmail[]='<table style="width:100%; border: 1px solid black;  border-collapse: collapse; padding: 15px; ">';
		$mnoidungmail[]="<thead>";
		$mnoidungmail[]="<tr>";
		$mnoidungmail[]='<th style="border: 1px solid black;  border-collapse: collapse; padding: 15px; ">Sản phẩm</th>';
		$mnoidungmail[]='<th style="border: 1px solid black;  border-collapse: collapse; padding: 15px; ">Đơn giá</th>';
		$mnoidungmail[]='<th style="border: 1px solid black;  border-collapse: collapse; padding: 15px; ">Số lượng</th>';
		$mnoidungmail[]="</tr>";
		$mnoidungmail[]="</thead>";
		$mnoidungmail[]="<tbody>";
		foreach ($mp as $key => $value) {
			$mv=explode(',', $value);
			$mnoidungmail[]="<tr>";
			$mnoidungmail[]='<td style="border: 1px solid black;  border-collapse: collapse; padding: 15px;">'.$mv[1].'</td>';
			$mnoidungmail[]='<td style="border: 1px solid black;  border-collapse: collapse; padding: 15px;">'.number_format($mv[3]).' vnđ </td>';
			$mnoidungmail[]='<td style="border: 1px solid black;  border-collapse: collapse; padding: 15px;">'.$mv[2].'</td>';
			$mnoidungmail[]="</tr>";
		}
		$mnoidungmail[]="</tbody>";
		$mnoidungmail[]="</table>";
		$noidungmail=implode('', $mnoidungmail);
		$_SESSION['noidungmail']=$noidungmail;
		?>

		<!-- <script type="text/javascript">
			$(document).ready(function(){
				//lay ma xác nhận
		      
		          var email="<?php echo $mc[2]; ?>";
		          $.post(
		                      'php_api/sendmailcart.php', // URL 
		                      {'email' : email},  // Data
		                      function(kqt){ // Success
		                          //$('.ketquatrung').html(kqt);
		                          alert("Chúng tôi đã gửi thông tin đơn hàng đến gmail <?php echo $mc[2]; ?> ");
		                      }, 
		                      'text' // dataTyppe
		          );
		     });

			

		</script> -->



		<div class="col-md-8 m-0 m-md-5 pt-3">
			<h3>Đơn hàng đã được đặt</h3>
			<p>Mã đơn hàng : #<?php echo $_SESSION['madonhang']; ?></p>
			<p>Ngày đặt hàng : <?php echo date('d/m/Y',time()); ?> </p>
			<p>Địa chỉ giao hàng : <?php echo $mc[1]; ?></p>
			<p>Số điện thoại liên hệ : <?php echo $mc[3]; ?></p>
			<p>Tổng cộng : <?php echo number_format($mc[6]).' vnđ'; ?></p>
		</div>
		<div class="col-md-6 don_hang m-0 m-md-5">
			<div class="py-2 fs-3">
				Đơn hàng
			</div>
			<div class="d-flex don_hang_1 mw-100">
				<table class="table table-striped">
			      <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Sản phẩm</th>
				      <th scope="col">Đơn giá</th>
				      <th scope="col"></th>
				      <th scope="col">Thành Tiền</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  	$a=0;
				  	foreach ($mp as $key => $value) {
				  		$mv=explode(',', $value);
				  		$a++;
				  	?>
				    <tr>
				      <th scope="row" class="text-danger" ><?php echo $a; ?></th>
				      <td><?php echo $mv[1]; ?></td>
				      <td><?php echo number_format($mv[3]).' vnđ'; ?></td>
				      <td><?php echo 'x'.$mv[2]; ?></td>
				      <td>
				      	<?php 
				      	 echo number_format($mv[3]*$mv[2]).' vnđ'; 
				      	?>
				      </td>
				    </tr>
				    <?php
					}
				    ?>
				  </tbody>

			    </table>
			</div>
			<div class="text-start py-3">
		    <input type="submit" class="btn click btn-primary  text-uppercase fw-600 d-block" name="" value="Tiếp tục mua hàng" onclick="window.location.href='san-pham'" />
		 </div>
		</div>
		

<?php
} else {
?>
		<div class="col-12 text-danger" style="min-height: 60vh;">
		    <h2>Đặt hàng thất bại</h2>
		</div>
<?php
} 
?>



