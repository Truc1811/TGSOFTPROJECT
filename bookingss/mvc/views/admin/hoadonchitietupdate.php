<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);

?>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
            Update Hóa đơn
        </div>
        <div class="d-flex px-2">
            
            <input class="btn btn-primary me-3" type="submit" value="Lưu" name="bn"  />
            <input class="btn btn-danger" type="button" value="Quay về" 
            onclick="window.location.href='admin/listr/<?php echo str_replace('model','',$model); ?>'"  
            />
            
        </div>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light"  style="height:86vh">
        <!---- khung trai-->
        <div class="col-12 col-md-9 d-flex flex-wrap">
            <input type="hidden" value="<?php echo $dataa[0]->id; ?>" name="id" />
            <input type="hidden" value="<?php echo $trang; ?>" name="trang" />
            <input type="hidden" value="<?php echo $model; ?>" name="model" />

            <!-- form nhap -->
            <div class="col-12 d-flex flex-wrap p-2">
                <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                    <div class="col-12 fs-5 p-3">
                        Thông tin Hóa đơn
                    </div>
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Tên(*)</label>
                        <input type="text" name="id_khachhang" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['id_khachhang']){ echo $_POST['id_khachhang'];} else { echo $dataa[0]->id_khachhang;} ?>"
                        >
                    </div> 
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Tổng tiền</label>
                        <input type="number" name="tong_tien" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['tong_tien']){ echo $_POST['tong_tien'];} else { echo $dataa[0]->tong_tien;} ?>"
                        >
                    </div> 
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Số chứng từ</label>
                        <input type="number" name="so_chung_tu" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['so_chung_tu']){ echo $_POST['so_chung_tu'];} else { echo $dataa[0]->so_chung_tu;} ?>"
                        >
                    </div> 
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Số hóa đơn</label>
                        <input type="number" name="so_hoa_don" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['so_hoa_don']){ echo $_POST['so_hoa_don'];} else { echo $dataa[0]->so_hoa_don;} ?>"
                        >
                    </div>
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Nhà cung cấp</label>
                        <input type="text" name="id_nhacungcap" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['id_nhacungcap']){ echo $_POST['id_nhacungcap'];} else { echo $dataa[0]->id_nhacungcap;} ?>"
                        >
                    </div>

                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="input07" class="form-label">Phân loại</label>
                        <div class="d-flex">
                            <div class="form-check pe-4 py-1">
                              <input class="form-check-input" type="radio" value="khách mua" id="radio1" name="status"
                              <?php if($dataa[0]->status=='khách mua'){ echo 'checked="checked"';} ?>
                              >
                              <label class="form-check-label" for="radio1">
                                Khách mua
                            </label>
                        </div>
                        <div class="form-check pe-4 py-1">
                          <input class="form-check-input" type="radio" value="nhập hàng" id="radio2" name="status"
                          <?php if($dataa[0]->status=='nhập hàng'){ echo 'checked="checked"';} ?>
                          >
                          <label class="form-check-label" for="radio2">
                            Nhập hàng
                        </label>
                    </div>

                </div>
                
            </div>
            <div class="col-12 px-3 pb-3">
                <label for="image" class="form-label">Nội dung</label>
                <textarea id="ckeditorkhoahoc" name="dien_giai" class="form-control form-control-sm"><?php if(@$_POST['dien_giai']){ echo $_POST['dien_giai'];} else { echo $dataa[0]->dien_giai;} ?></textarea>
                <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
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

