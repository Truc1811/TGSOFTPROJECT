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
				 Lệnh rút
	</h3>	
	<form class="row g-3" method="post" action="mt/rut" id="foom" >
	  
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Email</label>
	    <input type="text" class="form-control" value="<?php echo $thongtin[3]; ?>" name="email" id="email"  readonly />
	  </div>
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Tài khoản MT5</label>
	    <input type="text" class="form-control" value="<?php echo $thongtin[0]; ?>" name="taikhoan" id="taikhoan" readonly />
	  </div>
	  
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Id lệnh rút</label>
	    <input type="text" class="form-control" value="<?php echo $idlenh; ?>" name="idlenh" id="idlenh"  readonly />
	  </div>
	  <!-- <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Số điện thoại</label>
	    <input type="text" class="form-control" value="<?php echo $thongtin[3]; ?>" name="sodienthoai"  readonly />
	  </div> -->
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Phí rút (USDT)</label>
	    <input type="number" value="100" class="form-control" name="phirut" id="phirut" readonly />
	  </div>
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Số lượng (USDT) (*)</label>
	    <input type="number" class="form-control" name="soluong" id="soluong">
	  </div>
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Số lượng thực nhận (USDT)</label>
	    <input type="number" class="form-control" name="sothucnhan" id="sothucnhan" readonly />
	  </div>
	  <div class="col-md-6">
	    <div for="inputAddress" class="form-label text-danger" id="laymaxacnhan" style="cursor: pointer;">Click lấy mã xác nhận qua mail <?php echo $thongtin[3]; ?></div>
	    <input type="text" class="form-control" name="maxacnhan" placeholder="Điền mã xác nhận" id="maxacnhan" required />
	  </div>
	  <div class="col-md-6">
	    <label for="inputAddress" class="form-label">Địa chỉ ví (*) (Hệ thống chỉ chấp nhận địa chỉ mạng lưới Tron-TRC20)</label>
	    <input type="text" class="form-control" name="diachivi" id="diachivi" required />
	    <input type="hidden" class="form-control" name="phanloai" id="phanloai" value="2" />
	    <input type="hidden" class="form-control" name="model" id="model" value="mtcfvmodel" />
	    <input type="hidden" class="form-control" name="sbrut" id="sbrut" value="mtcfvmodel" />
	  </div>
	  
	  <div class="col-12">
	    <a class="btn btn-primary checkmxn">Gửi yêu cầu</a>
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
		//lay ma xác nhận
      $('#laymaxacnhan').click(function(){
          var email=$('#email').val();
          $.post(
                      'php_api/sendmailcode.php', // URL 
                      {'email' : email},  // Data
                      function(kqt){ // Success
                          //$('.ketquatrung').html(kqt);
                          alert("Đã gửi mã xác nhận đến mail <?php echo $thongtin[3]; ?> ");
                      }, 
                      'text' // dataTyppe
          );
      });

      $('#soluong').change(function(){
          var soluong=$(this).val();
          var thucnhan= soluong - $('#phirut').val();
          $('#sothucnhan').val(thucnhan);
      });
       $('#soluong').keyup(function(){
          var soluong=$(this).val();
          var thucnhan= soluong - $('#phirut').val();
          $('#sothucnhan').val(thucnhan);
      });

       //kiểm tra code xác nhận
      $('.checkmxn').click(function(){
      		var kq='true';
      		var mx= $('#maxacnhan').val();
      		var maxacnhan= $('#maxacnhan').val();
      		var email= $('#email').val();
      		var taikhoan= $('#taikhoan').val();
      		var idlenh= $('#idlenh').val();
      		var phirut= $('#phirut').val();
      		var soluong= $('#soluong').val();
      		var sothucnhan= $('#sothucnhan').val();
      		var diachivi= $('#diachivi').val();
      		var phanloai= $('#phanloai').val();
      		var model= $('#model').val();
      		var sbrut= $('#sbrut').val();
      		if(soluong.length>1 && diachivi.length >2 && mx.length > 2){
		      		$.post(
		                  'mt/kiemtracode', // URL 
		                  {'mx' : mx},  // Data
		                  function(kqq){ // Success
		                      if(kqq.search('true') == -1){
									         alert('Sai mã xác nhận. Vui lòng kiểm tra lại'); 
		                      	
		                      } else {
		                      		$.post(
									                  'mt/rut', // URL 
									                  {
									                  'maxacnhan' : maxacnhan,
									                  'email' : email,
									                  'taikhoan' : taikhoan,
									                  'idlenh' : idlenh,
									                  'phirut' : phirut,
									                  'soluong' : soluong,
									                  'sothucnhan' : sothucnhan,
									                  'diachivi' : diachivi,
									                  'phanloai' : phanloai,
									                  'model' : model,
									                  'sbrut' : sbrut
									                  },  // Data
									                  function(kqq){ // Success
									                      location.replace("https://phaisinh.blockchain.cfv.vn/mt/ketquarut");
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