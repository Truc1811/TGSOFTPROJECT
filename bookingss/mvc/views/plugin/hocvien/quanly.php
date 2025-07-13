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

  .padding_quanly {
        padding: 0.5vw 1vw 0.5vw 1vw;
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

    .background_quanly {
        color: white;
        margin-bottom: -1px !important;
        border-top-left-radius: 0.5vw;
        border-top-right-radius: 0.5vw;
        background-color: rgba(0, 153, 51, 1);
    }

    

  /*--------------------Di động----------------------------------------------------------------------------------*/
@media screen and (max-width: 780px) {
    .display_flex_column_m_1>div {
        margin-bottom: 3vw;
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

    .padding_quanly {
        padding: 2vw 2vw 2vw 2vw;
    }
}
</style>

<?php 
$dataa=json_decode($data['dataa']);
$datab=json_decode($data['datab']);
$testonline=json_decode($data['testonline']);
?>
<div class="display_flex_column_m_1 padding_3 font_ct">
<div class="display_flex_column_m_1 color_den margin_top">
    <div class="display_flex_w border_bottom">
    	<div class="background_quanly padding_quanly">
        	 <i class="fas fa-user-tag"></i>&ensp;<?php echo $dataa[0]->name; ?>
        </div>
        <div class="display_flex_ce">
        	<a href="hoc-vien/edit" style="text-decoration:none; color:rgb(255,102,0);">
        	<i class="fas fa-user-edit"></i>&ensp;Edit
            </a>
            &nbsp;/&nbsp;
        	<a href="hoc-vien/logout" style="text-decoration:none; color:red;">
        	<i class="fas fa-sign-out-alt"></i>&ensp;Log Out
            </a>
        </div>          
    </div>
    <div>
    	<i class="fas fa-chalkboard-teacher"></i>&ensp;Khóa học :
    </div>
    <?php 
        foreach ($datab as $key => $value) { 
    ?>
        <div class="load_lop_quanly cursor" data-id="<?php echo $value->id; ?>">
            &emsp;&emsp;<i class="fas fa-chevron-circle-right"></i>&nbsp;<?php echo $value->name; ?>
             : <i class="fas fa-sign-in-alt" style="color:rgba(204,51,0,1)"></i>
        </div>
        <div id="van<?php echo $value->id; ?>">
        </div>

    <?php 
        } 
    ?>
    
    <div>
        <?php echo $dataa[0]->content; ?>
    </div>
   
</div>
</div>
<div class="display_flex_column_m_1 font_ct color_trang padding_3">
            <?php require_once "mvc/views/theme/gd000001/cotphai.php"; ?>
</div>
