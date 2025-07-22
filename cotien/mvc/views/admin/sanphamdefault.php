<?php
$a=json_decode($data['numpage']);
$so=json_decode($data['sumpage']);
$db=str_replace('default','',json_decode($data['page']));
$title_name='Danh sách sản phẩm'
?>
<script>
    $(document).ready(function(){
        $('#checkall').click(function(){
            var check=$('#checkall').is(':checked');
            if(check){
                $('.thecheck').prop('checked',true);
            } else {
                $('.thecheck').prop('checked',false);
            }       
        });
    });
</script>

<form method="post" action="admin/delete">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height:6vh">
        <?php require "mvc/views/plugin/admin/default/top.php"; ?>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
        <!-- khung trai -->
        <div class="col-12 col-md-9 d-flex flex-wrap">
            <div class="col-12 d-flex flex-wrap p-2">
                <!-- nen trang -->
                <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                    <div class="col-12 p-3">
                        <table class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center" scope="col">
                                        <input class="cursor" type="checkbox" value="0" title="check all" id="checkall"/>
                                        <input type="hidden" value="<?php echo $a; ?>" name="page" />
                                        <input type="hidden" value="<?php echo $db; ?>" name="db" />
                                    </th>
                                    <th scope="col">
                                        Image
                                    </th>
                                    <th scope="col">
                                        Name
                                    </th>
                                    <th scope="col">
                                        Category
                                    </th>
                                    <th scope="col">
                                        Mã sản phẩm
                                    </th>
                                    <th scope="col">
                                        Đơn vị tính
                                    </th>
                                    <th scope="col">
                                        Số lượng
                                    </th>
                                    <th class="text-center" scope="col">
                                        Post day
                                    </th>
                                    <th class="text-center" scope="col">
                                        Update/Remove
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $menu1=json_decode($data['menu1']);
                                $menu2=json_decode($data['menu2']);
                                $menu3=json_decode($data['menu3']);
                                $mang=json_decode($data['dataa']);
                                foreach($mang as $value){
                                    ?>
                                    <tr>
                                        <td class="align-middle text-center" scope="row">
                                            <input type="checkbox" value="<?php echo $value->id; ?>" name="id[]" class="thecheck cursor"/>
                                        </td>
                                        <td scope="row">
                                            <?php require "mvc/views/plugin/admin/default/image.php"; ?>
                                        </td>
                                        <td class="align-middle text-nowrap" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/name.php"; ?>
                                        </td>
                                        <td class="align-middle" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/catalogy.php"; ?>
                                        </td>
                                        <td class="align-middle" scope="row">
                                            <?php echo $value->ma_san_pham; ?>
                                        </td>
                                        <td class="align-middle" scope="row">
                                             <?php echo $value->don_vi_tinh; ?>
                                        </td>
                                         <td class="align-middle" scope="row">
                                             <?php echo $value->soluong; ?>
                                        </td>
                                        <td class="align-middle text-center" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/postday.php"; ?>
                                        </td>
                                        <td class="align-middle text-nowrap" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/delete.php"; ?>
                                        </td>


                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 p-3 d-flex">
                        <?php require "mvc/views/plugin/admin/default/phantrang.php"; ?>
                    </div>
                </div>
                <!-- end nen trang  -->
            </div>
        </div>

        <!-- khung phai -->
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
                    <div class="rounded-3 px-3 pb-3 load_menu col-12">
                        <?php
                        $menu1=json_decode($data['menu1']);
                        $menu2=json_decode($data['menu2']);
                        $menu3=json_decode($data['menu3']);
                        $menu_id=1;
                        foreach($menu1 as $value1){
                            if($value1->khongdau=='san-pham'){
                                $menu_id=$value1->id;
                                ?>
                                <div class="form-check py-1">
                                    <!-- <input class="form-check-input" type="checkbox" value="<?php echo $value1->id; ?>" id="<?php echo 'f'.$value1->id; ?>" name="father_level[]"> -->
                                    <label class="form-check-label" for="<?php echo 'f'.$value1->id; ?>">
                                        <?php echo $value1->name; ?>
                                    </label>
                                </div>
                                <?php
                                foreach($menu2 as $value2){
                                    if(in_array($value1->id,explode(',',$value2->father_level))){
                                        ?>
                                        <div class="form-check py-1 ps-5 d-flex justify-content-between">
                                            <div>
                                                <!-- <input class="form-check-input" type="checkbox" value="<?php echo $value2->id; ?>" id="<?php echo 'f'.$value2->id; ?>" name="father_level[]"> -->
                                                <label class="form-check-label" for="<?php echo 'f'.$value2->id; ?>">
                                                    <?php echo $value2->name; ?>
                                                </label>

                                            </div>
                                            <div class="btn btn-primary btn-sm man_sua" 
                                            data-id="<?php echo $value2->id; ?>" 
                                            data-name="<?php echo $value2->name; ?>"
                                            data-rank="<?php echo $value2->rank; ?>"
                                            data-bs-toggle="modal" data-bs-target="#newsuaModal"
                                            >
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                    </div>
                                    <?php
                                    foreach($menu3 as $value3){

                                        if(in_array($value2->id,explode(',',$value3->father_level))){
                                            ?>
                                            <div class="form-check py-1 ps-5 ms-4">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $value3->id; ?>" id="<?php echo 'f'.$value3->id; ?>" name="father_level[]">
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
                                                $('.man_sua').click(function(){
                                                    var id=$(this).data('id');
                                                    var name=$(this).data('name');
                                                    var rank=$(this).data('rank');
                                                    $('#suaid').val(id);
                                                    $('#suaname').val(name);
                                                    $('#suarank').val(rank);
                                                });

                                                $('.sua_menu').click(function(){
                                                    var id=$('#suaid').val();
                                                    var name=$('#suaname').val();
                                                    var rank=$('#suarank').val();
                                                    $.post(
                                                        'ajax/sua_menu', // URL 
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



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newsuaModal">
  Launch demo modal
</button> -->
<!-- Modal -->
<div class="modal fade" id="newsuaModal" tabindex="-1" aria-labelledby="newsuaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newsuaModalLabel">Thêm danh mục news</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input class="form-control form-control-sm" type="text" id="suaname" placeholder="Tên danh mục...">
        </div>
        <div class="">
            <label class="form-label">Thứ tự ưu tiên</label>
            <input class="form-control form-control-sm" type="number" id="suarank">
            <input type="hidden" value="<?php echo $menu_id; ?>" id="suaid">
        </div>
    </div>
    <div class="modal-footer">
        <div class="btn btn-primary btn-sm sua_menu" data-bs-dismiss="modal">Save changes</div>
    </div>
</div>
</div>
</div>



