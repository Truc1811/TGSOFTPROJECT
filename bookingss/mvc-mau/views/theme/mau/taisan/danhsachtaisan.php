<style>
    * {
        margin: 0;
        padding: 0;
    }

    .p-6 {
        padding-left: 10vw;
        padding-right: 10vw;
    }

    /* ALL: NỘI DUNG scroll cuộn sản phẩm */
    .scroll-item {
        flex: 0 0 auto;
        width: 250px;
        border-radius: 10px;
    }

    .scroll-item img {
        width: 100%;
        border-radius: 10px;
    }

    .scroll-item-2 {
        flex: 0 0 auto;
        width: 280px;
        border-radius: 10px;
    }

    .bo-tron {
        border-radius: 5px;
    }

    .nut_trai_tim {
        border-radius: 20px;
    }

    .lop_1_card {
        position: relative;
    }

    .lop_2_card {
        position: absolute;
        right: 10px;
        top: 10px;
        color: blueviolet;
    }

    /* nôi dung của Vũng Tàu  */
    .card-img-top {
        width: 100px;
        height: 260px;
    }

    .rating-badge {
        background-color: #003580;
        color: white;
        border-radius: 8px;
        padding: 5px 10px;
        font-weight: bold;
    }

    /* nôi dung bên trái  */
    .filter-box {
        max-width: 400px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
    }

    .map-img {
        width: 100%;
        height: 160px;
        object-fit: cover;
    }

    .filter-section {
        padding: 1rem;
    }

    .filter-section h6 {
        font-weight: bold;
        margin-top: 1rem;
    }

    .show-all {
        color: #0071c2;
        cursor: pointer;
        font-weight: 500;
    }

    /* trái tin của nội dung số 8 */

    .lop_1_trai_tim {
        position: relative;
    }

    /* .lop_1_trai_tim img{
    border-radius: 22px;
   
} */
    .lop_2_trai_tim {
        position: absolute;
        right: 10px;
        top: 10px;
        color: blueviolet;
    }


    
/* chế độ di động dahf cho nội dung scroll : phần xử lý cái chô di động nội dung số 1  */
.luot_cha {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    gap: 1rem;
    padding-bottom: 1rem;
}

.luot_cha .card {
    flex: 0 0 60%;
    scroll-snap-align: start;
}

.scrolling-wrapper::-webkit-scrollbar {
    display: none;
}

/* Phần di động cho cuộn ngnag cái nội dụng  */
.scroll-x {
    overflow-x: auto;
    white-space: nowrap;
}

.scroll-x>* {
    display: inline-block;
    margin-right: 1rem;
}

.lop_mot_card_di_dong {
    position: relative;
}

.icon_vn_card_di_dong {
    height: 20px;
    width: 25px;
}

.namecarrd_di_dong {
    top: 1vw;
    left: 1vw;
    right: 0;
    bottom: 0;
}

a{
    text-decoration: none !important;
    color: black;
}


</style>
<!-- chương trình web chính  -->
<!-- sườn -->
 
  <!--Header: Chỉ hiển thị trên di động -->
  <div class="d-block d-md-none">

      <!-- Header -->
      <div class="bg-primary text-white p-3 d-flex align-items-center justify-content-between">
          <h3>PHIVN1</h3>
          <i class="bi bi-coin" style="font-size: 1.2rem;"></i>
      </div>

  </div>

<div class="container py-3">
    <div class="row ">
        <div class="col-12 col-md-12 d-md-flex d-none flex-wrap flex-md-nowrap justify-content-md-start ">
            <a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
                <small>Trang chủ </small><i class="bi bi-chevron-right text-dark"></i>
            </a>
            <a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
                <small>Khách sạn </small><i class="bi bi-chevron-right text-dark"></i>
            </a>

            <a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
                <small>Việt Nam </small><i class="bi bi-chevron-right text-dark"></i>
            </a>
            <a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
                <small>Bà Rịa - Vũng Tàu </small><i class="bi bi-chevron-right text-dark"></i>
            </a>
            <a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
                <small>Vũng Tàu </small><i class="bi bi-chevron-right text-dark"></i>
            </a>
            <a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none text-dark">
                <small>Kết quả tìm kiếm</small>
            </a>
        </div>
    </div>
