<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);

?>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
        Update Khách hàng
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
                                Thông tin Khách hàng
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Tên(*)</label>
                            <input type="text" name="name" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
                            >
                        </div> 
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >SĐT</label>
                            <input type="text" name="phone" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['phone']){ echo $_POST['phone'];} else { echo $dataa[0]->phone;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Địa chỉ</label>
                            <input type="text" name="address" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['address']){ echo $_POST['address'];} else { echo $dataa[0]->address;} ?>"
                            >
                        </div> 
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="inputEmail4" class="form-label" >Email</label>
                            <input type="text" name="email" required="required" class="form-control form-control-sm" id="inputEmail4"
                                value="<?php if(@$_POST['email']){ echo $_POST['email'];} else { echo $dataa[0]->email;} ?>"
                            >
                        </div>

                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="input07" class="form-label">Thuê</label>
                            <div class="d-flex">
                                <div class="form-check pe-4 py-1">
                                  <input class="form-check-input" type="radio" value="1" id="radio1" name="status"
                                    <?php if($dataa[0]->status=='1'){ echo 'checked="checked"';} ?>
                                  >
                                  <label class="form-check-label" for="radio1">
                                    Nhà hàng
                                  </label>
                                </div>
                                <div class="form-check pe-4 py-1">
                                  <input class="form-check-input" type="radio" value="2" id="radio2" name="status"
                                    <?php if($dataa[0]->status=='2'){ echo 'checked="checked"';} ?>
                                  >
                                  <label class="form-check-label" for="radio2">
                                    Khách sạn
                                  </label>
                                </div>

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

