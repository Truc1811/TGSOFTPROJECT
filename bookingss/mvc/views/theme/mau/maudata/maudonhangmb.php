 <style>
     .status-badge {
         font-size: 0.8rem;
         padding: 4px 8px;
         border-radius: 12px;
     }

     .badge-dang {
         background-color: #ff9f43;
         color: white;
     }

     .badge-hoanthanh {
         background-color: #5f6caf;
         color: white;
     }

     .chitietdonhang {
         position: fixed;
         width: 100%;
         z-index: -2;
         transition-duration: 0.4s;
         top: 0;
         left: 100%;
         height: 100%;
         visibility: hidden;

     }

     .showchitietdonhang {
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
 $tab_status = isset($tab_status) ? $tab_status : 'tatca';
    $mang_listdonhang2 = [
        [
            'SON262728',
            '<div class="status-badge bg-primary text-white">Đã xác nhận</div>',
            '3,600,000',
            'Trương Minh Tuấn - <a class="text-decoration-none" >0903344556</a>',
            'Địa chỉ: 89 Điện Biên Phủ, Đà Nẵng',
            'Huế 2N1Đ (18/08 - 19/08)',
            'Indochine Palace Huế, 1 phòng đơn',
            '1 người lớn',
            'Yêu cầu ăn chay',
            'm21'
        ],
        [
            'SON292930',
            '<div class="status-badge bg-info text-white">Chờ xác nhận</div>',
            '6,100,000',
            'Lê Thị Mai - <a class="text-decoration-none" >0988776655</a>',
            'Địa chỉ: 102 Trần Hưng Đạo, Quảng Ninh',
            'Phan Thiết 4N3Đ (22/09 - 25/09)',
            'The Cliff Resort & Residences, 1 phòng đôi',
            '2 người lớn, 1 trẻ em',
            'Yêu cầu gần biển',
            'k34'
        ],
        [
            'SON313233',
            '<div class="status-badge bg-success text-white">Đã thanh toán</div>',
            '5,700,000',
            'Nguyễn Quang Hải - <a class="text-decoration-none" >0988776655</a>',
            'Địa chỉ: 10 Nguyễn Văn Cừ, Bắc Ninh',
            'Buôn Ma Thuột 3N2Đ (07/10 - 09/10)',
            'Elephants Hotel, 1 phòng gia đình',
            '2 người lớn, 2 trẻ em',
            'Cần dịch vụ giặt ủi',
            'x87'
        ],
        [
            'SON343536',
            '<div class="status-badge bg-danger text-white">Đã hủy</div>',
            '8,400,000',
            'Phan Thị Dung - <a class="text-decoration-none" >0988776655</a>',
            'Địa chỉ: 24 Lê Lai, TP.HCM',
            'Cần Thơ 5N4Đ (03/08 - 07/08)',
            'Vinpearl Cần Thơ, 2 phòng deluxe',
            '4 người lớn',
            'Yêu cầu đón tại sân bay',
            'n62'
        ],
        [
            'SON373839',
            '<div class="status-badge bg-success text-white">Đã thanh toán</div>',
            '2,900,000',
            'Đặng Hoàng Nam - <a class="text-decoration-none" >0988776655</a>',
            'Địa chỉ: 75 Trần Quang Diệu, Hà Nội',
            'Ninh Bình 2N1Đ (15/07 - 16/07)',
            'Tam Coc Garden Resort, 1 bungalow',
            '2 người lớn',
            'Yêu cầu không hút thuốc',
            'v53'
        ],
        [
            'SON404142',
            '<div class="status-badge bg-primary text-white">Đã xác nhận</div>',
            '6,800,000',
            'Vũ Thị Thảo - <a class="text-decoration-none" >0988776655</a>',
            'Địa chỉ: 12 Lạc Long Quân, TP.Huế',
            'Quy Nhơn 4N3Đ (19/08 - 22/08)',
            'FLC Quy Nhơn, 1 phòng deluxe',
            '2 người lớn, 1 trẻ em',
            'Yêu cầu buffet sáng',
            'q29'
        ]


    ];

    $ds_donhang_loc = [];

switch ($tab_status) {
    case 'choxacnhanmb':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Chờ xác nhận') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    case 'daxacnhanmb':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Đã xác nhận') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    case 'dahoanthanhmb':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Đã thanh toán') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    case 'donhuymb':
        foreach ($mang_listdonhang2 as $don) {
            if (stripos($don[1], 'Đã hủy') !== false) $ds_donhang_loc[] = $don;
        }
        break;
    default: // tatca
        $ds_donhang_loc = $mang_listdonhang2;
        break;
}
?>

 <div class="input-group  p-3">
     <input type="text" class="form-control" placeholder="Nhập tên, số điện thoại, mã">
     <button class="btn btn-outline-secondary" type="button"><i class="bi bi-upc-scan"></i></button>
 </div>

 <!-- Tabs -->
 <?php
    foreach ($ds_donhang_loc as $key => $valldh2) {
    ?>

     <!-- Order Card 1 -->
     <!-- Order Card: Tour + Khách sạn -->
     <div class="order-card bg-light mb-3 donhang p-3">
         <div class="d-flex justify-content-between align-items-center m-2">
             <div class="text-primary fw-bold"><?php echo $valldh2[0] ?></div>
             <?php echo $valldh2[1] ?>
         </div>
         <div class="m-2">
             <h5 class="text-danger mt-2"><?php echo $valldh2[2] ?></h5>
             <p class="mb-1 fw-bold cursor"><i class="bi bi-person"></i>
                 <?php echo $valldh2[3] ?></p>
             <p class="mb-1 text-black-50"><?php echo $valldh2[4] ?></p>
             <p class="mb-1 text-black-50">Tour:<?php echo $valldh2[5] ?></p>
             <p class="mb-1 text-black-50">Khách sạn:<?php echo $valldh2[6] ?></p>
             <p class="mb-1 text-black-50">Số người: <?php echo $valldh2[7] ?></p>
             <p class="mb-1 text-black-50">Ghi chú: <?php echo $valldh2[8] ?></p>
         </div>
     </div>


     <div class=" chitietdonhang show_don_hang bg-white ">
         <div class="d-flex justify-content-between bg-primary text-white mb-3">
             <!-- Tiêu đề -->
             <div>
                 <h5 class="m-3 text-center">Đơn đặt phòng </h5>
             </div>
             <!-- Nút quay lại -->
             <div class="m-3 dong pe-3" title="Quay lại">
                 <i class="bi bi-arrow-left " style="font-size: 25px;"></i>
             </div>

         </div>
         <div class="card border-0">
             <div class="card-body border-0 p-3">
                 <h6 class="mb-3">🏨 Thông tin đặt phòng khách sạn</h6>
                 <ul class="list-group list-group-flush mb-4 ">
                     <li class="list-group-item text-black-50">Khách sạn: The Myst Đồng Khởi, Quận 1, TP.HCM</li>
                     <li class="list-group-item text-black-50">Loại phòng: Deluxe City View, 1 giường đôi</li>
                     <li class="list-group-item text-black-50">Số đêm lưu trú: 2 đêm (22/07 - 24/07/2025)</li>
                     <li class="list-group-item text-black-50">Số lượng khách: 2 người lớn</li>
                     <li class="list-group-item text-black-50">Dịch vụ kèm theo: Ăn sáng miễn phí, hồ bơi, gym</li>
                     <li class="list-group-item text-black-50 text-danger"><a class="text-decoration-none"> Giá phòng: 3.200.000đ/đêm</a> </li>
                 </ul>

                 <h6 class="mb-3">👤 Thông tin khách hàng</h6>
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item text-black-50">Họ và tên: <a class="text-decoration-none"><?php echo $valldh2[3] ?></a></li>
                     <li class="list-group-item text-black-50"><a href=""></a>Số điện thoại: <a class="text-decoration-none">0903 456 789</a></li>
                     <li class="list-group-item text-black-50">Email: <a class="text-decoration-none">nguyenvana@gmail.com</a></li>
                     <li class="list-group-item text-black-50">Ghi chú: Yêu cầu phòng tầng cao, không hút thuốc</li>
                 </ul>

             </div>
         </div>
     </div>


 <?php
    }
    ?>
 <script>
     $(document).ready(function() {
         $('.donhang').click(function() {
             $(this).next().addClass('showchitietdonhang');
         });

         $('.dong').click(function() {
             $('.chitietdonhang').removeClass('showchitietdonhang');
         });
     });
 </script>