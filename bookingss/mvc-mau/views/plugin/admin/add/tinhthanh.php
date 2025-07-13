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
    <label for="name" class="form-label" >Tên(*)</label>
    <input type="text" name="name" required="required" class="form-control" id="name">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="chiso" class="form-label" >Tỉ lệ giá của tỉnh thành</label>
    <input type="text" name="chiso" required="required" class="form-control" id="chiso">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="rank" class="form-label">Thứ tự</label>
    <input type="number" name="rank" class="form-control" value="1" id="rank">
</div>

<!-- <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Hình ảnh</label>
    <input type="file" name="image"  class="form-control get_h" id="image">
    <div class="d-flex flex-wrap hienthi"></div>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="imagem" class="form-label">Hình ảnh mô tả</label>
    <input type="file" name="image_m[]" multiple="multiple"  class="form-control get_hm" id="imagem">
    <div class="d-flex flex-wrap hienthim"></div>
</div> -->
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
<!-- <div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Nội dung</label>
    <textarea id="ckeditorkhoahoc" name="content" class="form-control"></textarea>
    <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
</div> -->