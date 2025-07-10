<?php
$mang_th = [
    ['Mã GD'],
    ['Người thuê'],
    ['Tên khách sạn'],
    ['Số phòng'],
    ['Giá thuê'],
    ['Ngày']
];

$mang_td = [

    ['KH001', 'Trần Thị Mai', 'Khách sạn Ocean View', 'Phòng 202', '650.000 VND', '01/07/2025'],
    ['NH002', 'Lê Văn Hùng', 'Nhà hàng Hoa Sen', 'Bàn 12', '1.200.000 VND', '03/07/2025'],
    ['KH003', 'Phạm Thị Huệ', 'Khách sạn Grand Sunrise', 'Phòng 505', '720.000 VND', '05/07/2025'],
    ['NH004', 'Nguyễn Hữu Tài', 'Nhà hàng Hương Quê', 'Bàn 5', '950.000 VND', '06/07/2025'],
    ['KH005', 'Đặng Minh Tuấn', 'Khách sạn Golden Star', 'Phòng 101', '560.000 VND', '07/07/2025'],
    ['NH006', 'Vũ Thị Lan', 'Nhà hàng Biển Xanh', 'Bàn 9', '1.300.000 VND', '08/07/2025'],
    ['KH007', 'Hoàng Văn Bảo', 'Khách sạn Mường Thanh', 'Phòng 803', '800.000 VND', '10/07/2025'],
    ['NH008', 'Lê Thị Ngọc', 'Nhà hàng Sông Trăng', 'Bàn 2', '1.000.000 VND', '11/07/2025'],
    ['KH009', 'Phan Thanh Hòa', 'Khách sạn Đà Lạt Palace', 'Phòng 404', '1.200.000 VND', '12/07/2025'],
    ['NH010', 'Bùi Đức Duy', 'Nhà hàng Làng Việt', 'Bàn 7', '890.000 VND', '13/07/2025']


];

?>

<div class="container-fluid">
    <div class="row ">
        <div class="col-12 col-md-12 p-3 mt-2">
            <h2 class="mb-3">Thông tin Giao dịch cho thuê </h2>
            <div class="">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>
                                <div class="col-12 d-flex">
                                    <div class="col-1 fw-bold"><?php echo $mang_th[0][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[1][0] ?></div>
                                    <div class="col-3 fw-bold"><?php echo $mang_th[2][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[3][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[4][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[5][0] ?></div>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mang_td as $key => $valtd) { ?>
                            <tr>
                                <td>
                                    <div class="col-12 d-flex">
                                        <div class="col-1"><?php echo $valtd[0] ?></div>
                                        <div class="col-2"><?php echo $valtd[1] ?></div>
                                        <div class="col-3"><?php echo $valtd[2] ?></div>
                                        <div class="col-2"><?php echo $valtd[3] ?></div>
                                        <div class="col-2"><?php echo $valtd[4] ?></div>
                                        <div class="col-2"><?php echo $valtd[5] ?></div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>