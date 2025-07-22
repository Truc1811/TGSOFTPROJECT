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

        // so sanh pass
        $('#passworda').change(function(){
            var pas=$('#password').val();
            var pasa=$('#passworda').val();
            alert(pasa);
            if(pas!=pasa){
                alert('Password does not match');
                $('#passworda').focus();
                // e.preventDefault();
            }
        });
            

    });
</script>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="name" class="form-label" >Name(*)</label>
    <input type="text" name="name" required="required" class="form-control" id="name"
        value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="hotline" class="form-label" >Hotline(*)</label>
    <input type="text" name="hotline" required="required" class="form-control" id="hotline"
        value="<?php if(@$_POST['hotline']){ echo $_POST['hotline'];} else { echo $dataa[0]->hotline;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="password" class="form-label" >Password(*)</label>
    <input type="password" name="password" required="required" class="form-control" id="password"
    value="<?php if(@$_POST['password']){ echo $_POST['password'];} else { echo $dataa[0]->password;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="passworda" class="form-label" >Enter the password again(*)</label>
    <input type="password" name="passworda" required="required" class="form-control" id="passworda"
    value="<?php if(@$_POST['passworda']){ echo $_POST['passworda'];} else { echo $dataa[0]->password;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="email" class="form-label" >Email(*)</label>
    <input type="email" name="email" required="required" class="form-control" id="email"
        value="<?php if(@$_POST['email']){ echo $_POST['email'];} else { echo $dataa[0]->email;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="rank" class="form-label">Rank</label>
    <input type="number" name="rank" class="form-control" value="1" id="rank"
        value="<?php if(@$_POST['rank']){ echo $_POST['rank'];} else { echo $dataa[0]->rank;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="diachi" class="form-label" >Address</label>
    <input type="text" name="diachi" class="form-control" id="diachi"
        value="<?php if(@$_POST['diachi']){ echo $_POST['diachi'];} else { echo $dataa[0]->diachi;} ?>"
    >
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="taikhoan" class="form-label">Account (vnđ)</label>
    <input type="number" name="taikhoan" class="form-control" id="taikhoan"
        value="<?php if(@$_POST['taikhoan']){ echo $_POST['taikhoan'];} else { echo $dataa[0]->taikhoan;} ?>"
    >
</div>

<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image"  class="form-control get_h" id="image">
    <input type="hidden" name="image1" value="<?php echo $dataa[0]->image; ?>"  />
    <div class="d-flex flex-wrap hienthi">
        <?php if(strlen($dataa[0]->image)>9){?>
        <img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="public/upload/<?php echo $dataa[0]->image; ?>"/>
        <?php } ?>
    </div>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="input07" class="form-label">Status</label>
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
    <label for="image" class="form-label">Content</label>
    <textarea id="ckeditorkhoahoc" name="content" class="form-control"><?php if(@$_POST['content']){ echo $_POST['content'];} else { echo $dataa[0]->content;} ?></textarea>
    <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
</div>