<?php
$a = json_decode($data['numpage']);
$so = json_decode($data['sumpage']);
$db = str_replace('default', '', json_decode($data['page']));
$title_name = 'Danh sách user'
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
    <div class="p-4  d-flex justify-content-between align-items-center shadow" style="height:6vh">
        <p class="fs-5 fw-bold px-2 mt-3">Danh sách tài khoản</p>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
        <!-- khung trai -->
        <div class="col-12 col-md-12 d-flex flex-wrap">
            <div class="col-12 d-flex flex-wrap p-2">
                <!-- nen trang -->
                <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                    <div class="col-12 p-3">

                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <td>

                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $mang = json_decode($data['dataa']);
                                // echo "<pre>";
                                // var_dump($mang);
                                // echo "</pre>";

                                foreach ($mang as $value) {
                                    $tr_kyc = '';
                                    if ($value->kyc_status == 'approved') {
                                        $tr_kyc = "<span class='badge rounded-pill bg-primary'>$value->kyc_status</span>";
                                    } else if ($value->kyc_status == 'pending') {
                                        $tr_kyc = "<span class='badge rounded-pill bg-info'>$value->kyc_status</span>";
                                    } else {
                                        $tr_kyc = "<span class='badge rounded-pill bg-danger'>$value->kyc_status</span>";
                                    }
                                ?>
                                    <tr data-bs-toggle="modal" data-bs-target="#modal<?= $value->user_id; ?>Modal" style="cursor:pointer">
                                        <td>

                                            <div class="col-md-12 d-flex flex-wrap">
                                                <div class="col-md-6 col-6 fw-bold text-black"><?= $value->name; ?></div>
                                                <div class="col-md-6 col-6 text-md-end text-end" id="tr<?php echo $value->user_id; ?>"><?php echo $tr_kyc; ?></div>
                                                <div class="col-md-6 col-6 text-start text-md-start text-black-50"><?= $value->email; ?></div>
                                                <div class="col-md-6 col-6 text-end text-md-end text-black-50"><?= $value->create_date; ?></div>
                                                <div class="col-md-6 col-6 text-md-start text-black-50">
                                                    <?php if ($value->role == 1) {
                                                        echo "Vay vốn";
                                                    } else {
                                                        echo "Đầu tư";
                                                    }
                                                    ?>
                                                </div>

                                            </div>
                                            <div class="col-md-12" id="me<?php echo $value->user_id; ?>"></div>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>

                        </table>
                        <?php foreach ($mang as $value) { ?>
                            <div class="modal fade" id="modal<?= $value->user_id ?>Modal" tabindex="-1"
                                aria-labelledby="modal<?= $value->user_id ?>ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info d-flex justify-content-center">
                                            <h5 class="modal-title text-white" id="modal<?= $value->user_id ?>ModalLabel">Thông tin chi
                                                tiết</h5>
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
                                                        <td><img src="public/upload/<?php echo $value->front_image ?>"
                                                                class="" width="150px" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Ảnh mặt sau</th>
                                                        <td><img src="public/upload/<?= $value->back_image ?>" class=""
                                                                width="150px" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal"
                                                onclick="xacthuckyc(<?php echo $value->user_id; ?>)">Xác thực</button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="tuchoikyc(<?php echo $value->user_id; ?>)"
                                                data-bs-dismiss="modal">Từ chối</button>
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
    function xacthuckyc(id) {
        let tr = 'tr' + id;
        let me = 'me' + id;
        fetch('admin/updatekyc', {
                method: 'POST', // Sử dụng phương thức POST
                headers: {
                    'Content-Type': 'application/json' // Báo cho server biết dữ liệu gửi lên là JSON
                },
                body: JSON.stringify({ // Chuyển đối tượng JS thành chuỗi JSON
                    id: id,
                    status: "approved"
                })
            })
            .then(response => response.json()) // Chuyển phản hồi từ server (JSON string) thành object JS
            .then(data => {
                console.log(data);
                let er = data.data;
                document.getElementById(tr).innerHTML = er.div;
                document.getElementById(me).innerHTML = er.trangthai;

            })
            .catch(error => console.error("Lỗi:", error));

    }

    function tuchoikyc(id) {
        let tr = 'tr' + id;
        let me = 'me' + id;
        fetch('admin/updatekyc', {
                method: 'POST', // Sử dụng phương thức POST
                headers: {
                    'Content-Type': 'application/json' // Báo cho server biết dữ liệu gửi lên là JSON
                },
                body: JSON.stringify({ // Chuyển đối tượng JS thành chuỗi JSON
                    id: id,
                    status: "rejected"
                })
            })
            .then(response => response.json()) // Chuyển phản hồi từ server (JSON string) thành object JS
            .then(data => {
                console.log(data);
                let er = data.data;
                document.getElementById(tr).innerHTML = er.div;
                document.getElementById(me).innerHTML = er.trangthai;
            })
            .catch(error => console.error("Lỗi:", error));

    }
</script>