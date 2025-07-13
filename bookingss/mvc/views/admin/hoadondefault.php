<?php
$a=json_decode($data['numpage']);
$so=json_decode($data['sumpage']);
$db=str_replace('default','',json_decode($data['page']));
$title_name='Danh sách hóa đơn'
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
        <?php require "mvc/views/plugin/admin/default/topmuaban.php"; ?>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
        <!-- khung trai -->
        <div class="col-12 col-md-12 d-flex flex-wrap">
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
                                        Khách hàng
                                    </th>
                                    <th scope="col">
                                        Trạng thái
                                    </th>
                                    <th scope="col">
                                        Diễn giải
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
                                        <td class="align-middle text-center" scope="row">
                                            <?php echo $value->name; ?>
                                        </td>
                                        <td class="align-middle text-center" scope="row">
                                            <?php 
                                            if($value->status==1){
                                                echo 'mua vào';
                                            }else{
                                                echo 'bán ra';
                                            }
                                    
                                            ?>
                                        </td>
                                        <td class="align-middle text-center" scope="row">
                                            <?php echo $value->dien_giai; ?>
                                        </td>
                                        <td class="align-middle text-center" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/postday.php"; ?>
                                        </td>
                                        <td class="align-middle text-nowrap" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/editncckh.php"; ?>

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





