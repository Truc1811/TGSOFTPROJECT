<form method="post" action="admin/addsanphamcon" >
  <div class="row mb-3">
    <label for="price" class="col-sm-2 col-form-label">Giá</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="price" name="price" required="required">
      <input type="hidden" name="id_sp" value="<?php echo $id; ?>">
      <input type="hidden" name="page" value="<?php echo $a; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="discount" class="col-sm-2 col-form-label">Giá giảm</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="discount" name="discount" required="required">
    </div>
  </div>
  <div class="row mb-3">
      <?php 
      foreach ($mangin as $key => $value) {
        if(count($value[2])>0){
      ?>
      <fieldset class="col-12 col-md-6 mb-3 d-flex flex-wrap align-content-start">
        <legend class="col-form-label col-12 pt-0"><?php echo $value[0]; ?></legend>
        <div class="col-12">
          <?php  
            foreach ($value[2] as $key => $valt) {
              // code...
            
          ?>
          <div class="form-check">
            <input class="form-check-input" type="radio" 
              name="<?php echo $value[1]; ?>" id="<?php echo $value[1].$valt[0]; ?>" 
              value="<?php echo $valt[0]; ?>"
              style="cursor: pointer;"
              required="required"
            >
            <label class="form-check-label" 
              for="<?php echo $value[1].$valt[0]; ?>"
              style="cursor: pointer;"
            >
              <?php echo $valt[1]; ?>
            </label>
          </div>
         <?php  
          }
         ?>
        </div>
      </fieldset>
      <?php  
        }
      }
      ?>
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>