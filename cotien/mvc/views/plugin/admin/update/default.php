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
    <label for="inputEmail4" class="form-label" >Tên(*)</label>
    <input type="text" name="name" required="required" class="form-control" id="inputEmail4"
        value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="rank" class="form-label">Thứ tự</label>
    <input type="number" name="rank" class="form-control" value="1" id="rank"
        value="<?php if(@$_POST['rank']){ echo $_POST['rank'];} else { echo $dataa[0]->rank;} ?>"
    >
</div>

<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Hình ảnh</label>
    <input type="file" name="image"  class="form-control get_h" id="image">
    <input type="hidden" name="image1" value="<?php echo $dataa[0]->image; ?>"  />
    <div class="d-flex flex-wrap hienthi">
        <?php if(strlen($dataa[0]->image)>9){?>
        <img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="public/upload/<?php echo $dataa[0]->image; ?>"/>
        <?php } ?>
    </div>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="input07" class="form-label">Trạng thái</label>
    <div class="d-flex">
        <div class="form-check pe-4 py-1">
          <input class="form-check-input" type="radio" value="1" id="radio1" name="hide"
            <?php if($dataa[0]->hide==1){ echo 'checked="checked"';} ?>
          >
          <label class="form-check-label" for="radio1">
            Show
          </label>
        </div>
        <div class="form-check pe-4 py-1">
          <input class="form-check-input" type="radio" value="2" id="radio2" name="hide"
            <?php if($dataa[0]->hide==2){ echo 'checked="checked"';} ?>
          >
          <label class="form-check-label" for="radio2">
            Hide
          </label>
        </div>

    </div>
        
</div>
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Nội dung</label>
    <textarea id="ckeditorkhoahoc" name="content" class="form-control"><?php if(@$_POST['content']){ echo $_POST['content'];} else { echo $dataa[0]->content;} ?></textarea>
    <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
</div>