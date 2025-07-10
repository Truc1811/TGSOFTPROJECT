<?php 
$tong=0;
if(@$_SESSION['diem']){
     foreach (@$_SESSION['diem'] as $key => $value) {
    $tong=$tong+$value;
    }
}


$testonline=json_decode($data['testonline']);
@$phone=$_SESSION['phone']?:'';
?>



<div class="display_flex_column_m_1 padding_3 font_ct">
<div class="display_flex_column_m_1 color_den margin_top">
    <div class="font_cl margin_bottom_2 border_bottom padding_4 color_do">
        <?php echo $testonline[0]->name; ?>  
    </div>
    <div class="khung_1">
    	<div class="fix_you">
        <?php
			echo 'User : '.$phone.'<br/>';
         	echo 'Kết quả: '.$tong.' điểm';
        ?>
      </div>
    </div>
</div>
</div>
<div class="display_flex_column_m_1 font_ct color_trang padding_3">
            <?php require_once "mvc/views/theme/gd000001/cotphai.php"; ?>
</div>