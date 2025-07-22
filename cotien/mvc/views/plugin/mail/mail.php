<script type="text/javascript">
	
	$(document).ready(function(){
		//gui thu
		$('.gui_1').click(function(){
			var email=$('.email_1').val();
			var phone=$('.phone_1').val();
			var name=$('.name_1').val();
			var city=$('.city_1').val();
			var content=$('.content_1').val();
			
			if( email.length>8 && name.length>1 && content.length>1){
				$.post(
						'hopthu/add', // URL 
						{'email': email,'name':name,'phone':phone,'content':content,'city':city},  // Data
						function(kqt){ // Success
							// $('.ketquatrung').html(kqt);
							alert('Bạn đã gửi thư thành công');
						}, 
						'text' // dataTyppe
		   		);

			} else {
				alert('Gửi thất bại. Vui lòng điền đầy đủ thông tin!');
			}
		})
	});
</script>