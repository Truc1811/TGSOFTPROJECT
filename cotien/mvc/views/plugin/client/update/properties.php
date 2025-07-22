<div class="col-12 mb-3 d-flex flex-wrap">
    <?php
        $thuoctinh=json_decode($data['thuoctinh']);
        $nhomthuoctinh=json_decode($data['nhomthuoctinh']);
        foreach ($nhomthuoctinh as $key => $van) {
    ?>
    <div class="col-6 col-md-2 pe-4 mb-3">
        <label for="input07" class="form-label"><?php echo $van->name; ?></label>
        <?php 
            foreach ($thuoctinh as $key => $value) {
                if($value->nhomthuoctinh==$van->id){
                    $a=1;
                    if(in_array($value->id, explode(',', $dataa[0]->thuoctinh))){
                        $a=2;
                    }
        ?>
            <div class="form-check py-1">
              <input class="form-check-input" type="checkbox" value="<?php echo $value->id; ?>" id="<?php echo 'm'.$value->id; ?>" name="thuoctinh[]"
                <?php if($a==2){ echo 'checked';} ?>
              >
              <label class="form-check-label" for="<?php echo 'm'.$value->id; ?>">
                <?php if(strlen($value->image)>9){ ?>
                <img style="width:30px" src="public/upload/<?php echo $value->image; ?>">
                <?php } 
                    else { 
                        echo $value->name;
                    } 
                 ?>
              </label>
            </div>
        <?php
                }
            }
        ?>   

            
    </div>
    <?php  
        }
    ?>

</div>