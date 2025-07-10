<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail9" class="form-label" >Địa chỉ</label>
    <input type="text" name="diachi" class="form-control" id="inputEmail9"
        value="<?php if(@$_POST['diachi']){ echo $_POST['diachi'];} else { echo $dataa[0]->diachi;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail4" class="form-label" >Hotline</label>
    <input type="text" name="hotline" class="form-control" id="inputEmail5"
        value="<?php if(@$_POST['hotline']){ echo $_POST['hotline'];} else { echo $dataa[0]->hotline;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail4" class="form-label" >Bản đồ</label>
    <input type="text" name="bando" class="form-control" id="inputEmail5"
        value="<?php if(@$_POST['bando']){ echo $_POST['bando'];} else { echo $dataa[0]->bando;} ?>"
    >
</div>