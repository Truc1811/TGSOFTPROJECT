<style type="text/css">
.bongbong{
	z-index: 20;
	bottom: 4vh;
	right: 2vw;
	cursor: pointer;
}
.form_chat{
	z-index: 21;
	bottom: 2vh;
	right: 1vw;
	cursor: pointer;
	width: 20vw;
	display: none;
}
.khung_chat{
	z-index: 21;
	bottom: 2vh;
	right: 1vw;
	cursor: pointer;
	width: 35vw;
	display: none;
	
}
@media screen and (max-width: 780px) {
	.khung_chat{		
		width: 98vw;	
		bottom: 7vh;
	}
	.form_chat{
		bottom: 7vh;
		width: 98vw;
	}


}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('.bongbong').click(function(){
		var dai=1;
		$.post(
					'chat/kiemtra', // URL 
					{'dai' : dai},  // Data
					function(kqt){ // Success
						if(kqt.search('true') != -1){
							$('.khung_chat').fadeIn(200,function(){
									var trangthai=2;
									var phanloai=1;
					                $.post(
					                        'chat/hienchat/1', // URL 
					                        {'trangthai' : trangthai,'phanloai':phanloai},  // Data
					                        function(kqt){ // Success
					                            $('.trang_chat').html(kqt);
					                            var a=$(".dem").outerHeight();
							                    var b=$(".dem").length;
							                    var c=a*b*2;
							                    $(".trang_chat").animate({scrollTop:c}, "slow");
					                        }, 
					                        'text' // dataTyppe
					                );
							});

							$.post(
										'chat/ghichat', // URL 
										{'ec' : 1},  // Data
										function(ghi){ // Success
											$('#code_ghi').html(ghi);
										}, 
										'text' // dataTyppe
						   	);
						} else {
							$('.form_chat').fadeIn();
						}
					}, 
					'text' // dataTyppe
	   	);
		

	});
	$('.dong_form_chat').click(function(){
		$('.form_chat').fadeOut();

	});
	$('.mo_khungchat').click(function(){
		var emailchat=$('#emailchat').val();
		var dienthoaichat=$('#dienthoaichat').val();
		if(emailchat.length>8 && dienthoaichat>9){
			$.post(
					'chat/kiemtra', // URL 
					{'emailchat' : emailchat,'dienthoaichat' : dienthoaichat},  // Data
					function(kqt){ // Success
						kqt=kqt.toString();
						if(kqt.search('true') != -1){
							$('.khung_chat').fadeIn(300,function(){

									var trangthai=2;
									var phanloai=1;
					                $.post(
					                        'chat/hienchat/1', // URL 
					                        {'trangthai' : trangthai,'phanloai':phanloai},  // Data
					                        function(kqt){ // Success
					                            $('.trang_chat').html(kqt);
					                            var a=$(".dem").outerHeight();
							                    var b=$(".dem").length;
							                    var c=a*b*2;
							                    $(".trang_chat").animate({scrollTop:c}, "slow");
					                        }, 
					                        'text' // dataTyppe
					                );

							});
							$('.form_chat').fadeOut();
							$.post(
										'chat/ghichat', // URL 
										{'emailchat' : emailchat},  // Data
										function(ghi){ // Success
											$('#code_ghi').html(ghi);
										}, 
										'text' // dataTyppe
						   	);

						} else {
							alert('Quá trình mở khung chat bị lỗi');
						}
					}, 
					'text' // dataTyppe
	   		);

		} else {
			alert('Vui lòng điền mail và số điện thoại để bắt đầu chat với admin !');
		}

	});
	$('.dong_khung_chat').click(function(){
		$('.khung_chat').fadeOut();
	});
	$('.thoat_khung_chat').click(function(){
		var dai=1;
		$.post(
					'chat/thoat', // URL 
					{'dai' : dai},  // Data
					function(kqt){ // Success
						$('.khung_chat').fadeOut();
						$('#emailchat').val('');
						$('#dienthoaichat').val('');
						window.location.reload();
					}, 
					'text' // dataTyppe
	   	);
	});


	


});
</script>


<div class="position-fixed bongbong d-none d-md-block" title="Chat box">
	<i class="bi bi-chat-right-text-fill fs-1 fw-bolder text-danger"></i>

</div>
<div class="position-fixed form_chat bg-dark p-3 rounded-3 shadow">
	<form class="row g-3">
	  <div class="col-12">
	    <label for="inputEmail4" class="form-label text-white">Email(*)</label>
	    <input type="email" class="form-control" id="emailchat">
	  </div>
	  <div class="col-12">
	    <label for="inputPassword4" class="form-label text-white">Số điện thoại(*)</label>
	    <input type="number" class="form-control" id="dienthoaichat">
	  </div>
	  
	  <div class="col-12 d-flex justify-content-between">
	    <a class="btn btn-danger dong_form_chat"><i class="bi bi-x-lg text-white"> Close</i></a>
	    <a class="btn btn-primary mo_khungchat">Chat</a>
	  </div>
	</form>

</div>
<div class="position-fixed khung_chat bg-dark p-3 rounded-3 shadow">
	<form class="row g-3">
		<div class="col-12 d-flex justify-content-between">

			<a class="btn btn-danger thoat_khung_chat"><i class="bi bi-box-arrow-right"></i> Thoát chat</a>
			<a class="btn btn-danger dong_khung_chat"><i class="bi bi-x-lg text-white"></i> Close</a>
		</div>
		<div class="col-12" style="height: 35vh;">
			<div class="bg-white w-100 h-100 trang_chat overflow-auto p-1">
				<div class="w-100 h-100 d-flex justify-content-center align-items-center">
						<i class="fa-solid fa-spinner fa-spin-pulse"></i>
				</div>
			</div>
			<div id="code_ghi">

			</div>
		</div>
	    <div class="col-9">
	      <input type="text" class="form-control" id="chatghi" autocomplete="off">
	    </div>
	    <div class="col-3 d-flex justify-content-between">
	      <a class="btn btn-primary guichat w-100 h-100"><i class="bi bi-send-fill"></i></a>
	    </div>
	</form>

</div>




