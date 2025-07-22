<script>
    $(document).ready(function(){
        // up ảnh
        $('.get_h').on('change', function() {
              var tmppath = URL.createObjectURL(event.target.files[0]);
              console.log(tmppath);
              // var fileName = file.name;
              // var fileSize = file.size;
              var hinh='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmppath + '" />';
              $('.hienthi').html(hinh);
        });

        $('.get_hm').on('change', function() {
            $('.hienthim').html('');
            for (var i = 0; i <15; i++) {
              var tmp = URL.createObjectURL(event.target.files[i]);
              if(tmp.length>6){
                  chuoi='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmp + '" />';
                  $('.hienthim').append(chuoi);

              }
            }
        });
            

    });
</script>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="inputEmail4" class="form-label" >Tiêu đề tin tuyển dụng(*)</label>
    <input type="text" name="name" required="required" class="form-control" id="inputEmail4">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="rank" class="form-label">Rank</label>
    <input type="number" name="rank" class="form-control" value="1" id="rank">
</div>

<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Ảnh đính kèm công ty/shop/nhà hàng</label>
    <input type="file" name="image"  class="form-control get_h" id="image">
    <div class="d-flex flex-wrap hienthi"></div>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="id_user" class="form-label" >Tài khoản nhà tuyển dụng</label>
    <select class="form-select" aria-label="Default select example" name="id_user" id="id_user">
        <?php 
            $hoivien=json_decode($data['hoivien']);
            foreach ($hoivien as $key => $value) {
           
        ?>
      <option value="<?php echo $value->id; ?>" ><?php echo $value->email; ?></option>
        <?php
             }
         ?>
     
    </select>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="hannop" class="form-label">Hạn ứng tuyển</label>
    <input type="date" name="hannop" class="form-control" id="hannop" required>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="input07" class="form-label">Trạng thái</label>
    <div class="d-flex">
        <div class="form-check pe-4 py-1">
          <input class="form-check-input" type="radio" value="1" id="radio1" name="hide" checked>
          <label class="form-check-label" for="radio1">
            Show
          </label>
        </div>
        <div class="form-check pe-4 py-1">
          <input class="form-check-input" type="radio" value="2" id="radio2" name="hide">
          <label class="form-check-label" for="radio2">
            Hide
          </label>
        </div>

    </div>
        
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
  <label for="gioitinh" class="form-label">Giới tính</label>
  <select class="form-select" aria-label="Default select example" name="gioitinh">
    <option value="1">Nam</option>
    <option value="2">Nữ</option>
    <option value="3">Không yêu cầu</option>
  </select>
</div>
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="mota" class="form-label">Mô tả(*)</label>
    <textarea id="mota" name="mota" class="form-control" required="required"></textarea>
    <script>CKEDITOR.replace('mota');</script>
</div>
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="yeucau" class="form-label">Yêu cầu(*)</label>
    <textarea id="yeucau" name="yeucau" class="form-control" required="required"></textarea>
    <script>CKEDITOR.replace('yeucau');</script>
</div>
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="quyenloi" class="form-label">Quyền lợi(*)</label>
    <textarea id="quyenloi" name="quyenloi" class="form-control" required="required"></textarea>
    <script>CKEDITOR.replace('quyenloi');</script>
</div>


<?php 
$truongbh=array(
    'mức lương',
    'vị trí tuyển dụng',
    'kinh nghiệm',
    'hình thức làm việc',
    'yêu cầu bằng cấp',
    'địa điểm',
    'ngành nghề',
    'số lượng cần tuyển',
);
foreach ($truongbh as $key => $value) {
?>
    <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
        <label for="congviec<?php echo $key; ?>" class="form-label text-capitalize"><?php echo $value; ?></label>
        <input type="text" name="congviec[<?php echo $key; ?>]" class="form-control" id="congviec<?php echo $key; ?>"
            value="<?php if(@$_POST['congviec'][$key]){ echo $_POST['congviec'][$key];} else { echo '';} ?>"
        >

    </div>

<?php
}
?>