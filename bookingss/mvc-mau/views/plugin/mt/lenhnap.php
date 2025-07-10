<?php 
$thongtin=json_decode($data['thongtin']);
$thongtin=explode(',', $thongtin);
$time=time();
$tra=substr($time,-4,4);
$trb=substr($thongtin[3],0,4);
$idlenh=$tra.$trb;

 ?>

<div class="row py-0 py-md-5 card_img" style="background-image: url('public/demo/mt-5.jpg');">
	<!-- <a href="cfvvietnam5setup.exe"> -->

		<div class="col-12 padding_tay py-3 card_img" >
			<h3 class="text-white py-2 py-md-5 text-center">
				 
			</h3>			
		</div>
	<!-- </a> -->
</div>
<div class="row padding_tay_1 py-0">
	<h3 class="py-2 py-md-5">
				 Lệnh nạp
	</h3>	
	<form class="row g-3" method="post" action="mt/nap">
	  <!-- <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Tên người dùng (*)</label>
	    <input type="text" class="form-control" name="name" id="name" required />
	  </div> -->
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Email</label>
	    <input type="text" class="form-control" value="<?php echo $thongtin[3]; ?>" name="email" id="email"  readonly />
	  </div>
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Tài khoản MT5</label>
	    <input type="text" class="form-control" value="<?php echo $thongtin[0]; ?>" name="taikhoan" id="taikhoan"  readonly />
	  </div>
	  
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Id lệnh nạp</label>
	    <input type="text" class="form-control" value="<?php echo $idlenh; ?>" name="idlenh" id="idlenh"  readonly />
	  </div>
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Số lượng USDT (*)</label>
	    <input type="number" class="form-control" name="soluong" id="soluong" required>
	  </div>
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">TX-ID (*)</label>
	    <input type="text" class="form-control" name="txid" id="txid" required />
	  </div>
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Địa chỉ ví CFV</label>
	    <input type="text" class="form-control" name="diachivi" id="diachivi" readonly value="<?php echo $cauhinh[0]->diachivi; ?>" />
	    <input type="hidden" class="form-control" name="phanloai" id="phanloai" value="1" />
	    <input type="hidden" class="form-control" name="model" id="model" value="mtcfvmodel" />
	    <input type="hidden" class="form-control" name="sbnap" id="sbnap" value="mtcfvmodel" />
	  </div>
	  
	  <div class="col-md-12">
	   <a class="btn btn-primary checknap">Gửi yêu cầu</a>
	    <a class="btn btn-danger" href="trang-chu">Hủy lệnh</a>
	  </div>
	</form>
</div>
<div class="row padding_tay_1 pt-5 text-danger">
	<div class="col-12">
			<p>
			-	Lưu ý: 

			</p>
			<p>
- Bạn vui lòng kiểm tra kỹ các thông tin trước khi gửi yêu cầu, mọi sai sót có thể dẫn đến mất tiền.

			</p>
			<p>
- Yêu cầu đã gửi sẽ không thể thực hiện lại hoặc chỉnh sửa.

			</p>

	</div>
</div>


<script type="text/javascript">
	var gia=true;
	$(document).ready(function(){
       //kiểm tra code xác nhận
      $('.checknap').click(function(){
      		var mx=1;
      		var email= $('#email').val();
      		var taikhoan= $('#taikhoan').val();
      		var idlenh= $('#idlenh').val();
      		var soluong= $('#soluong').val();
      		var diachivi= $('#diachivi').val();
      		var txid= $('#txid').val();
      		var phanloai= $('#phanloai').val();
      		var model= $('#model').val();
      		var sbnap= $('#sbnap').val();
      		if(soluong.length>1 && diachivi.length >2 && txid.length>2){
		      		$.post(
		                  'mt/kiemtratxid', // URL 
		                  {'mx' : txid},  // Data
		                  function(ktn){ // Success
		                      if(ktn.search('true') == -1){
									         alert('Transaction id đã được sử dụng, vui lòng kiểm tra lại'); 
		                      	
		                      } else {
		                      		$.post(
						                  'mt/nap', // URL 
						                  {
						                  'email' : email,
						                  'taikhoan' : taikhoan,
						                  'idlenh' : idlenh,
						                  'soluong' : soluong,
						                  'diachivi' : diachivi,
						                  'txid' : txid,
						                  'phanloai' : phanloai,
						                  'model' : model,
						                  'sbnap' : sbnap
						                  },  // Data
						                  function(kqq){ // Success
						                      location.replace("https://phaisinh.blockchain.cfv.vn/mt/ketquanap");
						                  }, 
						                  'text' // dataTyppe
						          	);
		                      }
		                  }, 
		                  'text' // dataTyppe
		          );


      		} else {
      				alert('Vui lòng điền đủ hết các trường dữ liệu');
      		}
          
      });

	});

</script>