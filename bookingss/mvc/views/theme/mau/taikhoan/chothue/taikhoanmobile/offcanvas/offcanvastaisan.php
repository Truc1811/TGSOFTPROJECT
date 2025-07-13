<style>
     .clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Giới hạn 2 dòng */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .chitiettaisan {
        position: fixed;
        top: 0;
        left: 100%;
        /* Bắt đầu ngoài bên phải */
        width: 100%;
        height: 100%;
        z-index: -2;
        visibility: hidden;
        overflow-y: auto;
        transition: left 0.4s ease, visibility 0.4s ease, z-index 0s 0.4s;
        background-color: white;
        /* đảm bảo nền không trong suốt */
    }

    .showchitiettaisan {
        left: 0%;
        /* Trượt vào giữa */
        z-index: 999;
        visibility: visible;
        transition: left 0.4s ease, visibility 0s, z-index 0s;
    }


    .themphong {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: white;
        z-index: 1050;
        transform: translateX(-100%);
        /* Bắt đầu ngoài màn hình bên trái */
        opacity: 0;
        visibility: hidden;
        transition: transform 0.4s ease, opacity 0.4s ease, visibility 0.4s ease;
        overflow-y: auto;
    }

    .showthemphong {
        transform: translateX(0%);
        /* Trượt vào từ trái */
        opacity: 1;
        visibility: visible;
    }


    .xemdsphong {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: white;
        z-index: 1050;
        transform: translateX(100%);
        opacity: 0;
        visibility: hidden;
        transition: transform 0.4s ease, visibility 0.4s ease;

        overflow-y: auto;
        /* Cho phép cuộn theo chiều dọc */
        scrollbar-width: none;
        
        /* Ẩn thanh cuộn trên Firefox */

    }

    .showxemdsphong {
        transform: translateX(0%);
        opacity: 1;
        visibility: visible;

    }

    .tab-scroll-tsmb::-webkit-scrollbar {
        display: none;
    }
    
</style>
<?php
$servicemb = json_decode($data['service']);

$mang_taisan = [
    [
        'https://studiochupanhdep.com/Upload/Newsimages/phong-khach-san-tt-studio.jpg',
        'Khách Sạn Nam Giao',
        'Thiết kế sang trọng mang phong cách Pháp cổ điển',
        'Giá: 5,000,000 VND - Tháng',
        'ks001'
    ],
    [
        'https://kksapahotel.com/uploads/images/VQK_2153%20(1).jpg',
        'Nhà Hàng Biển Đông',
        'Hải sản tươi sống, không gian mở sát biển',
        'Giá: từ 200,000 VND/người',
        'nh002'
    ],
    [
        'https://acihome.vn/uploads/15/thiet-ke-khach-san-hien-dai-co-cac-ban-cong-view-bien-sieu-dep-seaside-mirage-hotel-3.JPG',
        'Khách Sạn Mường Thanh Luxury',
        'Gần sân bay, có hồ bơi và view thành phố',
        'Giá: 4,200,000 VND - Tháng',
        'ks003'
    ],
    [
        'https://acihome.vn/uploads/15/thiet-ke-khach-san-kien-truc-chuyen-nghiep-va-sang-trong-bia-danh-muc.jpg',
        'Nhà Hàng Gánh Hà Nội',
        'Ẩm thực truyền thống, không gian ấm cúng',
        'Giá: từ 180,000 VND/người',
        'nh004'
    ],
    [
        'https://shac.vn/wp-content/uploads/2024/10/Hinh-anh-khach-san-dep-5-sao-sang-trong-duoc-khach-hang-lua-chon-cho-nam-2025.jpg',
        'Khách Sạn The Cliff Resort',
        'Resort ven biển có hồ bơi vô cực và spa cao cấp',
        'Giá: 6,800,000 VND - Tháng',
        'ks005'
    ],
    [
        'https://funnycms.com/uploads/1387/aci/mau-khach-san-ba-sao-dep/mau-khach-san-3-sao-dep-acihome-vn-1.jpg',
        'Nhà Hàng Sông Trăng',
        'Nhà hàng nổi ven sông, phục vụ các món Việt đặc sắc',
        'Giá: từ 250,000 VND/người',
        'nh006'
    ]
];
?>
<div class="container-fluid tab-scroll-tsmb" style=" overflow-y:auto;">
    <div class="row">
        <div class="col-12 col-md-12 d-flex justify-content-between">
            <h2 class="mb-4">Danh sách tài sản</h2>
        </div>
    </div>

    <div class="row">
        <?php foreach ($servicemb as $key => $valtsmb) { ?>
            <div class="col-12 mb-3">
                <div class="card taisan">
                    <img src="public/upload/<?php echo $valtsmb->image; ?>" class="object-fit-cover h-100" alt="Ảnh tài sản 1">
                    <div class="card-body">
                        <h5 class="card-title "><?php echo $valtsmb->name; ?></h5>
                        <p class="card-text text-muted small clamp-2"><?php echo strip_tags($valtsmb->content); ?></p>
                        <p class="text-danger fw-bold"><?php echo $valtsmb->price; ?></p>
                    </div>
                </div>
                <div class=" chitiettaisan show_don_hang bg-white ">
                    <div class="d-flex justify-content-between bg-primary text-white mb-3">
                        <!-- Tiêu đề -->
                        <div>
                            <h5 class="m-3 text-center fw-bold">Chi tiết tài sản </h5>
                        </div>
                        <!-- Nút quay lại -->
                        <div class="m-3 dong pe-3" title="Quay lại">
                            <i class="bi bi-arrow-left" style="font-size: 25px;"></i>
                        </div>
                    </div>
                    <div class="card border-0 m-2">
                        <img src="public/upload/<?php echo $valtsmb->image; ?>" class="object-fit-cover h-100" alt="Ảnh tài sản 1">
                        <div class="card-body">
                            <h5 class="card-title "><?php echo $valtsmb->name; ?></h5>
                            <p class="card-text text-black-50"><?php echo $valtsmb->content; ?></p>
                            <p class="card-text text-black-50"><?php echo $valtsmb->address; ?></p>
                        </div>
                        <div class="d-flex justify-content-end mb-3">
                            <a class="btn btn-info btn-sm text-white me-2 text-nowrap nutthemphong">Thêm phòng</a>
                            <a class="btn btn-info btn-sm text-white text-nowrap nutdsphong">DS phòng</a>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>


</div>
<div class="themphong bg-white">
    <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanmobile/dangphong.php"; ?>
</div>
<div class="xemdsphong bg-white">
    <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanmobile/danhsachphong.php"; ?>
</div>

<script>
    $(document).ready(function() {
        $('.taisan').click(function() {
            $(this).next().addClass('showchitiettaisan');
        });

        $('.dong').click(function() {
            $('.chitiettaisan').removeClass('showchitiettaisan');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.nutthemphong').click(function() {
            $('.themphong').addClass('showthemphong');
        });

        $('.dongthemphong').click(function() {
            $('.themphong').removeClass('showthemphong');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.nutdsphong').click(function() {
            $('.xemdsphong').addClass('showxemdsphong');
        });

        $('.dongdsphong').click(function() {
            $('.xemdsphong').removeClass('showxemdsphong');
        });
    });
</script>