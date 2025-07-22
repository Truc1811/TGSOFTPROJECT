<?php
$a = json_decode($data['numpage']);
$so = json_decode($data['sumpage']);
$db = str_replace('default', '', json_decode($data['page']));
$title_name = 'Danh sách user1'
?>
<script>
    $(document).ready(function() {
        $('#checkall').click(function() {
            var check = $('#checkall').is(':checked');
            if (check) {
                $('.thecheck').prop('checked', true);
            } else {
                $('.thecheck').prop('checked', false);
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
                                        <input class="cursor" type="checkbox" value="0" title="check all" id="checkall" />
                                        <input type="hidden" value="<?php echo $a; ?>" name="page" />
                                        <input type="hidden" value="<?php echo $db; ?>" name="db" />
                                    </th>
                                    <th scope="col">
                                        Name
                                    </th>
                                    <th scope="col">
                                        Email
                                    </th>
                                    <th scope="col">
                                        Loại
                                    </th>

                                    <th class="text-center" scope="col">
                                        Ngày tạo
                                    </th>
                                    <th class="text-center" scope="col">
                                        Thao tác
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $mang = json_decode($data['dataa']);
                                echo "<pre>";
                                var_dump($mang);
                                echo "</pre>";

                                foreach ($mang as $value) {
                                ?>
                                    <tr>
                                        <td class="align-middle text-center" scope="row">
                                            <input type="checkbox" value="<?php echo $value->user_id; ?>" name="id[]" class="thecheck cursor" />
                                        </td>
                                        <td class="align-middle text-nowrap" scope="row">
                                            <?php echo $value->name ?>
                                        </td>
                                        <td class="align-middle" scope="row">
                                            <?php echo $value->email ?>
                                        </td>

                                        <td class="align-middle text-center" scope="row">

                                            <?php if ($value->role == 1) {
                                                echo "Vay vốn";
                                            } else {
                                                echo "Đầu tư";
                                            }
                                            ?>
                                        </td>
                                        <td class="align-middle text-center" scope="row">
                                            <?php require "mvc/views/plugin/admin/default/postday.php"; ?>
                                        </td>

                                        <td class=" d-flex justify-content-evenly">
                                            <select class="form-select form-select-sm kyc-status w-75" data-id="<?= $value->user_id ?>">
                                                <option value="pending" <?= $value->kyc_status == 'pending' ? 'selected' : '' ?>>Chờ xác nhận</option>
                                                <option value="approved" <?= $value->kyc_status == 'approved' ? 'selected' : '' ?>>Đã xác nhận</option>
                                                <option value="rejected" <?= $value->kyc_status == 'rejected' ? 'selected' : '' ?>>Đã hủy</option>
                                            </select>
                                            <p class="mt-3"><i class="bi bi-eye-fill fs-4 " data-bs-toggle="modal" data-bs-target="#modal<?= $value->user_id ?>Modal"></i></p>
                                        </td>


                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>

                        </table>
                        <?php foreach ($mang as $value) { ?>
                            <div class="modal fade" id="modal<?= $value->user_id ?>Modal" tabindex="-1" aria-labelledby="modal<?= $value->user_id ?>ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal<?= $value->user_id ?>ModalLabel">Thông tin chi tiết</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Tên</th>
                                                        <td><?= $value->name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ngày sinh</th>
                                                        <td><?= $value->dob ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Số CMND</th>
                                                        <td><?= $value->id_number ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Địa chỉ</th>
                                                        <td><?= $value->address ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ảnh mặt trước</th>
                                                        <td><img src="public/upload/<?php echo $value->front_image ?>" class="" width="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ảnh mặt sau</th>
                                                        <td><img src="public/upload/<?= $value->back_image ?>" class="" width="" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="col-12 p-3 d-flex">
                        <?php require "mvc/views/plugin/admin/default/phantrang.php"; ?>
                    </div>
                </div>
                <!-- end nen trang  -->
            </div>
        </div>
    </div>
</form>



<script>
    $(document).ready(function() {
        $('.kyc-status').on('change', function() {
            const kyc_id = $(this).data('id');
            const status = $(this).val();

            $.ajax({
                url: 'admin/updatestatus',
                type: 'POST',
                data: {
                    id: kyc_id,
                    status: status
                },
                success: function(res) {
                    console.log(res);
                    alert('Cập nhật thành công');

                },
                error: function() {
                    alert('Lỗi khi cập nhật');
                }
            });
        });
    });
</script>