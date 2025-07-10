<?php
$db=str_replace('add','',json_decode($data['page']));//default
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
<form class="" method="post" enctype="multipart/form-data" action="admin/add">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <div class="fs-5 fw-bold px-2">
        Add <?php echo $title_name; ?>
        </div>
        <div class="d-flex px-2">
            
            <input class="btn btn-primary" type="submit" value="Save" name="bn"  />
            <!-- <input class="btn btn-danger" type="button" value="Back" 
            onclick="window.location.href='admin/listr/<?php echo $db; ?>'" 
            /> -->
            
        </div>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar"  style="height:86vh">
            <!---- khung trai-->
            <div class="col-12 col-md-9 d-flex flex-wrap p-2">
                <div class="col-12 fs-5 mb-3">
                        <?php echo ucfirst($title_name); ?> information
                        <input type="hidden" name="model" value="<?php echo  json_decode($data['model']); ?>"/>
                </div>

                <!-- form nhap -->
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="name" class="form-label" >Name(*)</label>
                    <input type="text" name="name" required="required" class="form-control" id="name">
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="link" class="form-label" >Link</label>
                    <select class="form-select" name="link" aria-label="Default select example">
                            <?php
                            $listp=$goithuvien->cauhinhread('all');
                            foreach($listp as $value){
                            ?>
                            <option value="<?php echo $value; ?>" >
                                <?php echo $value; ?>
                            </option>
                            <?php
                            }
                            ?>
                    </select>
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="rank" class="form-label" >Rank</label>
                    <input type="number" name="rank" value="1" min="1" class="form-control" id="rank">
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="icon" class="form-label" >Icon</label>
                    <input type="text" name="icon" class="form-control" id="icon">
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image"  class="form-control" id="image">
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="level" class="form-label" >Level</label>
                    <select class="form-select" aria-label="Default select example" name="level" id="level">
                      <option value="1" selected="selected">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 pe-0 pe-md-4 mb-3">
                    <label for="fa" class="form-label">Father level</label>
                    <div class="p-2 border rounded-3" id="load_level">
                        Please select level
                    </div>
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
                <!-- end form nhap -->
                
            </div> 
            <!-- end khung trai  -->
            <!-- khung phai   -->
            <div class="col-12 col-md-3 px-2 px-md-2">
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

