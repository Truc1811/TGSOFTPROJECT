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
    <input type="text" name="name" required="required" class="form-control" id="name">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="hotline" class="form-label" >Hotline(*)</label>
    <input type="text" name="hotline" required="required" class="form-control" id="hotline">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="password" class="form-label" >Password(*)</label>
    <input type="password" name="password" required="required" class="form-control" id="password">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="passworda" class="form-label" >Enter the password again(*)</label>
    <input type="password" name="passworda" required="required" class="form-control" id="passworda">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="email" class="form-label" >Email(*)</label>
    <input type="email" name="email" required="required" class="form-control" id="email">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="diachi" class="form-label" >Address</label>
    <input type="text" name="diachi" class="form-control" id="diachi">
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="rank" class="form-label">Rank</label>
    <input type="number" name="rank" class="form-control" value="1" id="rank">
</div>

<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image"  class="form-control get_h" id="image">
    <div class="d-flex flex-wrap hienthi"></div>
</div>
<div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
    <label for="input07" class="form-label">Status</label>
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
<div class="col-12 pe-0 pe-md-4 mb-3">
    <label for="image" class="form-label">Content</label>
    <textarea id="ckeditorkhoahoc" name="content" class="form-control"></textarea>
    <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
</div>