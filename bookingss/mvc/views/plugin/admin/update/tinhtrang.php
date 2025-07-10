
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="tinh_trang" class="form-label" >Tình trạng</label>
    <input type="text" name="tinh_trang" class="form-control" id="tinh_trang"
        value="<?php if(@$_POST['tinh_trang']){ echo $_POST['tinh_trang'];} else { echo $dataa[0]->tinh_trang;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="sl" class="form-label">Số lượng</label>
    <input type="number" name="soluong" class="form-control" value="1" id="sl"
        value="<?php if(@$_POST['soluong']){ echo $_POST['soluong'];} else { echo $dataa[0]->soluong;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="th" class="form-label" >Thương hiệu</label>
    <input type="text" name="thuonghieu" class="form-control" id="th"
        value="<?php if(@$_POST['thuonghieu']){ echo $_POST['thuonghieu'];} else { echo $dataa[0]->thuonghieu;} ?>"
    >
</div>

