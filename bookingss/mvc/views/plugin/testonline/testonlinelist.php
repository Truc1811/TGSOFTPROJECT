<?php
$thuvien=new thuvien();
$khoahoc=json_decode($data['dataa']);
$tieude=json_decode($data['title_name']);
?>
<div class="display_flex_column_m_1 padding_3 font_ct">
<div class="display_flex_column_m_1 color_den margin_top">
    <div class="font_cl margin_bottom_2 border_bottom padding_4 color_do">
          Test online / <?php echo $tieude; ?>
    </div>
    <div class="khung_32">
    	<?php
		foreach($khoahoc as $va){
		?>
    	<div class="display_flex_column_m_1 box_shadow cursor hover "
        	onclick="window.location.href='testonline/test/<?php echo $va->id; ?>'"
        >
        	<div style="background-image:url(public/upload/<?php echo $va->image; ?>)" class="image_background_resize height_width position_relative">
            	<div class="position_absolute">
            
            	</div>
            </div>
            <div class="padding_5">
           		
                <?php
                echo $thuvien->goithuvien('thuvienchuoi')->catchuoi($va->name,4,' [...]');
				?>
            </div>
            
        </div>
        <?php
		}
		?>
    
    </div>
</div>
</div>
<div class="display_flex_column_m_1 font_ct color_trang padding_3">
            <?php require_once "mvc/views/theme/gd000001/cotphai.php"; ?>
</div>