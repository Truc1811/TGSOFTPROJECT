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
    <label for="inputEmail4" class="form-label" >Tiêu đề tin tuyển dụng</label>
    <input type="text" name="name" required="required" class="form-control" id="inputEmail4">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3 d-none">
    <label for="rank" class="form-label">Rank</label>
    <input type="number" name="rank" class="form-control" value="1" id="rank">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Ảnh đính kèm công ty/shop/nhà hàng</label>
    <input type="file" name="image"  class="form-control get_h" id="image">
    <div class="d-flex flex-wrap hienthi"></div>
</div>

<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="hannop" class="form-label">Ngày hết hạn</label>
    <input type="date" name="hannop" class="form-control" id="hannop" required>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
  <label for="gioitinh" class="form-label">Giới tính</label>
  <select class="form-select" aria-label="Default select example" name="gioitinh">
    <option value="1">Nam</option>
    <option value="2">Nữ</option>
    <option value="3">Không yêu cầu</option>
  </select>
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
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="mota" class="form-label">Mô tả công việc</label>
    <textarea id="mota" name="mota" required="required"></textarea>
    <script>
                        CKEDITOR.replace('mota', {
                          // Define the toolbar groups as it is a more accessible solution.
                          toolbarGroups: [
                            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
                            { name: 'forms' },
                            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                            '/',
                            
                          ],
                          
                        });

    </script>
</div>
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="yeucau" class="form-label">Yêu cầu</label>
    <textarea id="yeucau" name="yeucau" required="required"></textarea>
    <script>
                        CKEDITOR.replace('yeucau', {
                          // Define the toolbar groups as it is a more accessible solution.
                          toolbarGroups: [
                            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
                            { name: 'forms' },
                            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                            '/',
                            
                          ],
                          
                        });

    </script>
</div>
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="quyenloi" class="form-label">Quyền lợi</label>
    <textarea id="quyenloi" name="quyenloi" required="required"></textarea>
    <script>
                        CKEDITOR.replace('quyenloi', {
                          // Define the toolbar groups as it is a more accessible solution.
                          toolbarGroups: [
                            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
                            { name: 'forms' },
                            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                            '/',
                            
                          ],
                          
                        });

    </script>
</div>