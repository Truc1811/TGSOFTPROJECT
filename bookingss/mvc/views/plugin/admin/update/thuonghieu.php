<div class="mb-3">
        Thương hiệu
</div>
<div class="border rounded-3 p-3">
    <?php
    $thuonghieu1=json_decode($data['thuonghieu1']);
    $thuonghieu2=json_decode($data['thuonghieu2']);
    $thuonghieu3=json_decode($data['thuonghieu3']);
    foreach($thuonghieu1 as $value1){
    ?>
    <div class="form-check py-1">
        <input class="form-check-input" type="checkbox" value="<?php echo $value1->id; ?>" id="<?php echo 'f'.$value1->id; ?>" name="thuonghieu[]"
            <?php if(in_array($value1->id,explode(',', $dataa[0]->thuonghieu))){ echo 'checked'; } ?>
        >
        <label class="form-check-label" for="<?php echo 'f'.$value1->id; ?>">
        <?php echo $value1->name; ?>
        </label>
    </div>
            <?php
            foreach($thuonghieu2 as $value2){
                if(in_array($value1->id,explode(',',$value2->father_level))){
            ?>
            <div class="form-check py-1 ps-5">
                <input class="form-check-input" type="checkbox" value="<?php echo $value2->id; ?>" id="<?php echo 'f'.$value2->id; ?>" name="thuonghieu[]"
                    <?php if(in_array($value2->id,explode(',', $dataa[0]->thuonghieu))){ echo 'checked'; } ?>
                >
                <label class="form-check-label" for="<?php echo 'f'.$value2->id; ?>">
                <?php echo $value2->name; ?>
                </label>
            </div>
                    <?php
                    foreach($thuonghieu3 as $value3){

                        if(in_array($value2->id,explode(',',$value3->father_level))){
                    ?>
                    <div class="form-check py-1 ps-5 ms-4">
                        <input class="form-check-input" type="checkbox" value="<?php echo $value3->id; ?>" id="<?php echo 'f'.$value3->id; ?>" name="thuonghieu[]"
                            <?php if(in_array($value3->id,explode(',', $dataa[0]->thuonghieu))){ echo 'checked'; } ?>
                        >
                        <label class="form-check-label" for="<?php echo 'f'.$value3->id; ?>">
                        <?php echo $value3->name; ?>
                        </label>
                    </div>
                    
    <?php
    }}}}}
    ?>

</div>