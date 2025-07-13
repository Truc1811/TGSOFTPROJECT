<div class="my-3 ">
        Hiển thị
</div>
<div class="border rounded-3 p-3">
    <?php
    $mang=array(
       'Sản phẩm mới nhất'=>'sanphammoinhat',
        'Sản phẩm bán chạy'=>'sanphambanchay',
        'Sản phẩm giảm giá'=>'sanphamgiamgia',
    );
    foreach($mang as $key => $value1){
    ?>
    <div class="form-check py-1">
        <input 
            class="form-check-input" 
            type="checkbox" 
            value="<?php echo $value1; ?>" 
            id="<?php echo 'f'.$value1; ?>" 
            name="option_view[]"
            <?php if(in_array($value1,explode(',', $dataa[0]->option_view))){ echo 'checked'; } ?>

        >
        <label class="form-check-label" for="<?php echo 'f'.$value1; ?>">
        <?php echo $key; ?>
        </label>
    </div>
            
    <?php
    }
    ?>

</div>