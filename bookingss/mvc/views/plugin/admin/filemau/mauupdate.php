<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);
$title_name='gallery';//change
?>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh">
        <?php require "mvc/views/plugin/admin/update/top.php"; ?>
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
                <?php 
                    require "mvc/views/plugin/admin/update/default.php";
                    require "mvc/views/plugin/admin/update/seo.php";
                    require "mvc/views/plugin/admin/update/properties.php";
                ?>
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
                    require "mvc/views/plugin/admin/update/catalogy.php";
                ?>
                <!-- end left catalogy -->
            </div>
            <!-- end khung phai -->
            
    </div>
    
</form>

