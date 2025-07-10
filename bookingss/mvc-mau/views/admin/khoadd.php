<?php
$db=str_replace('add','',json_decode($data['page']));//default

?>
<form class="" method="post" enctype="multipart/form-data" action="admin/add">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
         NHẬP KHO
     </div>
     <div class="d-flex px-2">
        <input class="btn btn-danger btn-sm" type="button" value="Back" 
        onclick="window.location.href='admin/listr/<?php echo $db; ?>'" 
        />

    </div>
</div>
<div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light"  style="height:86vh">
    <!---- khung trai-->
    <div class="col-12 col-md-12 d-flex flex-wrap">
        <input type="hidden" name="model" value="<?php echo  json_decode($data['model']); ?>"/>

        <!-- form nhap -->
        <div class="col-12 d-flex flex-wrap p-2">
            <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                <div class="col-12 fs-5 p-3">
                   Thông tin khách hàng/nhà cung cấp
               </div>
               <div class="col-12 col-md-12 px-3 pb-3">
                <label for="input07" class="form-label">Phân loại</label>
                <div class="d-flex">
                    <div class="form-check pe-4 py-1">
                      <input class="form-check-input" type="radio" value="1" id="radio1" name="phan_loai" checked>
                      <label class="form-check-label" for="radio1">
                        Nhập kho
                    </label>
                </div>
                <div class="form-check pe-4 py-1">
                  <input class="form-check-input" type="radio" value="2" id="radio2" name="phan_loai">
                  <label class="form-check-label" for="radio2">
                    Xuất kho
                </label>
            </div>

        </div>

    </div>
    <div class="col-12 col-md-4 px-3 pb-3">
        <label for="inputEmail4" class="form-label" >Tên khách hàng/Nhà cung cấp</label>
        <input type="text" name="name" required="required" class="form-control form-control-sm" id="inputEmail4">
    </div>
    <div class="col-12 col-md-4 px-3 pb-3">
        <label for="inputEmail4" class="form-label" >Số điện thoại</label>
        <input type="text" name="so_dien_thoai" required="required" class="form-control form-control-sm" id="inputEmail4">
    </div>
    <div class="col-12 col-md-4 px-3 pb-3">
        <label for="inputEmail4" class="form-label" >Email</label>
        <input type="text" name="email" required="required" class="form-control form-control-sm" id="inputEmail4">
    </div> 
    <div class="col-12 col-md-12 px-3 pb-3">
        <label for="inputEmail4" class="form-label" >Ghi chú</label>
        <input type="text" name="dien_giai" required="required" class="form-control form-control-sm" id="inputEmail4">
    </div> 
    <div class="col-12 col-md-12 px-3 pb-3">
        <label for="inputEmail4" class="form-label" >Địa chỉ</label>
        <input type="text" name="dia_chi" required="required" class="form-control form-control-sm" id="inputEmail4">
    </div>
</div>
</div>

<div class="col-12 d-flex flex-wrap p-2">
    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
        <div class="col-12 fs-5 p-3">
           Thông tin sản phẩm
       </div>

       <div class="col-12 col-md-12 px-3 pb-3">
         <table class="table table-striped table-hover">
          <thead>
            <tr>
                <!-- ctr shift mui ten len -->
                <th scope="col">#</th>
                <th scope="col">Hình</th> 
                <th scope="col">Sản phẩm</th>
                <th scope="col">Giá nhập</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Giá sale(%)</th>
                <th scope="col">Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sanpham=json_decode($data['sanpham']);
            foreach ($sanpham as $key => $value) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $value->id ?>
                        <input type="hidden" name="id[<?php echo $value->id ?>]" value="<?php echo $value->id ?>">
                    </th>
                    <td > <img style="height: 30px;" src="public/upload/<?php echo $value->image ?>"alt=""> </td>
                    <td><?php echo $value->name ?></td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" aria-label="Recipient's username" aria-describedby="basic-addon2" name="m_gianhap[<?php echo $value->id ?>]">
                            <span class="input-group-text input-group-sm" id="basic-addon2">VND</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" aria-label="Recipient's username" aria-describedby="basic-addon2" name="m_giaban[<?php echo $value->id ?>]">
                            <span class="input-group-text input-group-sm" id="basic-addon2">VND</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" aria-label="Recipient's username" aria-describedby="basic-addon2" name="m_giasale[<?php echo $value->id ?>]">
                            <span class="input-group-text input-group-sm" id="basic-addon2">%</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-control-sm" aria-label="Recipient's username" aria-describedby="basic-addon2" name="m_soluong[<?php echo $value->id ?>]">
                            <span class="input-group-text input-group-sm" id="basic-addon2"><?php echo $value->don_vi_tinh ?></span>
                        </div>
                    </td>
                </tr> 

                <?php
            } 
            ?>


        </tbody>
    </table>
    <div class="col-12 d-flex justify-content-end pt-3">
        <input class="btn btn-primary btn-sm me-3" type="submit" value="Save" name="bn"  />  
    </div>
</div>





</div>
</div>

<!-- end form nhap -->


</div> 
<!-- end khung trai  -->
<!-- khung phai   -->

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


