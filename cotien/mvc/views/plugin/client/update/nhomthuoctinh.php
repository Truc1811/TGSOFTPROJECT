<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="nhomthuoctinh" class="form-label" >Properties</label>
    <select class="form-select" aria-label="Default select example" name="nhomthuoctinh" id="nhomthuoctinh">
        <?php 
            $nhomthuoctinh=json_decode($data['nhomthuoctinh']);
            foreach ($nhomthuoctinh as $key => $value) {
           
        ?>
        <option value="<?php echo $value->id; ?>" 
            <?php if($dataa[0]->nhomthuoctinh==$value->id){echo 'selected';} ?>
        >
            <?php echo $value->name; ?>
        </option>
        <?php
             }
         ?>
     
    </select>
</div>