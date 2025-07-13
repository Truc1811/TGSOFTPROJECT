<div class="my-3 ">
        Views
</div>
<div class="border rounded-3 p-3">
    <?php
    $mang=array(
        'Slider'=>'slider',
        'Banner home'=>'bannerhome',
        'Banner sản phẩm'=>'bannersanpham',
        'Giải pháp'=>'giaiphap',
        'Link youtube'=>'youtube',
        'Giới thiệu'=>'gioithieu',
        'App'=>'app',
        'FAQ'=>'faq',
    );
    foreach($mang as $key => $value1){
    ?>
    <div class="form-check py-1">
        <input 
            class="form-check-input" 
            type="checkbox" 
            value="<?php echo $value1; ?>" 
            id="<?php echo 'f'.$value1; ?>" 
            name="father_level[]"
            <?php if(in_array($value1,explode(',', $dataa[0]->father_level))){ echo 'checked'; } ?>

        >
        <label class="form-check-label" for="<?php echo 'f'.$value1; ?>">
        <?php echo $key; ?>
        </label>
    </div>
            
    <?php
    }
    ?>

</div>