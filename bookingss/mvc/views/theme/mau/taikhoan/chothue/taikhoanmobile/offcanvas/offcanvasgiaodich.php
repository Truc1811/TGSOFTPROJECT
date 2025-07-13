<?php
$mang_th = [
    ['Mã giao dịch'],
    ['Người thuê'],
    ['Tên khách sạn'],
    ['Số phòng'],
    ['Giá thuê'],
    ['Ngày']
];

$mang_td = [
    ['SFF025', 'Nguyễn Văn Nam', 'Khách sạn New Word', 'P309', '590.000','30/5/2025'],
    ['DFD25', 'Nguyễn Văn Mạnh', 'Khách sạn Ngôi Sao', 'P805', '590.000','30/5/2025'],
    ['RERF2', 'Nguyễn Văn Khỏe', 'Khách sạn Paasi', 'P502', '200.000','30/5/2025'],
    ['GHGH0', 'Nguyễn Thị Tuyền', 'Khách sạn Hải Hến', 'P309', '400.000','30/5/2025'],
    ['YTYT0', 'Nguyễn Đỗ Ngân', 'Khách sạn Phú Sĩ', 'P309', '300.000','30/5/2025'],
];



?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <h3>Thông tin Giao dịch cho thuê </h3>
            <div class="">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>
                                <div class="col-12 d-none d-md-flex">
                                    <div class="col-1 fw-bold"><?php echo $mang_th[0][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[1][0] ?></div>
                                    <div class="col-3 fw-bold"><?php echo $mang_th[2][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[3][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[4][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[4][0] ?></div>
                                </div>
                            </td>
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mang_td as $key => $valtd) { ?>
                            <tr>
                                <td>
                                    <div class="col-12 d-md-flex d-none">
                                        <div class="col-1"><?php echo $valtd[0] ?></div>
                                        <div class="col-2"><?php echo $valtd[1] ?></div>
                                        <div class="col-3"><?php echo $valtd[2] ?></div>
                                        <div class="col-2"><?php echo $valtd[3] ?></div>
                                        <div class="col-2"><?php echo $valtd[4] ?></div>
                                        <div class="col-2"><?php echo $valtd[5] ?></div>
                                    </div>

                                    <div class="col-12 d-md-none d-flex flex-wrap">
                                        <div class="col-6 fw-bold text-primary"><?php echo $valtd[0] ?></div>
                                        <div class="col-6 text-end text-md-start fw-bold text-danger"><?php echo $valtd[4] ?></div>
                                        <div class="col-6"><?php echo $valtd[1] ?></div>
                                        <div class="col-6 text-end text-md-start text-black-50"><?php echo $valtd[3] ?></div>
                                        <div class="col-6 text-black-50 fst-italic"><?php echo $valtd[2] ?></div>
                                        <div class="col-6 text-end text-md-start text-black-50"><?php echo $valtd[5] ?></div>
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