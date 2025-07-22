<div class="mb-3 ">
        Menu
</div>
<div class="border rounded-3 p-2">
    <?php
    $menu1=json_decode($data['menu1']);
    $menu2=json_decode($data['menu2']);
    $menu3=json_decode($data['menu3']);
    foreach($menu1 as $value1){
    ?>
    <div class="py-2 d-flex justify-content-between">
        <div class="" >
        <?php echo $value1->name; ?>
        </div>
        <div class="d-flex justify-content-center">
            <div class="me-2 p-1 cursor" 
                onclick="window.location.href='admin/update/<?php echo $db; ?>/1/<?php echo $value1->id; ?>'"
            >
                  <i class="fas fa-pen-fancy cursor_pointer"></i>
            </div>
            <div class="ms-2">
                <a class="p-1 text-black" 
                onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này?')" 
                 href="admin/delete/<?php echo $db.'/1/'.$value1->id; ?>"
                >
                <i class="fas fa-trash-alt"></i>
                </a>
               
            </div>

        </div>
    </div>
            <?php
            foreach($menu2 as $value2){
                if(in_array($value1->id,explode(',',$value2->father_level))){
            ?>
            <div class="py-2 d-flex justify-content-between ps-4">
                
                <div class="">
                <?php echo '-&ensp;'.$value2->name; ?>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="me-2 p-1 cursor" 
                        onclick="window.location.href='admin/update/<?php echo $db; ?>/1/<?php echo $value2->id; ?>'"
                    >
                          <i class="fas fa-pen-fancy cursor_pointer"></i>
                    </div>
                    <div class="ms-2">
                        <a class="p-1 text-black" 
                        onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này?')" 
                         href="admin/delete/<?php echo $db.'/1/'.$value2->id; ?>"
                        >
                        <i class="fas fa-trash-alt"></i>
                        </a>
                       
                    </div>

                </div>
            </div>
                    <?php
                    foreach($menu3 as $value3){

                        if(in_array($value2->id,explode(',',$value3->father_level))){
                    ?>
                    <div class="py-2 d-flex justify-content-between ps-5">
                        
                        <div class="" >
                        <?php echo '+&ensp;'.$value3->name; ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="me-2 p-1 cursor" 
                                onclick="window.location.href='admin/update/<?php echo $db; ?>/1/<?php echo $value3->id; ?>'"
                            >
                                  <i class="fas fa-pen-fancy cursor_pointer"></i>
                            </div>
                            <div class="ms-2">
                                <a class="p-1 text-black" 
                                onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này?')" 
                                 href="admin/delete/<?php echo $db.'/1/'.$value3->id; ?>"
                                >
                                <i class="fas fa-trash-alt"></i>
                                </a>
                               
                            </div>

                        </div>
                    </div>
                    
    <?php
    }}}}}
    ?>

</div>