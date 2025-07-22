
<!--  kiểm duyệt dữ liệu theo regex
<div>
            <input class="input_text" type="tel" name="phone" required="required" 
            placeholder="Số điện thoại(0919332220)..." pattern="[0-9]{10}" />
 </div> 
-->
<div class="display_flex_column_m_1 padding_3 font_ct">
<div style="padding: 5vw 0 5vw 0;" class="font_ct">
	<?php 
		if(json_decode($data['kq'])=='true'){
			echo 'Bạn đã gửi thư thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.';
		} else {
			echo 'Thư gửi bị lỗi. Vui lòng gửi lại.';
		}
	?>

  <br/>
<a href="trang-chu">
	Back
</a>
</div>
</div>
