<?php
        $a=json_decode($data['numpage']);
        $so=json_decode($data['sumpage']);
        $db=str_replace('default','',json_decode($data['page']));
        $title_name='List of recruitment'
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
        <div class="p-6 d-flex justify-content-between align-items-center">
            <?php require "mvc/views/plugin/client/default/top.php"; ?>
        </div>
        <div class="p-6 overflow-auto scrollbar" style="height:86vh">
            <div class="p-2">
                <table class="table table-striped table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="align-middle text-center" scope="col">
                                <!-- <input class="cursor" type="checkbox" value="0" title="check all" id="checkall"/>
                                <input type="hidden" value="<?php echo $a; ?>" name="page" />
                                <input type="hidden" value="<?php echo $db; ?>" name="db" /> -->
                                ID
                            </th>
                            <th scope="col">
                                Tiêu đề tin td
                            </th>
                            <th scope="col">
                                Hình mô tả
                            </th>
                            <th scope="col">
                                Lượt xem
                            </th>
                            <th scope="col">
                                Trạng thái
                            </th>
                            <th scope="col">
                                Ngày đăng
                            </th>
                            <th scope="col">
                                Ứng tuyển
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
                                        <?php echo $value->id; ?>
                                        
                                    </td>
                                    <td class="align-middle" scope="row">
                                        <?php echo $value->name; ?>
                                    </td>
                                    <td class="align-middle text-nowrap" scope="row">
                                        <?php require "mvc/views/plugin/client/default/image.php"; ?>
                                    </td>
                                    <td class="align-middle" scope="row">
                                        <?php echo $value->view; ?>
                                    </td>
                                    <td class="align-middle " scope="row">
                                        <?php 
                                        if($value->hide==2){
                                        ?>
                                            <div class="text-danger">
                                              <i class="fa-solid fa-circle-info fa-beat-fade" 
                                                  style="--fa-beat-fade-opacity: 0.5; --fa-beat-fade-scale: 1.075;" 
                                              >
                                              </i> Chờ duyệt
                                            </div> 

                                        <?php
                                        } else {
                                        ?>
                                            <div class="" style="color:green;">
                                                <i class="fa-regular fa-circle-check"></i> Đã duyệt
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td class="align-middle" scope="row">
                                        <?php require "mvc/views/plugin/client/default/postday.php"; ?>
                                    </td>
                                    <td class="align-middle text-nowrap" scope="row">
                                        
                                    </td>
                                    
                                  
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="p-2 d-flex">
                <?php require "mvc/views/plugin/client/default/phantrang.php"; ?>
            </div>

        </div>
    </form>
