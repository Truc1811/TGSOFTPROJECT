<?php
		$a=json_decode($data['numpage']);
		$so=json_decode($data['sumpage']);
		$db=str_replace('default','',json_decode($data['page']));
        $title_name='List of gallery'
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
        <div class="p-6 overflow-auto scrollbar" style="height:86vh">
            <div class="p-2 table-responsive">
                <table class="table table-striped table-hover table-bordered">
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
                                Views
                            </th>
                            <th scope="col">
                                Post day
                            </th>
                            <th scope="col">
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
                                        <?php echo $value->name; ?>
                                    </td>
                                    <td class="align-middle" scope="row">
                                        <?php require "mvc/views/plugin/admin/default/catalogy.php"; ?>
                                    </td>
                                    <td class="align-middle" scope="row">
                                        <?php echo $value->view; ?>
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
            <div class="p-2 d-flex">
                <?php require "mvc/views/plugin/admin/default/phantrang.php"; ?>
            </div>

        </div>
    </form>
