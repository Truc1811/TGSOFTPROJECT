<?php
$mang_taisan = [
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Nam Giao', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o11'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Ngô Gia', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o12'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Hồng Phong', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o13'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Nam Du', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o14'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Paty', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o41'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Red', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o514'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Reddbul', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o614'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Châu Phú', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o164'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Thiên Thanh', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o84'],
];
?>
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-12 col-md-12 d-flex justify-content-between">
            <h2 class="mb-3">Danh sách tài sản</h2>
            <div><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#dangtaisanModal">Đăng tài sản</button></button></div>
        </div>
    </div>

    <div class="row" style="overflow-y: auto;height:80vh">
        <?php foreach ($mang_taisan as $key => $valts) { ?>
            <div class="col-3" >
                <div class="card h-100 " data-bs-toggle="modal" data-bs-target="#<?php echo $valts[4]; ?>Modal">
                    <img src="<?php echo $valts[0]; ?>" class="object-fit-cover h-100" alt="Ảnh tài sản 1">
                    <div class="card-body">
                        <h5 class="card-title "><?php echo $valts[1]; ?></h5>
                        <p class="card-text text-black-50 text-truncate" style="width: 200px;"><?php echo $valts[2]; ?></p>
                        <p class="text-info fw-bold"><?php echo $valts[3]; ?></p>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade mt-2" id="<?php echo $valts[4]; ?>Modal" tabindex="-1" aria-labelledby="<?php echo $valts[4]; ?>ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="<?php echo $valts[4]; ?>ModalLabel">Chi tiết tài sản</h5>
                            <div data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-arrow-left fs-5 text-white"></i></div>
                        </div>
                        <div class="modal-body">
                            <?php require "mvc/views/theme/mau/maudata/maumodal/mauchitietts.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
 <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanpc/dangtaisan.php"; ?>