</div>
<!-- nội dung cái sườn  -->
<div class="container">
    <div class="row">
      
        <div class="col-12 col-md-12">
            <!-- Code trên PC, Laptop ko có chính cái trên di động của mình -->
          
            <!-- Kết thúc  -->
            <!-- code cho PC, Laptop ko có trên chính cái do động của mình  -->
            <div class="dropdown mb-4 d-none d-md-flex">
                <button data-analytics="" data-cta="" style="border-radius: 20px;" class="btn btn-outline-secondary text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sort-alpha-down"></i> Sắp xếp theo: Lựa chọn hàng đầu của chúng tôi <i class="bi bi-chevron-expand"></i>
                </button>

                <ul class="dropdown-menu ">
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Lựa chọn hàng đầu của chúng tôi</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Ưu tiên nhà & căn hộ</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Giá (ưu tiên cao nhất)</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Xếp hạng chỗ nghỉ (cao đến thấp)</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Xếp hạng chỗ nghỉ (thấp đến cao)</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Khoảng cách từ trung tâm thành phố</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Được đánh giá hàng đầu</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Ưu tiên giảm giá Genius</a></li>
                    <li><a data-analytics="" data-cta="" class="dropdown-item" href="#">Khoảng cách đến bãi biển gần nhất</a></li>
                </ul>
            </div>
            <!-- Kết thúc  -->

            <!-- code nội dung số 5 -->
    <!-- bắt đầu chế độ PC  -->
    
        <?php
            $toi_uu_code_noi_dung_so_6_PC_MOBILE = [
                ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', 'Căn Hộ Nghỉ Dưỡng Gần Biển Vũng Tàu Tiện Ích 5 Sao',' <i class="bi bi-star-fill text-warning"></i>','Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao','9.3' ,'Tuyệt hảo'],

                ['https://cf.bstatic.com/xdata/images/hotel/square240/670378902.webp?k=2eba238da93a22a72af84b3cc65709cf6a218369aac25db8e98bd9a5258ddb19&o=', 'The Sóng Vũng Tàu Apartment Luxury Tiện Ích 5 sao',' <i class="bi bi-star-fill text-warning"></i>','Nhìn ra thành phố, The Sóng Vũng Tàu Apartment Luxury ở Vũng Tàu cung cấp chỗ nghỉ có hồ bơi ngoài trời, khu vườn, phòng chờ chung, sân hiên và nhà hàng.','9.3' ,'Tuyệt hảo'],

                ['https://cf.bstatic.com/xdata/images/hotel/square240/611006082.webp?k=08fe90200fbc0029e767ea4b6a1c367aa07fa20a1d26cc0d306f7e5496665b9b&o=', '3B - Trệt Không Lầu - Phong Cách Đà Lạt Tiện Ích 5 Sao',' <i class="bi bi-star-fill text-warning"></i>','Nằm ở Vũng Tàu, 3B - Trệt Không Lầu - Phong Cách Đà Lạt có ban công nhìn ra biển và núi, cũng như hồ bơi ngoài trời mở quanh năm, phòng xông hơi khô và bể sục.','9.3' ,'Tuyệt hảo'],

                ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', 'Condotel 5 Sao The Sóng Vũng Tàu',' <i class="bi bi-star-fill text-warning"></i>','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.','9.3' ,'Tuyệt hảo'],

                ['https://cf.bstatic.com/xdata/images/hotel/square240/671505705.webp?k=4d3c271955205c7eb79e990bfee09a78a1320c3e320d116f44b9c5fe9e55dfe3&o=', 'Homestay - Căn hộ 5 sao view biển Vũng Tàu Tiện Ích 5 Sao',' <i class="bi bi-star-fill text-warning"></i>','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.','9.3' ,'Tuyệt hảo'],

                ['https://cf.bstatic.com/xdata/images/hotel/square240/670378902.webp?k=2eba238da93a22a72af84b3cc65709cf6a218369aac25db8e98bd9a5258ddb19&o=', 'Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao',' <i class="bi bi-star-fill text-warning"></i>','Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời','9.3' ,'Tuyệt hảo'],
                
            ];
        ?>
        
    <!-- Bắt đầu chế độ Mobile  -->
     <div class="row justify-content-center fade-in d-flex d-md-none ps-2 pe-2">
        <div class="col-12 mt-1">
            <h3 class="fw-bold">Vũng Tàu: tìm thấy 1.441 chỗ nghỉ</h3>
            <p>
                Từ biệt thự, lâu đài cho đến nhà thuyền, igloo, chúng tôi đều có.
            </p>
            <div class=" scrolling-wrapper luot_cha ">
                    <?php
                        foreach ( $toi_uu_code_noi_dung_so_6_PC_MOBILE as $key => $value_9) {
                    ?>
                    <a href="taisan/tsdt/44">
                        <div class="scroll-item-2 ">
                            <div class="card lop_1_card">
                                <img src="<?php echo $value_9[0]; ?>"
                                    class="w-100 card-img-top" />
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <a href="#" class="text-decoration-none text-black fw-bold">
                                            <?php echo $value_9[1]; ?> <?php echo $value_9[2]; ?>
                                        </a>
                                    </div>
                                    <p style="text-align: justify;">
                                        <i class="bi bi-geo-alt-fill text-success me-2"></i><?php echo $value_9[3]; ?> 
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-2 mb-4 ">
                                        <div>
                                            <span class="bg-primary py-2 px-2 text-white bo-tron"><?php echo $value_9[4]; ?> </span> &nbsp; <?php echo $value_9[5]; ?> 
                                        </div>
                                        <div>
                                            <span class="d-block fw-bold" style="font-size:18px"> 540.000 VND</span>
                                            <!-- <span>Đã bao gồm thuế và phí</span> -->
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="lop_2_card">
                                    <button data-analytics="" data-cta="" class="btn btn-light nut_trai_tim">
                                        <a data-analytics="" data-cta="" href="">
                                            <i class="bi bi-suit-heart text-dark"></i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php 
                        }
                    ?>
            </div>
        </div>
    </div>
        <div class="d-none d-md-block">
            <!-- THÊM MỚI ở chế độ mobile   -->
            <?php
                $toi_uu_code_list_20_PC = [
                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', 'Infinity Pool Beach Apartment Vung Tau City - ','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670378902.webp?k=2eba238da93a22a72af84b3cc65709cf6a218369aac25db8e98bd9a5258ddb19&o=', 'The Sóng Vũng Tàu Apartment Luxury','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Nhìn ra thành phố, The Sóng Vũng Tàu Apartment Luxury ở Vũng Tàu cung cấp chỗ nghỉ có hồ bơi ngoài trời, khu vườn, phòng chờ chung, sân hiên và nhà hàng.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/611006082.webp?k=08fe90200fbc0029e767ea4b6a1c367aa07fa20a1d26cc0d306f7e5496665b9b&o=', '3B - Trệt Không Lầu - Phong Cách Đà Lạt','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Nằm ở Vũng Tàu, 3B - Trệt Không Lầu - Phong Cách Đà Lạt có ban công nhìn ra biển và núi, cũng như hồ bơi ngoài trời mở quanh năm, phòng xông hơi khô và bể sục.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', ' Condotel 5 Sao The Sóng Vũng Tàu','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/671505705.webp?k=4d3c271955205c7eb79e990bfee09a78a1320c3e320d116f44b9c5fe9e55dfe3&o=', '  NguyễnThủy Homestay - Căn hộ 5 sao view biển Vũng Tàu','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', 'Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670378902.webp?k=2eba238da93a22a72af84b3cc65709cf6a218369aac25db8e98bd9a5258ddb19&o=', 'The Sóng Vũng Tàu Apartment Luxury','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Nhìn ra thành phố, The Sóng Vũng Tàu Apartment Luxury ở Vũng Tàu cung cấp chỗ nghỉ có hồ bơi ngoài trời, khu vườn, phòng chờ chung, sân hiên và nhà hàng.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/611006082.webp?k=08fe90200fbc0029e767ea4b6a1c367aa07fa20a1d26cc0d306f7e5496665b9b&o=', '3B - Trệt Không Lầu - Phong Cách Đà Lạt','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Nằm ở Vũng Tàu, 3B - Trệt Không Lầu - Phong Cách Đà Lạt có ban công nhìn ra biển và núi, cũng như hồ bơi ngoài trời mở quanh năm, phòng xông hơi khô và bể sục.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', ' Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/671505705.webp?k=4d3c271955205c7eb79e990bfee09a78a1320c3e320d116f44b9c5fe9e55dfe3&o=', '  NguyễnThủy Homestay - Căn hộ 5 sao view biển Vũng Tàu','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', 'Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670378902.webp?k=2eba238da93a22a72af84b3cc65709cf6a218369aac25db8e98bd9a5258ddb19&o=', 'The Sóng Vũng Tàu Apartment Luxury','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Nhìn ra thành phố, The Sóng Vũng Tàu Apartment Luxury ở Vũng Tàu cung cấp chỗ nghỉ có hồ bơi ngoài trời, khu vườn, phòng chờ chung, sân hiên và nhà hàng.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/611006082.webp?k=08fe90200fbc0029e767ea4b6a1c367aa07fa20a1d26cc0d306f7e5496665b9b&o=', '3B - Trệt Không Lầu - Phong Cách Đà Lạt','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Nằm ở Vũng Tàu, 3B - Trệt Không Lầu - Phong Cách Đà Lạt có ban công nhìn ra biển và núi, cũng như hồ bơi ngoài trời mở quanh năm, phòng xông hơi khô và bể sục.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', ' Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/671505705.webp?k=4d3c271955205c7eb79e990bfee09a78a1320c3e320d116f44b9c5fe9e55dfe3&o=', '  NguyễnThủy Homestay - Căn hộ 5 sao view biển Vũng Tàu','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', 'Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670378902.webp?k=2eba238da93a22a72af84b3cc65709cf6a218369aac25db8e98bd9a5258ddb19&o=', 'The Sóng Vũng Tàu Apartment Luxury','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Nhìn ra thành phố, The Sóng Vũng Tàu Apartment Luxury ở Vũng Tàu cung cấp chỗ nghỉ có hồ bơi ngoài trời, khu vườn, phòng chờ chung, sân hiên và nhà hàng.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/611006082.webp?k=08fe90200fbc0029e767ea4b6a1c367aa07fa20a1d26cc0d306f7e5496665b9b&o=', '3B - Trệt Không Lầu - Phong Cách Đà Lạt','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m',' Nằm ở Vũng Tàu, 3B - Trệt Không Lầu - Phong Cách Đà Lạt có ban công nhìn ra biển và núi, cũng như hồ bơi ngoài trời mở quanh năm, phòng xông hơi khô và bể sục.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/670836278.webp?k=b5377f9a07b496b40984bce1943c24c8c70cc29c94125c01698c9ffe4dd23d40&o=', ' Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],

                    ['https://cf.bstatic.com/xdata/images/hotel/square240/671505705.webp?k=4d3c271955205c7eb79e990bfee09a78a1320c3e320d116f44b9c5fe9e55dfe3&o=', '  NguyễnThủy Homestay - Căn hộ 5 sao view biển Vũng Tàu','<i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>','Vũng Tàu','Xem trên bản đồ','Cách trung tâm 1,3km','Cách bãi biển 400m','Cách Bãi Sau chưa đến 1 km, Condotel 5 Sao The Sóng Vũng Tàu - Apartment 5 Star The Song Vung Tau có hồ bơi ngoài trời, khu vườn, điều hòa, ban công và Wi-Fi miễn phí.'],
                ];
            ?>
             <?php
                foreach ($toi_uu_code_list_20_PC as $key => $value27) {
            ?>
            <div class="card mb-3 shadow">
                <div class="row g-0 align-items-stretch">
                    <!-- Ảnh -->
                    <div class="col-md-3 p-3">
                        <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                            <img src="<?php echo $value27[0]; ?>"
                                class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                            <div class="position-absolute top-0 end-0 p-2">
                                <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                    <i class="bi bi-suit-heart text-dark "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Mô tả -->
                    <div class="col-md-6">
                        <div class="card-body" href="taisan/thongtin/54">
                            <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none fs-5">
                                <?php echo $value27[1]; ?>  <?php echo $value27[2]; ?>
                            </a>
                            <p class="mb-3">
                                <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class=""><?php echo $value27[3]; ?> </a> ·
                                <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal"><?php echo $value27[4]; ?></a> ·
                                <?php echo $value27[5]; ?>
                            </p>
                            <p class="mb-3 text-muted"><i class="fa-solid fa-umbrella"></i><?php echo $value27[6]; ?> </p>
                            <p class="card-text small mb-3 " style="max-height: 4.5em;">
                               <?php echo $value27[7]; ?>
                            </p>
                        </div>
                    </div>
                    <!-- Điểm & Nút -->
                    <div class="col-md-3  d-flex justify-content-end ">
                        <div class="mt-2 me-3 text-end mb-3">
                            <div class="d-flex justify-content-end align-items-center rounded gap-2 mb-3">
                                <div class="me-2">
                                    <div class="fw-bold text-dark">Xuất sắc</div>
                                    <small class="text-muted">7 đánh giá</small>
                                </div>
                                <div class="">
                                    <span class="rating-badge py-2 px-3 bg-primary rounded text-white mb-3">9,6</span>
                                </div>
                            </div>
                            <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none my-3">Địa điểm 9.6</a>
                            <div class="mb-3"><span>1 đêm, 2 người lớn</span></br>
                                <span class="d-block fw-bold mb-3" style="font-size:20px">540.000 VND </span>
                                <span class="mb-3">Đã bao gồm thuế và phí</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile -->
             
            <?php 
                }
            ?>          
        
        </div>   
            <div class="mt-4">
                <!-- Danh sách kết quả ban đầu -->
                <!-- Kết quả ẩn sẽ hiển thị khi bấm nút -->
                <div id="more-results-1" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-2" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-3" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-4" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-5" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-6" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-7" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-results-8" style="display: none;">
                    <div class="card mb-3 shadow">
                        <div class="row g-0 align-items-stretch">
                            <!-- Ảnh -->
                            <div class="col-md-3 p-3">
                                <div class="  position-relative rounded-4 overflow-hidden mt-0 ms-0 me-0 mb-0  ">
                                    <img src="https://cf.bstatic.com/xdata/images/hotel/square240/671108525.webp?k=1cc6e1661bb87d0c2a29523483b0196e47227b2e4caa2154d5bb2af6e8f02cb4&o="
                                        class="img-fluid object-fit-cover w-100" alt="Hotel Image">
                                    <div class="position-absolute top-0 end-0 p-2">
                                        <button data-analytics="" data-cta="" class="btn btn-light rounded-circle">
                                            <i class="bi bi-suit-heart text-dark "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <a href="taisan/thongtin/54" class="card-title text-primary fw-bold text-decoration-none">
                                        Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao <i class="bi bi-hand-thumbs-up bg-warning mt-0 text-white fs-6"></i>
                                    </a>
                                    <p class="mb-1">
                                        <a data-analytics="" data-cta="" href="danhsachtaisan/dsts/56" class="">Vũng Tàu</a> ·
                                        <a data-analytics="" data-cta="" href="#" class="" data-bs-toggle="modal" data-bs-target="#bandoModal">Xem trên bản đồ</a> ·
                                        Cách trung tâm 1,3km
                                    </p>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-umbrella"></i> Cách bãi biển 400m</p>
                                    <p class="card-text small " style="max-height: 4.5em;">
                                        Với Bãi Sau nằm cách đó chưa đến 1 km, Infinity Pool Beach Apartment Vung Tau City - Căn Hộ Nghỉ Dưỡng Gần Biển Thành Phố Vũng Tàu Tiện Ích 5 Sao cung cấp chỗ nghỉ, nhà hàng, hồ bơi ngoài trời, khu...
                                    </p>
                                </div>
                            </div>
                            <!-- Điểm & Nút -->
                            <div class="col-md-3  d-flex justify-content-end ">
                                <div class="mt-2 me-3 text-end">
                                    <div class="d-flex justify-content-end align-items-center p-2 rounded">
                                        <div class="me-2">
                                            <div class="fw-bold text-dark">Xuất sắc</div>
                                            <small class="text-muted">7 đánh giá</small>
                                        </div>
                                        <div>
                                            <span class="rating-badge py-2 px-3 bg-primary rounded text-white">9,6</span>
                                        </div>
                                    </div>
                                    <a data-analytics="" data-cta="" href="#" class="d-block text-primary fw-bold text-decoration-none mb-2">Địa điểm 9.6</a>
                                    <span class="d-block booking-badge mt-1 text-dark">Mới trên Booking.com</span>
                                    <h3>450,000 VNĐ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nút tải thêm -->
                <div class="text-center d-none d-md-flex">
                    <button data-analytics="" data-cta="" class="btn btn-outline-primary btn-lg" onclick="loadMore()">Tải thêm kết quả</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row  mt-4">
        <div class="d-flex">
            <h2>
                Phổ biến với du khách từ Việt Nam
            </h2>
        </div>
        <div class="d-flex pt-3 col-md-12 flex-wrap gap-2">
            <div class="flex-fill flex-md-grow-0">
                <button data-analytics="" data-cta="" class="btn btn-light border-primary rounded-pill text-primary w-100">
                    Thành phố trong nước
                </button>
            </div>
            <div class="flex-fill flex-md-grow-0">
                <button data-analytics="" data-cta="" class="btn nut_nav_1 rounded-pill text-dark w-100">
                    Thành phố nước ngoài
                </button>
            </div>
            <div class="flex-fill flex-md-grow-0">
                <button data-analytics="" data-cta="" class="btn nut_nav_1 rounded-pill text-dark w-100">
                    Khu Vực
                </button>
            </div>
            <div class="flex-fill flex-md-grow-0">
                <button data-analytics="" data-cta="" class="btn nut_nav_1 rounded-pill text-dark w-100">
                    Quốc Gia
                </button>
            </div>
            <div class="flex-fill flex-md-grow-0">
                <button data-analytics="" data-cta="" class="btn nut_nav_1 rounded-pill text-dark w-100">
                    Chổ Nghỉ
                </button>
            </div>
        </div>
    </div>

    <div class="text-dark">
        <div class="row pt-5  mt-5 border-top justify-content-between">
            <!-- Hỗ trợ -->
            <div class="col-6 col-md-2">
                <ul class="list-unstyled">
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Vũng Tàu</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Nha Trang</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Quy Nhơn</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Ninh Bình</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Cửa Lò</a></li>
                </ul>
            </div>
            <!-- Khám phá thêm -->
            <div class="col-6 col-md-2">
                <ul class="list-unstyled">
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Đà Nẵng</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Huế</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Phan Thiết </a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Cần Thơ</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Tuy Hòa</a></li>
                </ul>
            </div>
            <!-- Điều khoản và cài đặt -->
            <div class="col-6 col-md-2">
                <ul class="list-unstyled">
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Đà Lạt</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Hội An</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Sầm Soi </a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Phú Quốc</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Côn Đảo</a></li>
                </ul>
            </div>
            <!-- Đối tác + Về chúng tôi -->
            <div class="col-6 col-md-2">
                <ul class="list-unstyled mb-3">
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn TP.Hồ Chí Minh</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Hạ Long</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Sa Pa </a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Thành Phố Hải Phòng</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Buôn Ma Thuột</a></li>
                </ul>
            </div>
            <!-- Về chúng tôi  -->
            <div class="col-6 col-md-2 ">
                <ul class="list-unstyled mb-3">
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Hà Nội</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Mũi Né</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Đảo Cát Bà </a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Tam Đảo</a></li>
                    <li><a data-analytics="" data-cta="" href="#" class="text-decoration-none text-muted">Khách sạn Lọng Hải</a></li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-3">
            <button data-analytics="" data-cta="" class="btn btn-white text-primary fw-bold nut_hien_thi_them"><i class="bi bi-plus-lg"></i> Hiển thị thêm</button>
        </div>
        <div class="col-12 col-md-12">
            <p class="text-start">
                Các quốc gia
                Khu vực
                Thành phố
                Quận
                Sân bay
                Khách sạn
                Địa điểm được quan tâm
                Các Nhà Nghỉ Dưỡng
                Căn hộ
                Các resort
                Các biệt thự
                Các hostel
                Nhà nghỉ B&B
                Các nhà khách
                Những chỗ nghỉ độc đáo
                Tất cả các điểm đến
                Tất cả các điểm đến có chuyến bay
                Tất cả địa điểm cho thuê xe
                Tất cả điểm đến cho kỳ nghỉ
                Hướng dẫn
                Khám phá
                Đánh giá của khách
                Khám phá lưu trú theo tháng
            </p>
        </div>
    </div>
