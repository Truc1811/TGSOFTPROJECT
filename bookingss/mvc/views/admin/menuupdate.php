<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);
$db=str_replace('model','',$model);
$title_name='menu';//change
?>
<script>
$(document).ready(function(){
    //quản lý hiển thị cấp trong danh mục
    $('#level').change(function(){
     var giatri=$(this).val();
     $.post(
             'ajax/level', // URL 
             {'giatri' : giatri},  // Data
             function(kt){ // Success
                  $('#load_level').html(kt);
             }, 
             'text' // dataTyppe
         );
    });
});
</script>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
        Update <?php echo $title_name; ?>
        </div>
        <div class="d-flex px-2">
            
            <input class="btn btn-primary me-3" type="submit" value="Save" name="bn"  />
            <input class="btn btn-danger" type="button" value="Back" 
            onclick="window.location.href='admin/add/<?php echo str_replace('model','',$model); ?>'"  
            />
            
        </div>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar"  style="height:86vh">
            <!---- khung trai-->
            <div class="col-12 col-md-9 d-flex flex-wrap p-2">
                <div class="col-12 fs-5 mb-3">
                        <?php echo ucfirst($title_name); ?> information
                        <input type="hidden" value="<?php echo $dataa[0]->id; ?>" name="id" />
                        <input type="hidden" value="<?php echo $trang; ?>" name="trang" />
                        <input type="hidden" value="<?php echo $model; ?>" name="model" />
                </div>

                <!-- form nhap -->
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="name" class="form-label" >Name(*)</label>
                    <input type="text" name="name" required="required" class="form-control" id="name"
                        value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
                    >
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="link" class="form-label" >Link</label>
                    <select class="form-select" name="link" aria-label="Default select example">
                            <?php
                            $listp=$goithuvien->cauhinhread('all');
                            foreach($listp as $value){
                            ?>
                            <option value="<?php echo $value; ?>" 
                                <?php if($value==$dataa[0]->link){ echo 'selected="selected"';} ?>
                            >
                                <?php echo $value; ?>
                            </option>
                            <?php
                            }
                            ?>
                    </select>
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="rank" class="form-label" >Rank</label>
                    <input type="number" name="rank" min="1" class="form-control" id="rank"
                        value="<?php if(@$_POST['rank']){ echo $_POST['rank'];} else { echo $dataa[0]->rank;} ?>"
                    >
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="icon" class="form-label" >Icon</label>
                    <input type="text" name="icon" class="form-control" id="icon"
                        value="<?php if(@$_POST['icon']){ echo $_POST['icon'];} else { echo $dataa[0]->icon?:'';} ?>"
                    >
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image"  class="form-control" id="image">
                    <input type="hidden" name="image1" value="<?php echo $dataa[0]->image; ?>"  />
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="level" class="form-label" >Level</label>
                    <select class="form-select" aria-label="Default select example" name="level" id="level">
                            <?php
                            for($i=1;$i<=3;$i++){
                            ?>
                            <option value="<?php echo $i; ?>" 
                                <?php if($dataa[0]->level==$i){ echo 'selected="selected"';} ?> 
                            >
                                <?php echo $i; ?>
                            </option>
                            <?php
                            }
                            ?>
                    </select>
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="fa" class="form-label">Father level</label>
                    <div class="p-2 border rounded-3" id="load_level">
                        <?php
                        $menu1=json_decode($data['menu1']);
                        $menu2=json_decode($data['menu2']);
                        $menu3=json_decode($data['menu3']);
                        if($dataa[0]->level==2){
                                foreach($menu1 as $value1){
                        ?>
                                   <div class="mb-3">
                                   <input class="cursor_pointer" type="checkbox" name="father_level[]" value="<?php echo $value1->id; ?>" 
                                         <?php if(in_array($value1->id,explode(',',$dataa[0]->father_level))){ echo 'checked="checked"'; }  ?> 
                                   />
                                     <?php echo $value1->name; ?>
                                   </div>
                         <?php
                                }
                         } else if($dataa[0]->level==3){
                                foreach($menu1 as $value1){
                        ?>
                                    <div class="mb-3" >
                                    <input class="cursor_pointer" type="checkbox" name="father_level[]" value="<?php echo $value1->id; ?>" 
                                        <?php if(in_array($value1->id,explode(',',$dataa[0]->father_level))){ echo 'checked="checked"'; } ?> 
                                    />
                                    <?php echo $value1->name; ?>
                                    </div>
                         <?php
                                    foreach($menu2 as $value2){
                                        if(in_array($value1->id,explode(',',$value2->father_level))){
                        ?>
                                            <div class="mb-3" >
                                            &ensp;&ensp;
                                            <input class="cursor_pointer" type="checkbox" name="father_level[]" value="<?php echo $value2->id; ?>" 
                                                <?php if(in_array($value2->id,explode(',',$dataa[0]->father_level))){ echo 'checked="checked"'; } ?> 
                                            />
                                            <?php echo $value2->name; ?>
                                            </div>
                        <?php
                                        }
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="input07" class="form-label">Status</label>
                    <div class="d-flex">
                        <div class="form-check pe-4 py-1">
                          <input class="form-check-input" type="radio" value="1" id="radio1" name="hide" 
                            <?php if($dataa[0]->hide==1){ echo 'checked';} ?>
                          >
                          <label class="form-check-label" for="radio1">
                            Show
                          </label>
                        </div>
                        <div class="form-check pe-4 py-1">
                          <input class="form-check-input" type="radio" value="2" id="radio2" name="hide"
                            <?php if($dataa[0]->hide==2){ echo 'checked';} ?>
                          >
                          <label class="form-check-label" for="radio2">
                            Hide
                          </label>
                        </div>

                    </div>
                        
                </div>
                <!-- end form nhap -->
                
            </div> 
            <!-- end khung trai  -->
            <!-- khung phai   -->
            <div class="col-12 col-md-3 px-2 px-md-0">
                <div class="fs-5 mb-2 pt-2">
                        Catalogy
                </div>

                <!-- left catalogy -->
                <?php 
                    require "mvc/views/plugin/admin/add/catalogy_menu.php";
                ?>
                <!-- end left catalogy -->
            </div>
            <!-- end khung phai -->
            
    </div>
    
</form>

