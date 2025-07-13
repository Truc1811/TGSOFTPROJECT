<?php
$mang_th = [
    ['Mã giao dịch'],
    ['Người thuê'],
    ['Tên khách sạn'],
    ['Số phòng'],
    ['Giá thuê']
];

$mang_td = [
    ['01', 'Nguyễn Văn Nam', 'khách sạn new word', 'P309', '590.000'],
    ['01', 'Nguyễn Văn Mạnh', 'khách sạn ngôi sao', 'P805', '590.000'],
    ['01', 'Nguyễn Văn Khỏe', 'khách sạn new word', 'P502', '200.000'],
    ['01', 'Nguyễn Văn Em', 'khách sạn hải yến', 'P309', '400.000'],
    ['01', 'Nguyễn Văn Út', 'khách sạn new word', 'P309', '300.000'],
];



?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <h1>Thông tin Giao dịch cho thuê </h1>
            <div class="">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>
                                <div class="col-12 d-flex">
                                    <div class="col-2 fw-bold"><?php echo $mang_th[0][0] ?></div>
                                    <div class="col-3 fw-bold"><?php echo $mang_th[1][0] ?></div>
                                    <div class="col-3 fw-bold"><?php echo $mang_th[2][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[3][0] ?></div>
                                    <div class="col-2 fw-bold"><?php echo $mang_th[4][0] ?></div>
                                </div>
                            </td>
                       </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mang_td as $key => $valtd) { ?>
                            <tr>
                                <td>
                                    <div class="col-12 d-flex">
                                        <div class="col-2"><?php echo $valtd[0] ?></div>
                                        <div class="col-3"><?php echo $valtd[1] ?></div>
                                        <div class="col-3"><?php echo $valtd[2] ?></div>
                                        <div class="col-2"><?php echo $valtd[3] ?></div>
                                        <div class="col-2"><?php echo $valtd[4] ?></div>
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