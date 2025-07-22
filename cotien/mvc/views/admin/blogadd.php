<?php
$db=str_replace('add','',json_decode($data['page']));//default

?>
<form class="" method="post" enctype="multipart/form-data" action="admin/add">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
        Thêm Tin Tức
        </div>
        <div class="d-flex px-2">
            
            <input class="btn btn-primary btn-sm me-3" type="submit" value="Save" name="bn"  />
            <input class="btn btn-danger btn-sm" type="button" value="Back" 
            onclick="window.location.href='admin/listr/<?php echo $db; ?>'" 
            />
            
        </div>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light"  style="height:86vh">
            <!---- khung trai-->
            <div class="col-12 col-md-9 d-flex flex-wrap">
                        <input type="hidden" name="model" value="<?php echo  json_decode($data['model']); ?>"/>

                <!-- form nhap -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 fs-5 p-3">
                               Thông tin tin tức
                        </div>

                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Tên(*)</label>
                            <input type="text" name="name" required="required" class="form-control form-control-sm" id="inputEmail4">
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Thứ tự</label>
                            <input type="text" name="thu_tu" required="required" class="form-control form-control-sm" id="inputEmail4">
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Không dấu</label>
                            <input type="text" name="khong_dau" required="required" class="form-control form-control-sm" id="inputEmail4">
                        </div>
                       
                        
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image" class="form-label">Hình đại diện(*) (780 x 438)</label>
                            <input type="file" name="image"  class="form-control form-control-sm get_h" id="image" required="required"> 
                            <div class="d-flex flex-wrap"></div>
                        </div>
                        
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="input07" class="form-label">Trạng thái</label>
                            <div class="d-flex">
                                <div class="form-check pe-4 py-1">
                                  <input class="form-check-input" type="radio" value="1" id="radio1" name="status" checked>
                                  <label class="form-check-label" for="radio1">
                                    Show
                                  </label>
                                </div>
                                <div class="form-check pe-4 py-1">
                                  <input class="form-check-input" type="radio" value="2" id="radio2" name="status">
                                  <label class="form-check-label" for="radio2">
                                    Hide
                                  </label>
                                </div>

                            </div>
                                
                        </div>
                        <div class="col-12 px-3 pb-3">
                            <label for="image" class="form-label">Nội dung</label>
                            <textarea id="ckeditorkhoahoc" name="content" class="form-control form-control-sm"></textarea>
                            <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
                        </div>
                         <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="meta_keywords" class="form-label">Seo keywords (*)</label>
                            <input type="text" name="meta_keywords" class="form-control form-control-sm" id="meta_keywords" required="required">
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="meta_description" class="form-label">Mô tả - Seo description (*)</label>
                            <input type="text" name="meta_description" class="form-control form-control-sm" id="meta_description" required="required">
                        </div>
                    </div>
                </div>
               
                <!-- end form nhap -->
                
            </div> 
            <!-- end khung trai  -->
            <!-- khung phai   -->
            <div class="col-12 col-md-3 d-flex flex-wrap">
                <!-- left catalogy -->
                 <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 fs-5 p-3 d-flex justify-content-between">
                                <div class="col-auto">
                                    Catalogy
                                </div>
                                <div class="col-auto btn btn-success btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#newsModal">
                                    <i class="bi bi-plus-lg"></i>
                                </div>
                        </div>

                        <div class="col-12 px-3">
                                Menu
                        </div>
                        <div class="rounded-3 px-3 pb-3 load_menu">
                            <?php
                            $menu1=json_decode($data['menu1']);
                            $menu2=json_decode($data['menu2']);
                            $menu3=json_decode($data['menu3']);
                            $menu_id=1;
                            foreach($menu1 as $value1){
                                if($value1->khongdau=='blog'){
                                    $menu_id=$value1->id;
                            ?>
                            <div class="form-check py-1">
                              <input class="form-check-input" type="radio" value="<?php echo $value1->id; ?>" id="<?php echo 'f'.$value1->id; ?>" name="father_level" checked>  
                                <label class="form-check-label" for="<?php echo 'f'.$value1->id; ?>">
                                <?php echo $value1->name; ?>
                                </label>
                            </div>
                                    <?php
                                    foreach($menu2 as $value2){
                                        if(in_array($value1->id,explode(',',$value2->father_level))){
                                    ?>
                                    <div class="form-check py-1 ps-5">
                                        <input class="form-check-input" type="radio" value="<?php echo $value2->id; ?>" id="<?php echo 'f'.$value2->id; ?>" name="father_level">
                                        <label class="form-check-label" for="<?php echo 'f'.$value2->id; ?>">
                                        <?php echo $value2->name; ?>
                                        </label>
                                    </div>
                                            <?php
                                            foreach($menu3 as $value3){

                                                if(in_array($value2->id,explode(',',$value3->father_level))){
                                            ?>
                                            <div class="form-check py-1 ps-5 ms-4">
                                                <input class="form-check-input" type="radio" value="<?php echo $value3->id; ?>" id="<?php echo 'f'.$value3->id; ?>" name="father_level[]">
                                                <label class="form-check-label" for="<?php echo 'f'.$value3->id; ?>">
                                                <?php echo $value3->name; ?>
                                                </label>
                                            </div>
                                            
                            <?php
                            }}}}}}
                            ?>
                                    <script>
                                        $(document).ready(function(){
                                            $('.s_menu').click(function(){
                                                var id=$('#id').val();
                                                var name=$('#name').val();
                                                var rank=$('#rank').val();
                                                $.post(
                                                        'ajax/load_menu', // URL 
                                                        {
                                                            'id' : id,
                                                            'name': name,
                                                            'rank':rank
                                                        },  // Data
                                                        function(kqt){ // Success
                                                            $('.load_menu').html(kqt);
                                                        }, 
                                                        'text' // dataTyppe
                                                );
                                            });
                                        });

                                    </script>


                        </div>
                    </div>
                </div>
                <!-- end left catalogy -->
            </div>
            <!-- end khung phai -->
            
    </div>
    
</form>



<script>
    $(document).ready(function(){
        // up ảnh
        $('.get_h').on('change', function() {
              var tmppath = URL.createObjectURL(event.target.files[0]);
              console.log(tmppath);
              // var fileName = file.name;
              // var fileSize = file.size;
              var hinh='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmppath + '" />';
              $(this).next().html(hinh);
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



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newsModalLabel">Thêm danh mục news</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input class="form-control form-control-sm" type="text" id="name" placeholder="Tên danh mục...">
        </div>
        <div class="">
            <label class="form-label">Thứ tự ưu tiên</label>
            <input class="form-control form-control-sm" type="number" id="rank" value="1">
            <input type="hidden" value="<?php echo $menu_id; ?>" id="id">
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn btn-primary btn-sm s_menu" data-bs-dismiss="modal">Save changes</div>
      </div>
    </div>
  </div>
</div>