</div>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bandoModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="bandoModal" tabindex="-1" aria-labelledby="bandoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bandoModalLabel">Bản đồ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30173.10003183943!2d107.07941379672359!3d10.345395295799385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756fe297e51efd%3A0xbb3c2fb0da0c83bf!2sBack%20beach!5e1!3m2!1sen!2s!4v1749617924950!5m2!1sen!2s" width="480" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    //  xử lý kịch bản dữ liệu: click hiển thị tất cả các thông tin và hiện thị các thông tin lại ít khi 
    function toggleMore() {
        const content = document.getElementById("more-options");
        const showAllBtn = document.getElementById("show-all-btn");
        const showLessBtn = document.getElementById("show-less-btn");

        if (content.style.display === "none") {
            // Hiện thêm các lựa chọn và ẩn nút "Hiển thị tất cả"
            content.style.display = "block";
            showAllBtn.style.display = "none";
        } else {
            // Ẩn phần thêm và hiện lại nút "Hiển thị tất cả"
            content.style.display = "none";
            showAllBtn.style.display = "block";
        }
    }

    //  xử lý kịch bản dữ liệu: click hiển thị tất cả các thông tin và hiện thị các thông tin lại ít khi 
    function toggleMore_2() {
        const content2 = document.getElementById("more-options_2");
        const showAllBtn2 = document.getElementById("show-all-btn_2");
        const showLessBtn2 = document.getElementById("show-less-btn_2");

        if (content2.style.display === "none") {
            // Hiện thêm các lựa chọn và ẩn nút "Hiển thị tất cả"
            content2.style.display = "block";
            showAllBtn2.style.display = "none";
        } else {
            // Ẩn phần thêm và hiện lại nút "Hiển thị tất cả"
            content2.style.display = "none";
            showAllBtn2.style.display = "block";
        }
    }

    function loadMore() {
        document.getElementById("more-results-1").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn

        document.getElementById("more-results-2").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn

        document.getElementById("more-results-4").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn

        document.getElementById("more-results-5").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn

        document.getElementById("more-results-6").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn

        document.getElementById("more-results-7").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn

        document.getElementById("more-results-8").style.display = "block";
        event.target.style.display = "none"; // Ẩn nút sau khi nhấn
    }
</script>