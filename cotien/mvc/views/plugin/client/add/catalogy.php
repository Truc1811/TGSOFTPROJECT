<div class="mb-3 ">
        Menu
</div>
<div class="border rounded-3 p-3">
    <?php
    $menu1=json_decode($data['menu1']);
    $menu2=json_decode($data['menu2']);
    $menu3=json_decode($data['menu3']);
    foreach($menu1 as $value1){
        if($value1->id==805638){
    ?>
    <div class="form-check py-1">
        <input class="form-check-input" type="checkbox" value="<?php echo $value1->id; ?>" id="<?php echo 'f'.$value1->id; ?>" name="father_level[]">
        <label class="form-check-label" for="<?php echo 'f'.$value1->id; ?>">
        <?php echo $value1->name; ?>
        </label>
    </div>
            <?php
            foreach($menu2 as $value2){
                if(in_array($value1->id,explode(',',$value2->father_level))){
            ?>
            <div class="form-check py-1 ps-5">
                <input class="form-check-input" type="checkbox" value="<?php echo $value2->id; ?>" id="<?php echo 'f'.$value2->id; ?>" name="father_level[]">
                <label class="form-check-label" for="<?php echo 'f'.$value2->id; ?>">
                <?php echo $value2->name; ?>
                </label>
            </div>
                    <?php
                    foreach($menu3 as $value3){

                        if(in_array($value2->id,explode(',',$value3->father_level))){
                    ?>
                    <div class="form-check py-1 ps-5 ms-4">
                        <input class="form-check-input" type="checkbox" value="<?php echo $value3->id; ?>" id="<?php echo 'f'.$value3->id; ?>" name="father_level[]">
                        <label class="form-check-label" for="<?php echo 'f'.$value3->id; ?>">
                        <?php echo $value3->name; ?>
                        </label>
                    </div>
                    
    <?php
    }}}}}}
    ?>

</div>