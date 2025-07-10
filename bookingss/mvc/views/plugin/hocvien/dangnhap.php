<style type="text/css">
  /*---------------------------------------display hiển thị nội dung-----------------------------------------*/
.display_flex_w {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-content: flex-start;
}

.display_flex_w>div {
    margin-bottom: 1vw;
}

.display_flex_ws {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-content: flex-start;
}

.display_flex_column {
    display: flex;
    flex-direction: column;
}

.display_flex_column_m {
    display: flex;
    flex-direction: column;
}

.display_flex_column_m>div {
    margin-bottom: 0.5vw;
}

.display_flex_column_m_1 {
    display: flex;
    flex-direction: column;
}

.display_flex_column_m_1>div {
    margin-bottom: 1vw;
}

.display_flex_row_justify {
    display: flex;
    justify-content: space-between;
}

.display_flex_cc {
    display: flex;
    justify-content: center;
    align-items: center;
}

.display_flex_cs {
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.display_flex_ce {
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

.display_flex_sc {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.display_flex_ec {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}


  .color_den {
    color: rgba(0, 0, 0, 1);
  }

  .margin_top {
    margin: 1vw 0 0 0;
  }

  .margin_bottom_2 {
    margin: 0 0 1vw 0;
  }

  .border_bottom {
    border-bottom: 0.1vw solid rgba(51, 51, 51, 0.5);
  }

  .padding_4 {
    padding: 1vw 0 1vw 0;
  }

  .color_do {
    color: rgba(255, 0, 0, 1);
  }

  /*------------------input-------------------------*/
  .input_submit {
      outline: none;
      text-outline: none;
      background-color: rgba(0, 153, 0, 1);
      color: rgba(255, 255, 255, 1);
      border: none;
      cursor: pointer;
      padding: 0.6vw 1vw 0.6vw 1vw;
      width: -webkit-fill-available;
      width: -moz-fill-available;
      width: -o-fill-available;
  }

  .input_text {
      padding: 0.6vw;
      width: 100%;
      border: 0.1vw solid rgba(153, 153, 153, 0.6);
  }

  .width_3 {
    width: 60%;
  }

  /*--------------------Di động----------------------------------------------------------------------------------*/
@media screen and (max-width: 780px) {
    .display_flex_column_m_1>div {
        margin-bottom: 2vw;
    }

    .input_submit {
        outline: none;
        text-outline: none;
        background-color: rgba(0, 153, 0, 1);
        color: rgba(255, 255, 255, 1);
        border: none;
        cursor: pointer;
        padding: 2.6vw 3vw 2.6vw 3vw;
        width: -webkit-fill-available;
        width: -moz-fill-available;
        width: -o-fill-available;
    }

    .input_text {
        padding: 1.6vw;
        width: 100%;
        border: 0.1vw solid rgba(153, 153, 153, 0.6);
    }
}
</style>

<div class="display_flex_column_m_1 padding_3 font_ct">
<div class="display_flex_column_m_1 color_den margin_top">
    <div class="font_cl margin_bottom_2 border_bottom padding_4 color_do">
          Đăng Nhập
  	</div>
    <form method="post" action="hoc-vien/dangnhap">
    <div class="display_flex_column_m_1">
          <div class="khung_23">
              <div class="display_flex_sc">
                 Tài khoản
              </div>
              <div class="display_flex_sc">
            	<input type="text" class="input_text" name="user" required="required" />
              </div>
          </div> 
          <div class="khung_23">
              <div class="display_flex_sc">
                 Mật khẩu
              </div>
              <div class="display_flex_sc">
            	<input type="password" class="input_text" name="password" required="required" />
              </div>
          </div> 
          <div class="width_3 display_flex_ec">
          		<div>
          			<input type="submit" class="input_submit" name="bn" value="Đăng nhập" />
            	</div>
          </div> 
    </div>
    </form>
    <?php
	if(@$data['a']){
	?>
    <div>
    	<?php echo json_decode($data['a']); ?>
    </div>
    <?php
	}
	?>
</div>
</div>
<div class="display_flex_column_m_1 font_ct color_trang padding_3">
            <?php require_once "mvc/views/theme/gd000001/cotphai.php"; ?>
</div>