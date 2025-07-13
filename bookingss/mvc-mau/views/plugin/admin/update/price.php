<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail9" class="form-label" >Giá bán</label>
    <input type="text" name="price" class="form-control" id="inputEmail9"
        value="<?php if(@$_POST['price']){ echo $_POST['price'];} else { echo $dataa[0]->price;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail4" class="form-label" >Giá khuyến mãi</label>
    <input type="text" name="discount" class="form-control" id="inputEmail5"
        value="<?php if(@$_POST['discount']){ echo $_POST['discount'];} else { echo $dataa[0]->discount;} ?>"
    >
</div>