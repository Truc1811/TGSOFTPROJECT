<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail4" class="form-label" >Name(*)</label>
    <input type="text" name="name" required="required" class="form-control" id="inputEmail4">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="telephone" class="form-label">Telephone(*)</label>
    <input type="text" name="telephone" class="form-control" id="telephone">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="warranty1" class="form-label">Warranty start date(*)</label>
    <input type="date" name="startdate" class="form-control" id="warranty1" required>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="warranty2" class="form-label">Warranty end date(*)</label>
    <input type="date" name="enddate" class="form-control" id="warranty2" required>
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
foreach ($truongbh as $key => $value) {
?>
    <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
        <label for="baoh<?php echo $key; ?>" class="form-label text-capitalize"><?php echo $value; ?></label>
        <input type="text" name="information[<?php echo $key; ?>]" class="form-control" id="baoh<?php echo $key; ?>"
            value="<?php if(@$_POST['information'][$key]){ echo $_POST['information'][$key];} else { echo '';} ?>"
        >

    </div>

<?php
}
?>

