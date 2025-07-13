<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail4" class="form-label" >Name(*)</label>
    <input type="text" name="name" required="required" class="form-control" id="inputEmail4"
        value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="telephone" class="form-label" >Telephone(*)</label>
    <input type="text" name="telephone" required="required" class="form-control" id="telephone"
        value="<?php if(@$_POST['telephone']){ echo $_POST['telephone'];} else { echo $dataa[0]->telephone;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="warranty1" class="form-label">Warranty start date(*)</label>
    <input type="date" name="startdate" class="form-control" id="warranty1"
        value="<?php if(@$_POST['startdate']){ echo $_POST['startdate'];} else { echo date('Y-m-d',$dataa[0]->startdate);} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="warranty2" class="form-label">Warranty end date(*)</label>
    <input type="date" name="enddate" class="form-control" id="warranty2"
        value="<?php if(@$_POST['enddate']){ echo $_POST['enddate'];} else { echo date('Y-m-d',$dataa[0]->enddate);} ?>"
    >
</div>



<?php 
$truongbh=array(
    'kính chắn gió',
    'kính hông trước',
    'kính hông sau',
    'kính hông hàng thứ 3',
    'kính kính lưng',
    'cửa sổ trời',
    'thương hiệu',
    'mẫu xe',
    'biển số',
    'năm sản xuất',
);
$tbaohanh=explode('|',$dataa[0]->information);
foreach ($truongbh as $key => $value) {
?>
    <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
        <label for="baoh<?php echo $key; ?>" class="form-label" ><?php echo $value; ?></label>
        <input type="text" name="information[<?php echo $key; ?>]" class="form-control" id="baoh<?php echo $key; ?>"
            value="<?php if(@$_POST['information'][$key]){ echo $_POST['information'][$key];} else { echo $tbaohanh[$key];} ?>"
        >
    </div>
<?php
}
?>