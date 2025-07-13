<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);

?>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
            Update new
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
                        Thông tin new
                    </div>
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Tên(*)</label>
                        <input type="text" name="name" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
                        >
                    </div>
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Khách hàng</label>
                        <input type="text" name="khachhang_id" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['khachhang_id']){ echo $_POST['khachhang_id'];} else { echo $dataa[0]->khachhang_id;} ?>"
                        >
                    </div>
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Phone</label>
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
                        <label for="inputEmail4" class="form-label" >Gía</label>
                        <input type="text" name="price" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['price']){ echo $_POST['price'];} else { echo $dataa[0]->price;} ?>"
                        >
                    </div>
                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="inputEmail4" class="form-label" >Gía giảm</label>
                        <input type="text" name="price_sale" required="required" class="form-control form-control-sm" id="inputEmail4"
                        value="<?php if(@$_POST['price_sale']){ echo $_POST['price_sale'];} else { echo $dataa[0]->price_sale;} ?>"
                        >
                    </div>


                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="image" class="form-label">Hình đại diện(*) (780px x 438px)</label>
                        <input type="file" name="image"  class="form-control form-control-sm get_h" id="image">
                        <input type="hidden" name="image1" value="<?php echo $dataa[0]->image; ?>"  />
                        <div class="d-flex flex-wrap hienthi">
                            <?php if(strlen($dataa[0]->image)>9){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="public/upload/<?php echo $dataa[0]->image; ?>"/>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 px-3 pb-3">
                        <label for="input07" class="form-label">Trạng thái</label>
                        <div class="d-flex">
                            <div class="form-check pe-4 py-1">
                              <input class="form-check-input" type="radio" value="1" id="radio1" name="status"
                              <?php if($dataa[0]->status==1){ echo 'checked="checked"';} ?>
                              >
                              <label class="form-check-label" for="radio1">
                                Show
                            </label>
                        </div>
                        <div class="form-check pe-4 py-1">
                          <input class="form-check-input" type="radio" value="2" id="radio2" name="status"
                          <?php if($dataa[0]->status==2){ echo 'checked="checked"';} ?>
                          >
                          <label class="form-check-label" for="radio2">
                            Hide
                        </label>
                    </div>

                </div>

            </div>
            <div class="col-12 px-3 pb-3">
                <label for="image" class="form-label">Nội dung</label>
                <textarea id="ckeditorkhoahoc" name="content" class="form-control form-control-sm"><?php if(@$_POST['content']){ echo $_POST['content'];} else { echo $dataa[0]->content;} ?></textarea>
                <script>CKEDITOR.replace('ckeditorkhoahoc');</script>
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
            <div class="col-12 fs-5 p-3">
                Catalogy
            </div>

            <div class="col-12 px-3">
                Menu
            </div>
            <div class=" px-3 pb-3">
                <?php
                $menu1=json_decode($data['menu1']);
                $menu2=json_decode($data['menu2']);
                $menu3=json_decode($data['menu3']);
                foreach($menu1 as $value1){
                    if($value1->khongdau=='san-pham'){
                        ?>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="radio" value="<?php echo $value1->id; ?>" id="<?php echo 'f'.$value1->id; ?>" name="father_level"
                            <?php if(in_array($value1->id,explode(',', $dataa[0]->father_level))){ echo 'checked'; } ?>
                            > 
                            <label class="form-check-label" for="<?php echo 'f'.$value1->id; ?>">
                                <?php echo $value1->name; ?>
                            </label>
                        </div>
                        <?php
                        foreach($menu2 as $value2){
                            if(in_array($value1->id,explode(',',$value2->father_level))){
                                ?>
                                <div class="form-check py-1 ps-5">
                                    <input class="form-check-input" type="radio" value="<?php echo $value2->id; ?>" id="<?php echo 'f'.$value2->id; ?>" name="father_level"
                                    <?php if(in_array($value2->id,explode(',', $dataa[0]->father_level))){ echo 'checked'; } ?>
                                    >
                                    <label class="form-check-label" for="<?php echo 'f'.$value2->id; ?>">
                                        <?php echo $value2->name; ?>
                                    </label>
                                </div>
                                <?php
                                foreach($menu3 as $value3){

                                    if(in_array($value2->id,explode(',',$value3->father_level))){
                                        ?>
                                        <div class="form-check py-1 ps-5 ms-4">
                                            <input class="form-check-input" type="radio" value="<?php echo $value3->id; ?>" id="<?php echo 'f'.$value3->id; ?>" name="father_level"
                                            <?php if(in_array($value3->id,explode(',', $dataa[0]->father_level))){ echo 'checked'; } ?>
                                            >
                                            <label class="form-check-label" for="<?php echo 'f'.$value3->id; ?>">
                                                <?php echo $value3->name; ?>
                                            </label>
                                        </div>

                                        <?php
                                    }}}}}}
                                    ?>

                                </div>
                            </div>
                        </div>

                        <!-- end left catalogy -->
                    </div>
                    <!-- end khung phai -->

                </div>

            </form>

