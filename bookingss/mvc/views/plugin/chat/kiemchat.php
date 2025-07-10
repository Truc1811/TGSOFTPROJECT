<div class="cn khung_61">
    <div class="display_flex_cc" >
        <input class="cursor_pointer" type="checkbox" value="0" title="check all" id="checkall"/>
        <input type="hidden" value="<?php echo $a; ?>" name="page" />
        <input type="hidden" value="<?php echo $db; ?>" name="db" />
        <input type="hidden" value="<?php echo 'thuviendata4'; ?>" name="ldt" />
    </div>
    <div class="display_flex_sc">
        Trạng thái
    </div>
    <div class="display_flex_sc">
        Email
    </div>
    <div class="display_flex_sc">
        Số điện thoại
    </div>
    <div class="display_flex_cc">
    	Thời gian tiếp nhận
    </div>
    <div class="giua">
       
    </div>
</div>

<?php
		$chatmodel=$this->model('chatmodel');
		$mc=$chatmodel->selectque("ORDER BY trangthai ASC,timestamp DESC");
		date_default_timezone_set('Asia/Ho_Chi_Minh');
            $mang=json_decode($mc);
            foreach($mang as $value){
?>

<div class="cn khung_61">
    <div class="display_flex_cc">
    	<!-- <input type="checkbox" value="<?php echo $value->id; ?>" name="id[]" class="thecheck cursor_pointer"/> -->
    </div>
    <div class="display_flex_sc">
        <?php
            if($value->trangthai==1){
                echo 'Chưa đọc'; 
            } else {
                echo 'Đã đọc'; 
            }
         ?>
    </div>
    <div class="display_flex_sc">
    	<?php 
            $mchat=explode(',', $value->id_chat); 
            echo $mchat[0];
        ?>
    </div>
    <div class="display_flex_sc">
        <?php 
            $mchat=explode(',', $value->id_chat); 
            echo $mchat[1];
        ?>
    </div>
    <div class="display_flex_cc">
   		<?php echo date('d/m/Y H:i:s',$value->timestamp); ?>
    </div>
    <div class="display_flex_sc">
        <!-- <div class="margin_l" 
        onclick="window.location.href='admin/update/<?php echo $db; ?>/thuviendata4/<?php echo $a.'/'.$value->id; ?>'"
        >
              <i class="fas fa-pen-fancy cursor_pointer"></i>
        </div> -->
        <div class="margin_l">
            <a style="color:black" 
            onclick="return confirm('Bạn muốn đọc chat của bạn <?php echo $value->id_chat; ?>?')" 
            href="admin/docchat/<?php echo $value->id_chat; ?>"
            >
            <i class="fa-solid fa-eye"></i>
            </a>
           
        </div>
       
    </div>
</div>
<?php
			

	}


	

?>