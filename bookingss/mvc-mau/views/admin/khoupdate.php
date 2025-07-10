<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);

?>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
        Update Nhà cung cấp
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
                                Thông tin Nhà cung cấp
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Giá bán</label>
                            <input type="text" name="gia_ban" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['gia_ban']){ echo $_POST['gia_ban'];} else { echo $dataa[0]->gia_ban;} ?>"
                            >
                        </div> 
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Giá giảm</label>
                            <input type="text" name="price_sale" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['price_sale']){ echo $_POST['price_sale'];} else { echo $dataa[0]->price_sale;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Giá nhập</label>
                            <input type="text" name="gia_nhap" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['gia_nhap']){ echo $_POST['gia_nhap'];} else { echo $dataa[0]->gia_nhap;} ?>"
                            >
                        </div> 
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Sản phẩm</label>
                            <input type="text" name="id_sanpham" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['id_sanpham']){ echo $_POST['id_sanpham'];} else { echo $dataa[0]->id_sanpham;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Ghi chú</label>
                            <input type="text" name="ghi_chu" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['ghi_chu']){ echo $_POST['ghi_chu'];} else { echo $dataa[0]->ghi_chu;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Đơn vị tính</label>
                            <input type="text" name="don_vi_tinh" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['don_vi_tinh']){ echo $_POST['don_vi_tinh'];} else { echo $dataa[0]->don_vi_tinh;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Mã sản phẩm</label>
                            <input type="text" name="ma_san_pham" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['ma_san_pham']){ echo $_POST['ma_san_pham'];} else { echo $dataa[0]->ma_san_pham;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Số lượng tồn</label>
                            <input type="text" name="so_luong_ton" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['so_luong_ton']){ echo $_POST['so_luong_ton'];} else { echo $dataa[0]->so_luong_ton;} ?>"
                            >
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

