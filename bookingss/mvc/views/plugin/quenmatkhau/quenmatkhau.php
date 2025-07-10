<?php 
$_SESSION['guimatkhau']=mt_rand(120000,999999);
$guimatkhau=$_SESSION['guimatkhau'];
$mnoidungmail=array();
$mnoidungmail[]="<h3>Cảm ơn bạn. Mật khẩu đã được thay đổi</h3>";
$mnoidungmail[]="<p>Mật khẩu mới : ".$_SESSION['guimatkhau']."</p>";
$mnoidungmail[]="<p>Ngày lấy lại mật khẩu :".date('d/m/Y',time())."</p>";
$noidungmail=implode('', $mnoidungmail);
$_SESSION['noidungmail']=$noidungmail;
?>
<style type="text/css">
	.header-top{
		background-color: #4FC0D0;
	}
</style>


<script>
	$(document).ready(function(){
		$('.gui_mat_khau').click(function(){
			var email=$('#email_gmk').val();
			if(email.length>0){
				$.post(
				          'php_api/sendmailmatkhau.php', // URL 
				          {'email' : email},  // Data
				          function(kqt){ // Success
				                //$('.ketquatrung').html(kqt);
				                alert("Jobopen đã gửi thông tin đăng nhập đến mail "+email);
				                $.post(
								          'hoivien/updatematkhau', // URL 
								          {'email' : email},  // Data
								          function(kqsetmk){ // Success
								              //$('.ketquatrung').html(kqt);
								          }, 
								          'text' // dataTyppe
								);
				          }, 
				          'text' // dataTyppe
				);
			} else {
				alert('Bạn chưa điền email hoặc email không đúng. Vui lòng kiểm tra lại!')
			}
		});
	});
</script>



<div class="bg-white border rounded-2 mb-4 shadow-sm">
	<div class="p-3">
		<h6 class="pb-2 border-bottom">Vui lòng nhập Email của bạn để lấy lại mật khẩu</h6>
		<div class="w-100">
			<div class="input-group flex-nowrap">
			    <input type="text" class="form-control w_375" id="email_gmk">
			    <span class="input-group-text header-top text-white gui_mat_khau" id="basic-addon2">
				  	<span class="px-2"><i class="bi bi-pencil-square"></i>
				  	</span>
				  Gửi 
				</span>
			</div>
		</div>	
	</div>
</div>