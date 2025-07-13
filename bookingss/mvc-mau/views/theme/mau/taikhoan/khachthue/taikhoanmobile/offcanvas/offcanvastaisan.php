<style>
    .chitiettaisan {
        position: fixed;
        width: 100%;
        z-index: -2;
        transition-duration: 0.4s;
        top: 0;
        left: 100%;
        height: 100%;
        visibility: hidden;
        overflow-y: auto;

    }

    .showchitiettaisan {
        position: fixed;
        width: 100%;
        z-index: 999;
        transition-duration: 0.4s;
        top: 0;
        left: 0%;
        height: 100%;
        visibility: visible;

    }

  
</style>
<?php
$mang_taisan = [
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Ngôi Sao', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o22'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Vạn Tho', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o33'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Chương Dương', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o44'],
    ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn Bông Mai', 'Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp', 'Giá: 5,000,000 VND - Tháng', 'o55'],
];
?>
<div class="container-fluid " style=" overflow-y:auto;">
    <div class="row">
        <div class="col-12 col-md-12 d-flex justify-content-between">
            <h2 class="mb-4">Danh sách tài sản</h2>
        </div>
    </div>

    <div class="row ">
        <?php foreach ($mang_taisan as $key => $valts) { ?>
            <div class="col mb-3">
                <div class="card taisan">
                    <img src="<?php echo $valts[0]; ?>" class="object-fit-cover h-100" alt="Ảnh tài sản 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo $valts[1]; ?></h5>
                        <p class="card-text text-black-50 text-truncate" style="max-width: 150px;"><?php echo $valts[2]; ?></p>
                        <p class="text-danger fw-bold"><?php echo $valts[3]; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class=" chitiettaisan show_don_hang bg-white ">
        <div class="d-flex justify-content-between bg-primary text-white mb-3">
             <!-- Tiêu đề -->
            <div>
                <h5 class="m-3 text-center">Chi tiết tài sản </h5>
            </div>
            <!-- Nút quay lại -->
            <div class="m-3 dong" title="Quay lại">
                <i class="bi bi-arrow-left fs-5"></i>
            </div>
           
        </div>
        <div class="card border-0">
            <img class="p-1" src="https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=" class="card-img-top" alt="Hình ảnh căn hộ">
            <div class="card-body">
                <h3 class="card-title fw-bold">Khách Sạn</h3>
                <p class="card-text text-black-50">Thiết kế sang xịn và kiến trúc đẹp của kỹ sư người Pháp.</p>

                <ul class="list-group list-group-flush my-3 text-black-50">
                    <li class="list-group-item text-black-50">Tình trạng:&ensp;<span class="text-danger">Đã cho thuê</span></li>
                    <li class="list-group-item text-black-50">Số người ở:&ensp;2 người</li>
                    <li class="list-group-item text-black-50">Giá thuê:&ensp;<span class="text-danger fw-bold">5,000,000 VND / Tháng</span></li>
                </ul>
            </div>
        </div>
    </div>


</div>
<?php //require "mvc/views/theme/mau/taikhoan/chothue/taikhoanpc/dangtaisan.php"; 
?>
<script>
    $(document).ready(function() {
        $('.taisan').click(function() {
            $('.chitiettaisan').addClass('showchitiettaisan');
        });

        $('.dong').click(function() {
            $('.chitiettaisan').removeClass('showchitiettaisan');
        });
    });
</script>