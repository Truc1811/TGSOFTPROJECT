
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap 5 JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
<style>
/* bắt đầu các thuộc tính "chung" layout */
* {
    margin: 0;
    padding: 0;
}

body {
    overflow-x: hidden
}

html {
    scroll-behavior: smooth;
}

.p-6 {
    padding-left: 10vw;
    padding-right: 10vw;
}
/* kết thúc thuộc tính  "chung" cho layout */

/* --- Bắt đầu Hiệu ứng fade-in CSS ---  */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 1s ease-out forwards;
}

/* Hiệu ứng fade-in với độ trễ */
.fade-in:nth-child(1) {
    animation-delay: 0s;
}

.fade-in:nth-child(2) {
    animation-delay: 0.5s;
}

.fade-in:nth-child(3) {
    animation-delay: 1s;
}

/* Định nghĩa animation */
@keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
/* --- Kết thúc: Hiệu ứng fade-in CSS ---  */

/* --- BẮT ĐẦU :chế độ di động dành cho nội dung scroll  của điểm đến thịnh thành--- */
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
.scrolling-wrapper > .scroll-item-2 > .card{
    border-radius: 15px !important;
        overflow: hidden; /* Quan trọng để ảnh không tràn ra ngoài */
}
.scrolling-wrapper > .scroll-item-2 > .card > img{
    height: 200px;
    object-fit: cover; 
}
/* --- KẾT THÚC :chế độ di động dành cho nội dung scroll  của điểm đến thịnh thành--- */

/* Bắt đầu: Tất cả Phần nội dung của điểm đến thịnh hành  */
    .lop_mot_card{
        position: relative;
    }

    .noi_dung_hinh_anh_card {
        border-radius: 20px !important;
        object-fit: cover;
        width: 100%;
        height: 300px;
        transition: border 0.3s;
        height: 260px;
    }

    .noi_dung_hinh_anh_card:hover{
         border: 2px solid yellow;
    }
    
    .namecarrd {
        top: 1vw;
        left: 1vw;
        right: 0;
        bottom: 0;
    }

    .icon_vn_card {
        height: 20px;
        width: 25px;
    }

    /* hiệu ứng rê chuột của Nội dung: Điểm đến thịnh hành  */
    .product {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .product:hover {
        transform: translateY(-20px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* lớp 2 card position nội dung của trái tim  */
      .lop_2_card {
          position: absolute;
          right: 10px;
          top: 10px;
          color: blueviolet;
      }
/* Kết thúc: Tất cả phần nội dung của điểm đến thịnh hành  */

/* Bắt đầu phần chung của các Card */
    .scrolling-wrapper {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    gap: 12px;
    padding-bottom: 8px;
  }

    .scroll-item,
    .scroll-item-2,
    .scroll-item-3,
    .scroll-item-4,
    .scroll-item-5,
    .scroll-item-6 {
        flex: 0 0 auto;
        width: 280px;
        border-radius: 10px;
        scroll-snap-align: start;
        overflow: hidden;
    }

    .scroll-item img {
        width: 100%;
        border-radius: inherit;
        object-fit: cover;
        /* height: 110px;
     object-fit: cover; */
    }

      .scroll-item .card {
    border-radius: 12px;
    overflow: hidden;
  }

      .scrolling-wrapper::-webkit-scrollbar {
    display: none; /* Ẩn thanh cuộn trên mobile */
  }

    .bo-tron-di-dong{
        border-radius: 6px;
    }
/* Kết thúc của phần chung của các Card */

/* Bắt đầu nôi dung tìm theo loại chỗ cho thuê  */
.btn-custom-shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.25) !important;
}
/* Kết thúc nội dung tìm theo loại chỗ cho thuê  */

/* === Bắt đầu: Phần 3d cho di động:Các hình tròn phụ === */
.trang_chu_tron_di_dong_1 {
    width: 220px;
    height: 220px;
    z-index: 1;
    position: relative;
}

.trang_chu_tron_2_di_dong,
.trang_chu_tron_3_di_dong,
.trang_chu_tron_4_di_dong,
.trang_chu_tron_5_di_dong,
.trang_chu_tron_6_di_dong {
    position: absolute;
    border-radius: 50%;
}

.trang_chu_tron_2_di_dong {
    width: 100px;
    height: 100px;
    top: -70px;
    left: -66px !important;
    background:rgb(255, 230, 0) !important;
    animation: rotate1 12s linear infinite !important;
    overflow: hidden;
}


.trang_chu_tron_3_di_dong {
    width: 100px;
    height: 100px;
    top: 120px;
    left: 230px;
    background: #0dcaf0;
    animation: wave1 4s ease-in-out infinite;
}

.trang_chu_tron_4_di_dong {
    width: 60px;
    height: 60px;
    top: 180px;
    left: -70px;
    background: #ffc107;
    animation: pulse1 2.5s ease-in-out infinite;
}

.trang_chu_tron_5_di_dong {
    width: 60px;
    height: 60px;
    right: -60px;
    top: -10px;
    background: #0d6efd;
    animation: bounce1 3s ease-in-out infinite;
}

.trang_chu_tron_6_di_dong {
    width: 60px;
    height: 60px;
    right: -60px;
    bottom: -190px;
    background: #ffc107;
    animation: combo1 5s ease-in-out infinite;
}
/* === Hiệu ứng === */
@keyframes rotate1 {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes wave1 {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(20px); }
}

@keyframes pulse1 {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.2); opacity: 0.6; }
}

@keyframes bounce1 {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

@keyframes combo1 {
    0% { transform: rotate(0deg) scale(1) translateY(0); }
    25% { transform: rotate(5deg) scale(1.1) translateY(-10px); }
    50% { transform: rotate(-5deg) scale(1.05) translateY(10px); }
    75% { transform: rotate(3deg) scale(1.1) translateY(-5px); }
    100% { transform: rotate(0deg) scale(1) translateY(0); }
}

/* chữ auto tự động chuyển */
.fade-text-di-dong {
    display: inline-block;
}

#changingWord_di_dong {
    transition: opacity 0.5s ease-in-out;
}
/* Kết thúc phần hình tròn 3D cho di động  */

/* --- Chế độ di động: Bắt đầu phàn Offcanvas của Search dành cho di động  ---*/
.section-title {
    padding: 12px 15px;
    font-weight: 500;
    background-color: #f1f1f1;
    font-size: 15px;
}
.suggest-item {
    display: flex;
    align-items: center;
    padding: 10px 15px;
}
/* --- Chế độ di động: Kết thúc phần Officanvas của Search dành cho di động   ---- */

/* Bắt đầu: Header của chế độ di động  */
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #e7f1ff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #2d5be3;
    margin: auto;
} 
/* Kết thúc: Header của chế độ di động  */
    .trang_chu_tron {
        position: absolute;
        height: 80vh;
        width: 80vh;
        top: -20vh;
        right: 0;
    }

    .trang_chu_tron_2 {
        position: absolute;
        height: 10vh;
        width: 10vh;
        top: 50%;
        left: -5vh;
        z-index: -1;

    }

    .bg-gradient-blue {
        background: linear-gradient(to bottom right, #0061ff, #60efff);
        border-radius: 12px;
    }

    .img-hover-effect {
    display: inline-block;
        animation: combo1 3s ease-in-out infinite;
        transition: all 0.4s ease;
    }

.hotel-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      transition: box-shadow 0.3s ease;
    }

    .hotel-card:hover {
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .hotel-img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .rating-badge {
      font-size: 0.9rem;
    }

    .badge-promo {
      font-size: 0.8rem;
      color: #dc3545;
    }

    .tab-btns .nav-link.active {
      background-color: #000;
      color: white;
    }

    .tab-btns .nav-link {
      border-radius: 20px;
    }


#carousel_tiet_kiem .carousel-control-prev,
#carousel_tiet_kiem .carousel-control-next {
  width: 50px;
  height: 50px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
 
}

#carousel_tiet_kiem .carousel-control-prev {
  left: -30px; /* Đẩy ra bên trái ngoài mép */
}

#carousel_tiet_kiem .carousel-control-next {
  right: -30px; /* Đẩy ra bên phải ngoài mép */
}
/* Bắt đầu phần hover */
#prevBtn:hover,
#nextBtn:hover {
  background-color: #f8f9fa !important;
  color: #000 !important;
  box-shadow: none !important;
}
/* kết thúc phần hover  */

  .hu_trangchu_khung{
        display: grid !important;
          grid-template-columns: 20% 20% 20% 20% 20%;
    }
    .hu_trangchu{
        height: 40vh;
    }
      .hu_trangchu_mang{
        position: absolute;
        bottom: 0px;
        left: 0px;
        height: 40%;
        width: 100%;
        transition-duration: 0.4s;
      }
      .hu_trangchu_nut{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition-duration: 0.4s;
      }
      .hu_trangchu:hover .hu_trangchu_mang{
        height: 100%;
        transition-duration: 0.4s;
      }
      .hu_trangchu:hover .hu_trangchu_nut{
        opacity: 1;
        transition-duration: 0.1s;
        transition-delay: 0.4s;
      }

       .hu_trangchu_khung_2{
        display: grid !important;
          grid-template-columns: 25% 25% 25% 25%;
    }
    .hu_trangchu_2{
        height: 20vh;
    }
      .hu_trangchu_mang_2{
       position: absolute;
  top: 0;
  left: 0;
  width: 80%; 
  height: 100%;
  transition-duration: 0.4s;
  z-index: 1;
      }
     .hu_trangchu_nut_2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition-duration: 0.4s;
  z-index: 2;
}
      .hu_trangchu_2:hover .hu_trangchu_mang_2{
        width: 100%;
        transition-duration: 0.4s;
      }
      .hu_trangchu_2:hover .hu_trangchu_nut_2{
        opacity: 1;
        transition-duration: 0.1s;
        transition-delay: 0.2s;
      }
  
  
/* Nếu muốn xuống còn 3 cột, 2 cột, 1 cột trên màn nhỏ */
@media (max-width: 1200px) {
  .hu_trangchu_khung {
    grid-template-columns: repeat(4, 1fr);
  }
  .hu_trangchu_khung_2 {
    grid-template-columns: repeat(3, 1fr);
  }
}


@media (max-width: 768px) {
  .hu_trangchu_khung {
    grid-template-columns: repeat(2, 1fr);
  }
  .hu_trangchu_khung_2 {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 576px) {
  .hu_trangchu_khung,
  .hu_trangchu_khung_2 {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- -------------------------------- BẮT ĐẦU: ALL BODY-------------------------------------  -->
<!--Bắt đầu: Phần Header hiển thị trên di động -->
<!--Bắt đầu: Phần Header hiển thị trên di động -->

<div class="container-fluid">
  <div class="row d-md-none bg-primary text-white p-3 d-flex align-items-center justify-content-between">
    <div class="col-auto">
      <h3 class="mb-0 fw-bold">PHIVN1</h3>
    </div>
    <div class="col-auto">
     
        <i data-bs-toggle="offcanvas" data-bs-target="#searchOffcanvas" class="bi bi-search fw-bold"></i>
      
    </div>
  </div>
</div>


<!-- Bắt đầu: Tất cả phần Nội dung  -->
<div class="container ">

<!-- Bắt đầu: Offcavaas trượt bên phải dành cho phần Search khi bấm nút tìm dành cho nội dung tìm kiếm -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="searchOffcanvas">
        <div class="offcanvas-header border-bottom">
            <button type="button" class="btn-close ms-2" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="section-title">Từ khóa được đề xuất</div>
            <div class="suggest-item">✈️ Vé máy bay từ Tokyo đi Hà Nội</div>
            <div class="suggest-item">✈️ Vé máy bay từ Seoul đi Hà Nội</div>
            <div class="suggest-item">✈️ Vé máy bay từ Đài Bắc đi Hà Nội</div>
            <div class="suggest-item">✈️ Vé máy bay từ Hà Nội đi TP. Hồ Chí Minh</div>
            <div class="suggest-item">✈️ Vé máy bay từ Seoul đi TP. Hồ Chí Minh</div>
            <div class="suggest-item">🏨 Khách sạn ở TP. Hồ Chí Minh</div>
            <div class="suggest-item">🏨 Khách sạn ở Luân Đôn</div>
            <div class="suggest-item">🏨 Khách sạn ở Kyoto</div>
            <div class="suggest-item">🏨 Khách sạn Wyndham Legend Halong</div>
            <div class="suggest-item">🏨 Khách sạn Tân Sơn Nhất Sài Gòn</div>
        </div>
    </div>
    <!-- Kết thúc phần Offcanavs bên phải dành cho tìm kiếm -->
<div class="row text-center justify-content-center d-flex d-md-none mt-3">
            <div class="col-3">
                <div class="icon-circle"><i class="bi bi-building"></i></div>
                <div class="nav-label">Khách sạn</div>
            </div>
            <div class="col-3">
                <div class="icon-circle"><i class="bi bi-airplane"></i></div>
                <div class="nav-label">Homestay </div>
            </div>
            <div class="col-3">
                <div class="icon-circle"><i class="bi bi-car-front-fill"></i></div>
                <div class="nav-label">Nhà Trọ </div>
            </div>
            <div class="col-3">
                <div class="icon-circle"><i class="bi bi-train-front"></i></div>
                <div class="nav-label">Chung Cu Cao Cấp </div>
            </div>
            <div class="col-3 mt-2">
                <div class="icon-circle"><i class="bi bi-box-seam"></i></div>
                <div class="nav-label">Villa Căn Hộ </div>
            </div>
            <div class="col-3 mt-2">
                <div class="icon-circle"><i class="bi bi-house-door"></i></div>
                <div class="nav-label">Nhà & Căn hộ</div>
            </div>
            <div class="col-3 mt-2">
                <div class="icon-circle"><i class="bi bi-tree"></i></div>
                <div class="nav-label">Resort</div>
            </div>
            <div class="col-3 mt-2">
                <div class="icon-circle"><i class="bi bi-plus-circle"></i></div>
                <div class="nav-label">Thêm</div>
            </div>
        </div>

<div class="row justify-content-center d-flex d-md-none ps-2 pe-2 ">
        <div class="col-12 mt-4">
            
           <?php 
            $toi_uu_code_noi_dung_so_1_1__MOBILE = [
            ['https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/515053551_122229702974190020_2752917281503136541_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=cEpFLDKVRHoQ7kNvwHYsp96&_nc_oc=AdnNW9yroq6ub8IFsoowPwp29mq7b1RnhOgxnvZMknoS8ogghyd5tSMFH9w7mEU9Nhc&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=oGNzARH6-t2UG8xdrURutQ&oh=00_AfOBs5wacqLoDbc_vO-0uQIdXBx27uyOdAm7gd8b4agW_Q&oe=68693437'],
                ['https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/514209506_122229703688190020_3774306194194367655_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=vvxyDWteorMQ7kNvwGFWDrF&_nc_oc=AdmSJzFCjs0McaoFEGy_afSSIlvLK5vugCJcqq8D_XNQ0BbrCgp9Wc5iaRInR2TdiuM&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=T-lFASGXI1lklqNWpWd63g&oh=00_AfNO3SIIGiTENl9KM5V6oqq08C0IWGv8GjUM_-xOF4aMfw&oe=68691904'],
                ['https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/513900360_122229706082190020_746666392840628600_n.jpg?stp=dst-jpg_tt6&cstp=mx752x376&ctp=s752x376&_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_ohc=WAQDQbGsZz0Q7kNvwEna6RV&_nc_oc=AdleSiRCWYnLVL9tGl1N9ePxqeMr_3_osKWGMGdxxyiSHJyu6zIiYfE8bfLUwQ86hWE&_nc_zt=23&_nc_ht=scontent.fhan2-4.fna&_nc_gid=FD44vPRTW2XA3BHzslaM0w&oh=00_AfNzS6KSMnTtAHrxtirQOizKiy7g0DFT79l6BJaUvltLaQ&oe=68692900'],
                ['https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/515311107_122229707996190020_9153316477382219054_n.jpg?stp=dst-jpg_tt6&cstp=mx752x376&ctp=s752x376&_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=3FYI6ASVBycQ7kNvwH64h1w&_nc_oc=AdkCZ2TXyd9N3flOBWbxS5q_0SYntcfBmEPQzSvINKOgU9_Lx8kc_dD3-ddKDyufVf0&_nc_zt=23&_nc_ht=scontent.fhan2-4.fna&_nc_gid=PdZ3gE4co8mjdgXte1Qbug&oh=00_AfOXgdurIy3ch47ycSRG_qRxVkPXIqW__qi0vNUHuDljig&oe=68691CF1'],
                ['https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/514794532_122229705698190020_5610421286516321997_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=gF_BsV40yDoQ7kNvwEWqVPa&_nc_oc=AdmsR1C_7DhFKrY4ReuxCQXNdzAmxywTEppyL8up4EqV172V-s8xDfnv4L1RcwUYbo8&_nc_zt=23&_nc_ht=scontent.fhan2-3.fna&_nc_gid=N1DhwdHhf6eYH4PxCxg_2A&oh=00_AfNQKvLKGeXYZbuDdGVSYyM_ti0LRy-ZWcfcU8lzQ5vY9w&oe=68692F82'],
                ['https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/514367590_122229709496190020_4245323125236107183_n.jpg?stp=dst-jpg_tt6&cstp=mx752x376&ctp=s752x376&_nc_cat=111&ccb=1-7&_nc_sid=127cfc&_nc_ohc=X_NxX4U1eK4Q7kNvwHp4fe8&_nc_oc=Adk-6YO_jljdowMh5lbiTluhdC3AVLK4RwFdp9-ZdcKmp0lip3EsGWSQy1NAq0YoFnI&_nc_zt=23&_nc_ht=scontent.fhan2-3.fna&_nc_gid=yiURs29yc-rfJZwQQZdsyQ&oh=00_AfPbQ9KEZF46JruVgaRaEPk83gQeTJzxF7gB47fw-NmmWg&oe=68693331'],
                ['https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/514414598_122229709502190020_6751288914474560949_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=127cfc&_nc_ohc=V0RiEIBMvTEQ7kNvwF0tVxX&_nc_oc=AdlTcTYP_Kr4LPlfWNMFhizhXmlVY8ne1mwef4Q4lsPAOcQiNUJ-HkPQpVHqjIMaZjM&_nc_zt=23&_nc_ht=scontent.fhan2-3.fna&_nc_gid=r8nG2fF32K0AXcKfjHEY2w&oh=00_AfNc6BjbvqW1lcGmNYZ9AJJL_Aqsv31voAbyTrWXPw7Rsw&oe=68692EE9'],
            
        ];
           ?>
            <div class="scrolling-wrapper luot_cha">
                <?php foreach ($toi_uu_code_noi_dung_so_1_1__MOBILE as $key => $value_trang_chu_noi_dung_so_1_1_mobile) { ?>
                    <div class="scroll-item-2">
                        <div class="card position-relative overflow-hidden h-100">
                            <a href="danhsachtaisan/dsts/55" class="stretched-link text-decoration-none">
                                <img src="<?php echo $value_trang_chu_noi_dung_so_1_1_mobile[0]; ?>" class="w-100 card-img-top h-100 " alt="Ảnh" />
                             
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</div>

<div class="row justify-content-center d-flex d-md-none ps-2 pe-2">
    <!--Bắt đầu phần Ưu đãi -->
    <div class="mt-4">
        <div class="bg-white rounded p-3 shadow-lg">
            <h6 class="mb-2">🎉 Ưu đãi đang chờ bạn</h6>
            <div class="d-flex justify-content-between">
                <div class="text-danger">🏨 Khách sạn<br><strong>Giảm 10%</strong></div>
                <div class="text-danger">✈️ Máy bay<br><strong>Giảm đến 100K</strong></div>
            </div>
            <button class="btn btn-primary btn-sm mt-3 w-100">Nhận tất cả</button>
        </div>
    </div>
    <!-- Kết thúc phần Uư đãi  -->
</div>
<!-- KẾT THÚC PHẦN MIBILE -->


<!-- Bắt đầu: Tất cả phần Nội dung  -->
<div class="container ">


<div class="row mt-4 mb-4">
</div>

<?php
                $toi_uu_code_noi_dung_so_1_1_tiet_kiem_PC = [
                    ['1.jpg'],
                     ['4.png'],
                      ['2_1.jpg'],
                      ['3.jpg'],
                       ['5.jpg'],
                       ['6.png'],
                       ['7.jpg'],
                    
                ];
        ?>

<div class="col-md-12 position-relative mt-5 d-md-block d-none">
  <!-- Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-custom-banner">
    <?php foreach ($toi_uu_code_noi_dung_so_1_1_tiet_kiem_PC as $value_121212) { ?>
      <div class="item">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden card lop_1_card" style="width: 100%;">
          <a href="taisan/tsdt/44" class="text-decoration-none text-black fw-bold">
            <div class="position-relative">
              <img src="public/upload/<?= $value_121212[0] ?>" class="card-img-top object-fit-cover" >
              
            </div>
           
          </a>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Nút điều hướng trái/phải -->
  <button id="prevBtn1" class="btn bg-white border border-dark rounded-circle px-3 py-3 position-absolute top-50 start-0 translate-middle-y z-3">
    <i class="bi bi-caret-left-fill"></i>
  </button>
  <button id="nextBtn1" class="btn bg-white border border-dark rounded-circle px-3 py-3 position-absolute top-50 end-0 translate-middle-y z-3">
    <i class="bi bi-caret-right-fill"></i>
  </button>
</div>

 <!-- Bắt đàu Mobile: Phần 1 khách sạn cao ở vũng tàu  -->
    <div class="row justify-content-center fade-in d-flex d-md-none ps-3 pe-3 mt-4">
        <div class="col-12 card p-3 d-flex flex-row align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-1 fw-bold">Khách sạn Cao Vũng Tàu</h5>
                    <p class="text-muted mb-2">Tiết kiệm đến 20% khi thuê</p>
                    <a data-analytics="" data-cta="" class="btn btn-primary btn-sm" href="danhsachtaisan/dsts/54">
                        Ưu đãi 
                    </a>
                </div>
            </div>
            <div class="ms-3">
                <img src="https://du-lich.chudu24.com/f/m/2105/18/khach-san-cao-vung-tau.jpg?w=550&c=1" class="rounded"
                    width="80" height="80" alt="ảnh ưu đãi">
            </div>
        </div>
    </div>
    <!-- Kết thúc Mobile phần 1 khách sạn cao ở vũng tàu  -->

      <!-- Bắt đầu Mobile: nội dung 2 Điểm đến thịnh hành  -->
    <div class="row justify-content-center d-flex d-md-none ps-2 pe-2">
        <div class="col-12 mt-4 d-md-none">
            <h2 class="fw-bold">Điểm đến đang thịnh hành</h2>
            <p class="">Các lựa chọn phổ biến nhất từ Việt Nam</p>
           <?php 
            $toi_uu_code_noi_dung_so_1_2__MOBILE = [
            ['https://cf.bstatic.com/xdata/images/city/600x600/688893.jpg?k=d32ef7ff94e5d02b90908214fb2476185b62339549a1bd7544612bdac51fda31&o=','TP. Hồ Chí Minh'],
            ['https://cf.bstatic.com/xdata/images/city/600x600/981517.jpg?k=2268f51ad34ab94115ea9e42155bc593aa8d48ffaa6fc58432a8760467dc4ea6&o=','Hà Nội'],
            ['https://cf.bstatic.com/xdata/images/city/600x600/688844.jpg?k=02892d4252c5e4272ca29db5faf12104004f81d13ff9db724371de0c526e1e15&o=','Đà Nẵng'],
            ['https://cf.bstatic.com/xdata/images/city/600x600/688831.jpg?k=7b999c7babe3487598fc4dd89365db2c4778827eac8cb2a47d48505c97959a78&o=','Đà Lạt'],
            ['https://cf.bstatic.com/xdata/images/city/600x600/688956.jpg?k=fc88c6ab5434042ebe73d94991e011866b18ee486476e475a9ac596c79dce818&o=','Vũng Tàu'],
            
        ];
           ?>
            <div class="scrolling-wrapper luot_cha">
                <?php foreach ($toi_uu_code_noi_dung_so_1_2__MOBILE as $key => $value_trang_chu_noi_dung_so_1_2_mobile) { ?>
                    <div class="scroll-item-2">
                        <div class="card position-relative overflow-hidden h-100">
                            <a href="danhsachtaisan/dsts/55" class="stretched-link text-decoration-none">
                                <img src="<?php echo $value_trang_chu_noi_dung_so_1_2_mobile[0]; ?>" class="w-100 card-img-top h-100 " alt="Ảnh" />
                                <div class="position-absolute namecarrd">
                                    <span class="fs-4 text-white fw-bold">
                                    <?php echo $value_trang_chu_noi_dung_so_1_2_mobile[1]; ?>
                                    <img src="https://flagcdn.com/w40/vn.png" class="icon_vn_card mx-2" alt="vn" />
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Kết thúc Mobile: nội dung 2 Điểm đến thịnh hành  -->
<?php

 $mang_aa=[
    [
        'https://iwater.vn/Image/Picture/New/333/thanh_pho_ho_chi_minh.jpg',
        'Thành Phố Hồ Chí Minh ',
        'linear-gradient(to top, rgb(0, 153, 255) 20%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://songhongtourist.vn/upload/2022-11-30/-getpaidstock-5.jpg',
        'Hà Nội',
        'linear-gradient(to top, rgb(255, 153, 0) 20%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://www.luavietours.com/wp/wp-content/uploads/2023/06/cau-vang-da-nang-750x563.png',
        'Đà Nẵng',
        'linear-gradient(to top, rgb(17, 0, 255) 20%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://www.vietnamairlines.com/~/media/SEO-images/kinh-nghiem-du-lich-da-lat/da-lat-vao-mua-hoa-anh-dao-no-ro.png',
        'Đà Lạt',
        'linear-gradient(to top, rgb(255, 0, 221, 0.897) 20%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://media.loveitopcdn.com/40838/thumb/upload/images/tour-bac-lieu-vung-tau-2-ngay-1-dem.jpg',
        'Vũng Tàu',
        'linear-gradient(to top, rgb(0, 255, 76, 0.9) 20%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    
 ];
?>
    <div class="row hu_trangchu_khung justify-content-between d-none d-md-grid mt-3">
  <?php foreach ($mang_aa as $key => $value) { ?>
    <div class="p-2">
      <div class="rounded-4 overflow-hidden mt-3" 
           onclick="location.href='danhsachtaisan/dsts/55'" 
           style="cursor: pointer;">
           
        <div class="text-center position-relative hu_trangchu" 
             style="background: url(<?php echo $value[0] ?>); background-size: cover; background-position: center;">
             
          <div class="hu_trangchu_mang p-3" 
               style="background-image: <?php echo $value[2] ?>;">
          </div>
          
          <div class="text-white position-absolute py-1 w-100" style="bottom: 0px;">
            <h5 class="fw-bold text-center"><?php echo $value[1]; ?></h5>
            <p><i class="bi bi-building text-center"></i> 883,692</p>
          </div>
          
          <div class="hu_trangchu_nut d-flex justify-content-center align-items-center">
            <button class="btn border border-light text-white">Đăng ký</button>
          </div>
          
        </div>
      </div>
    </div>
  <?php } ?>
</div>


<?php

 $mang_bb=[
    [
        'https://ak-d.tripcdn.com/images/1mc4w12000bze8tgw4F9C_R_960_660_R5_D.jpg',
        'Chỗ Nghỉ Nổi Bật  ',
        'linear-gradient(to right, rgb(255, 0, 170) 56%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://ak-d.tripcdn.com/images/220h13000000ufwn3C4C6_R_960_660_R5_D.jpg',
        'Hostel',
        'linear-gradient(to right, rgb(162, 0, 255) 56%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://ak-d.tripcdn.com/images/220t0l000000cu5ef92AE_R_339_206_R5_D.jpg',
        'Nhà Trọ',
        'linear-gradient(to right, rgb(0, 183, 255) 56%, rgba(0,0,0,0) 100%)',
        '570123'
    ],
    [
        'https://ak-d.tripcdn.com/images/1mc0h12000d2zfr3g0D3C_R_600_600_R5_D.jpg_.webp',
        'Và hơn thế nữa',
        'linear-gradient(to right, rgb(98, 0, 255) 56%, rgba(0,0,0,0) 100%)',
        '570123'
    ],

    
 ];
?>

 <div class="row hu_trangchu_khung_2 justify-content-between d-none d-md-grid mb-3">

        <?php foreach ($mang_bb as $key => $value_mang_bb) {
           
        ?>
        <div class="p-2">

        
        <div class=" rounded-4 overflow-hidden mt-3 ">
            
          <div class="text-center  position-relative hu_trangchu_2" style=" background: url(<?php echo $value_mang_bb[0] ?>); background-size: cover;
              background-position: center;">
            <div class="hu_trangchu_mang_2 p-3" style="background-image: <?php echo $value_mang_bb[2] ?> ;">
            </div>
            <div class=" text-white position-absolute py-1 w-100" style="bottom: 0px; z-index:33; ">
                    <h5 class="fw-bold text-start ms-2">
                        <?php echo $value_mang_bb[1]; ?>
                    </h5>
                    <p class="d-flex justify-content-start ms-2 align-items-center "><i class="bi bi-building me-2"></i> 883,692</p>
            </div>
            <div class="hu_trangchu_nut_2 d-flex justify-content-end align-items-center px-4 ">
                  <button class="btn border border-light text-white">Đăng ký</button>
            </div>
          </div>
        </div>
        </div>
          <?php } ?>
  </div>





    <?php
                $toi_uu_code_noi_dung_so_1_tiet_kiem_PC = [
                    ['https://ak-d.tripcdn.com/images/200b1a0000019edlaA36F_R_960_660_R5_D.jpg', 'TP. Hồ Chí Minh','The Myst Đồng Khởi (The Myst Dong Khoi)','★★★★★','-41% ','6.255.476₫','3.690.476₫'],
                    ['https://ak-d.tripcdn.com/images/0202x120005m8f5qz5810_R_960_660_R5_D.jpg', 'TP. Hồ Chí Minh','The Myst Đồng Khởi (The Myst Dong Khoi)','★★★★★','-41% ','6.255.476₫','3.690.476₫'],
                    ['https://ak-d.tripcdn.com/images/200u1a0000018viszE4B9_R_960_660_R5_D.jpg', 'TP. Hồ Chí Minh','The Myst Đồng Khởi (The Myst Dong Khoi)','★★★★★','-41% ','6.255.476₫','3.690.476₫'],
                    ['https://ak-d.tripcdn.com/images/220r0r000000haobf4D8D_R_960_660_R5_D.jpg', 'TP. Hồ Chí Minh','The Myst Đồng Khởi (The Myst Dong Khoi)','★★★★★','-41% ','6.255.476₫','3.690.476₫'],
                    ['https://ak-d.tripcdn.com/images/200a1a0000019dc2g8489_R_339_206_R5_D.jpg', 'TP. Hồ Chí Minh','The Myst Đồng Khởi (The Myst Dong Khoi)','★★★★★','-41% ','6.255.476₫','3.690.476₫'],
                    ['https://ak-d.tripcdn.com/images/200u14000000w2jyq6CAF_R_339_206_R5_D.jpg', 'TP. Hồ Chí Minh','The Myst Đồng Khởi (The Myst Dong Khoi)','★★★★★','-41% ','6.255.476₫','3.690.476₫'],
                ];
            ?>

    <div class="bg-gradient-blue text-white mt-5 d-md-flex d-none">
  <div class="container py-5">
    <div class="row g-4">
      <!-- Bên trái -->
      <div class="col-md-2">
        <div class="mb-5">
          <h2 class="fw-bold">
            Tiết Kiệm Lớn Trên Đơn Đặt Đầu Tiên
          </h2>
        </div>
        <div class="py-4"></div>
        <div>
          <img src="https://cdni.iconscout.com/illustration/premium/thumb/voucher-black-friday-discount-illustration-download-in-svg-png-gif-file-formats--sales-gift-special-shopping-offers-pack-illustrations-8412769.png?f=webp" alt="" class="w-100 img-hover-effect">
        </div>
      </div>

      <!-- Phần thông tin khuyến mãi -->
      <div class="col-md-3">
        <div class="bg-white text-dark p-4 rounded-4 shadow">
          <img src="https://scontent.fsgn2-7.fna.fbcdn.net/v/t39.30808-6/514175332_122229543794190020_6355200716836002328_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=NIFlqf8EsGAQ7kNvwF7o7kX&_nc_oc=AdlhbpqH8YRr6aCwOR5s7kzf47WhxdwyfcqKIr9mDf5sQ0WJFWfUSleDty8US6xVnMU&_nc_zt=23&_nc_ht=scontent.fsgn2-7.fna&_nc_gid=Ok8_vvgyz2_aDTc7gL4j4g&oh=00_AfRA0wIORGh3LcBhC6pc7a1B6dYiDj2VCgoQufgRmyva8g&oe=686EE6E1" alt="" class="w-100 img-fluid" style="height: 246px;">
          <div class="d-flex justify-content-between align-items-center mb-2 mt-2">
            <span class="text-muted">Tổng cộng <span class="badge bg-danger">6</span> quyền lợi</span>
          </div>
          <button class="btn btn-primary w-100 fw-bold">Nhận Tất Cả</button>
        </div>
      </div>

      <!-- Carousel Bootstrap -->
      <!-- Carousel Owl Carousel -->
<div class="col-md-7 col-12 position-relative">
  <!-- Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-custom">
    <?php foreach ($toi_uu_code_noi_dung_so_1_tiet_kiem_PC as $value) { ?>
      <div class="item">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="width: 100%;">
          <a href="taisan/tsdt/44" class="text-decoration-none text-black fw-bold">
            <div class="position-relative">
              <img src="<?= $value[0] ?>" class="card-img-top" style="height: 210px; object-fit: cover;">
              <span class="position-absolute top-0 start-0 bg-dark bg-opacity-50 text-white px-2 py-1 small rounded-bottom-end">
                <?= $value[1] ?>
              </span>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
              <h6 class="card-title fw-bold mb-1"><?= $value[2] ?>
                <span class="text-warning ms-1 fs-6"><?= $value[3] ?></span>
              </h6>
              <p class="small mb-3">
                <span class="badge bg-primary rounded-pill me-1">9,0/10</span>
                <span class="text-muted">151 đánh giá</span>
              </p>
              <div class="d-flex align-items-center justify-content-end mb-2">
                <span class="badge bg-light text-danger border border-danger me-2">Hủy Miễn Phí</span>
                <span class="badge bg-danger text-white"><?= $value[4] ?></span>
              </div>
              <div class="d-flex justify-content-end align-items-center">
                <small class="text-muted text-decoration-line-through me-2"><?= $value[5] ?></small>
                <div class="fs-6 fw-bold text-danger"><?= $value[6] ?></div>
              </div>
            </div>
          </a>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Nút điều hướng trái/phải -->
  <button id="prevBtn" class="btn bg-white border border-dark rounded-circle px-3 py-3 position-absolute top-50 start-0 translate-middle-y z-3">
    <i class="bi bi-caret-left-fill"></i>
  </button>
  <button id="nextBtn" class="btn bg-white border border-dark rounded-circle px-3 py-3 position-absolute top-50 end-0 translate-middle-y z-3">
    <i class="bi bi-caret-right-fill"></i>
  </button>
</div>


    </div>
  </div>
</div>

 <div class="row">             
        <div class="container py-5 d-md-block d-none">
            <h2 class="fw-bold">
                Khách Sạn Nổi Bật
            </h2>
            <div class="d-flex gap-3 mb-3 small">
                <span class="text-success"><i class="bi bi-check-circle-fill"></i> Chúng Tôi Khớp Giá</span>
                <span class="text-primary"><i class="bi bi-calendar-check-fill"></i> Bảo Đảm Đặt Phòng</span>
                <span class="text-info"><i class="bi bi-building"></i> Bảo Đảm Lưu Trú</span>
            </div>
            <!-- Tabs -->
            <ul class="nav nav-pills mb-4 tab-btns" id="hotelTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="hn-tab" data-bs-toggle="pill" data-bs-target="#hn" type="button" role="tab">Hà Nội</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="dn-tab" data-bs-toggle="pill" data-bs-target="#dn" type="button" role="tab">Đà Nẵng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pq-tab" data-bs-toggle="pill" data-bs-target="#pq" type="button" role="tab">Phú Quốc</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="dl-tab" data-bs-toggle="pill" data-bs-target="#dl" type="button" role="tab">Đà Lạt</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="vt-tab" data-bs-toggle="pill" data-bs-target="#vt" type="button" role="tab">Vũng Tàu</button>
                </li>
               
                <!-- Add more tabs -->
            </ul>
            <!-- Tab Content -->
            <div class="tab-content" id="hotelTabContent">
                <!-- Hà Nội -->
                <div class="tab-pane fade show active" id="hn" role="tabpanel">
                    <div class="row g-3">
                        <!-- Card 1 -->
                        <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="https://ak-d.tripcdn.com/images/1mc4w12000bze8tgw4F9C_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">InterContinental Hanoi Landmark72 <span class="fs-6">⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">9,3/10</span>
                                        <small class="text-muted fs-6">335 đánh giá</small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">6.785.611₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                         <div class="col-md-3">
                            <div class="hotel-card">
                                <img src="https://ak-d.tripcdn.com/images/1mc0m12000cf1grjs7DDC_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Grand Hotel Plaza Cầu Giấy <span class="fs-6">⭐⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">8,2/10</span>
                                        <small class="text-muted fs-6">484 đánh giá</small>
                                    </div>
                                    <div class="badge-promo mb-1"><i class="bi bi-tags-fill text-danger"></i> Giảm Giá Đặc Biệt</div>
                                    <div class="text-end mt-5">
                                        
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">1.867.845₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-3">
                            <div class="hotel-card">
                                <img src="https://ak-d.tripcdn.com/images/220h13000000ufwn3C4C6_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Hotel de l'Opera Hanoi - Mgallery <span class="fs-6">⭐⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">9,2/10</span>
                                        <small class="text-muted fs-6">50 đánh giá</small>
                                    </div>
                                    <div class="badge-promo mb-1"><i class="bi bi-tags-fill text-danger"></i> Giảm Giá Đặc Biệt</div>
                                    <div class="text-end mt-5">
                                        
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">1.867.845₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- Card 3 -->
                        

                        
                        <!-- Card 4: Khám Phá -->
                        <div class="col-md-3">
                        <div class="hotel-card text-white text-center d-flex flex-column justify-content-center align-items-center p-4" style="height: 100%; background: url('https://dimg04.tripcdn.com/images/05E5w12000lixkuav98D2.webp') center/cover no-repeat;">
                            <p>Khám phá các ưu đãi khách sạn tuyệt vời trên khắp thế giới</p>
                            <a href="#" class="btn btn-info text-white">Khám Phá Ngay</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Đà Nẵng -->
                <?php
                $toi_uu_code_noi_dung_da_nang_PC = [
                    ['https://ak-d.tripcdn.com/images/1mc4w12000bze8tgw4F9C_R_960_660_R5_D.jpg', 'InterContinental Hanoi Landmark72 ','⭐⭐⭐','9,3/103','335 đánh giá','6.785.611₫'],
                    ['https://ak-d.tripcdn.com/images/1mc4w12000bze8tgw4F9C_R_960_660_R5_D.jpg', 'InterContinental Hanoi Landmark72 ','⭐⭐⭐','9,3/103','335 đánh giá','6.785.611₫'],
                    ['https://ak-d.tripcdn.com/images/1mc4w12000bze8tgw4F9C_R_960_660_R5_D.jpg', 'InterContinental Hanoi Landmark72 ','⭐⭐⭐','9,3/103','335 đánh giá','6.785.611₫'],
                    ['https://ak-d.tripcdn.com/images/1mc4w12000bze8tgw4F9C_R_960_660_R5_D.jpg', 'InterContinental Hanoi Landmark72 ','⭐⭐⭐','9,3/103','335 đánh giá','6.785.611₫'],
                   
                ];
            ?>
           
                <div class="tab-pane fade " id="dn" role="tabpanel">
                    <div class="row">
                         <?php foreach ($toi_uu_code_noi_dung_da_nang_PC as $key => $value_trang_chu_noi_dung_da_nang) { ?>
                            <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="<?php echo $value_trang_chu_noi_dung_da_nang[0]; ?>" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1"><?php echo $value_trang_chu_noi_dung_da_nang[1]; ?><span class="fs-6"><?php echo $value_trang_chu_noi_dung_da_nang[2]; ?></span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6"><?php echo $value_trang_chu_noi_dung_da_nang[3]; ?></span>
                                        <small class="text-muted fs-6"><?php echo $value_trang_chu_noi_dung_da_nang[4]; ?></small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold"><?php echo $value_trang_chu_noi_dung_da_nang[5]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php 
                                 }
                            ?>
                   
                    </div>
                </div>
                <!-- Phú Quốc -->
                <div class="tab-pane fade" id="pq" role="tabpanel">
                    <div class="row">
                        <?php
                $toi_uu_code_noi_dung_phu_quoc_PC = [
                    ['https://ak-d.tripcdn.com/images/220h13000000ufwn3C4C6_R_960_660_R5_D.jpg', 'InterContinental Phú Quốc Landmark72  ','⭐⭐⭐','9,3/10','335 đánh giá','6.785.611₫'],
 ['https://ak-d.tripcdn.com/images/220h13000000ufwn3C4C6_R_960_660_R5_D.jpg', 'InterContinental Phú Quốc Landmark72  ','⭐⭐⭐','9,3/10','335 đánh giá','6.785.611₫'],
 ['https://ak-d.tripcdn.com/images/220h13000000ufwn3C4C6_R_960_660_R5_D.jpg', 'InterContinental Phú Quốc Landmark72  ','⭐⭐⭐','9,3/10','335 đánh giá','6.785.611₫'],
 ['https://ak-d.tripcdn.com/images/220h13000000ufwn3C4C6_R_960_660_R5_D.jpg', 'InterContinental Phú Quốc Landmark72  ','⭐⭐⭐','9,3/10','335 đánh giá','6.785.611₫'],

                   
                ];
            ?>
            <?php foreach ($toi_uu_code_noi_dung_phu_quoc_PC as $key => $value_trang_chu_noi_dung_da_nang) { ?>
                         <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="<?php echo $value_trang_chu_noi_dung_da_nang[0]; ?>" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1"><?php echo $value_trang_chu_noi_dung_da_nang[1]; ?><span class="fs-6"><?php echo $value_trang_chu_noi_dung_da_nang[2]; ?></span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6"><?php echo $value_trang_chu_noi_dung_da_nang[3]; ?></span>
                                        <small class="text-muted fs-6"><?php echo $value_trang_chu_noi_dung_da_nang[4]; ?></small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold"><?php echo $value_trang_chu_noi_dung_da_nang[5]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                            </div>

                        <?php 
                         } 
                        ?>
             
                    </div>
                </div>

                 <!-- Đà Lạt -->
                <div class="tab-pane fade" id="dl" role="tabpanel">
                    <div class="row">
                            <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="https://ak-d.tripcdn.com/images/1mc2b12000djkhx02A028_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Dalat Wonder Resort<span class="fs-6">⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">9,3/10</span>
                                        <small class="text-muted fs-6">335 đánh giá</small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">6.785.611₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="https://ak-d.tripcdn.com/images/1mc2b12000djkhx02A028_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Dalat Wonder Resort<span class="fs-6">⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">9,3/10</span>
                                        <small class="text-muted fs-6">335 đánh giá</small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">6.785.611₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="https://ak-d.tripcdn.com/images/1mc2b12000djkhx02A028_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Dalat Wonder Resort<span class="fs-6">⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">9,3/10</span>
                                        <small class="text-muted fs-6">335 đánh giá</small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">6.785.611₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hotel-card h-100">
                                <img src="https://ak-d.tripcdn.com/images/1mc2b12000djkhx02A028_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Dalat Wonder Resort<span class="fs-6">⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">9,3/10</span>
                                        <small class="text-muted fs-6">335 đánh giá</small>
                                    </div>
                                    <div class="text-end mt-5 h-100">
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">6.785.611₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="tab-pane fade" id="vt" role="tabpanel">
                    <div class="row">
                         <div class="col-md-3">
                            <div class="hotel-card">
                                <img src="https://ak-d.tripcdn.com/images/0222e12000brjtbhe500A_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Vung Tau Wonder Resort <span class="fs-6">⭐⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">8,2/10</span>
                                        <small class="text-muted fs-6">484 đánh giá</small>
                                    </div>
                                    <div class="badge-promo mb-1"><i class="bi bi-tags-fill text-danger"></i> Giảm Giá Đặc Biệt</div>
                                    <div class="text-end mt-5">
                                        
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">1.867.845₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hotel-card">
                                <img src="https://ak-d.tripcdn.com/images/0222e12000brjtbhe500A_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Vung Tau Wonder Resort <span class="fs-6">⭐⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">8,2/10</span>
                                        <small class="text-muted fs-6">484 đánh giá</small>
                                    </div>
                                    <div class="badge-promo mb-1"><i class="bi bi-tags-fill text-danger"></i> Giảm Giá Đặc Biệt</div>
                                    <div class="text-end mt-5">
                                        
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">1.867.845₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hotel-card">
                                <img src="https://ak-d.tripcdn.com/images/0222e12000brjtbhe500A_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Vung Tau Wonder Resort <span class="fs-6">⭐⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">8,2/10</span>
                                        <small class="text-muted fs-6">484 đánh giá</small>
                                    </div>
                                    <div class="badge-promo mb-1"><i class="bi bi-tags-fill text-danger"></i> Giảm Giá Đặc Biệt</div>
                                    <div class="text-end mt-5">
                                        
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">1.867.845₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hotel-card">
                                <img src="https://ak-d.tripcdn.com/images/0222e12000brjtbhe500A_R_960_660_R5_D.jpg" class="hotel-img" alt="Hotel 1">
                                <div class="p-3">
                                    <h5 class="fw-bold mb-1">Vung Tau Wonder Resort <span class="fs-6">⭐⭐⭐⭐</span></h5>
                                    <div class="d-flex align-items-center mt-2 mb-2">
                                        <span class="badge bg-primary me-2 fs-6">8,2/10</span>
                                        <small class="text-muted fs-6">484 đánh giá</small>
                                    </div>
                                    <div class="badge-promo mb-1"><i class="bi bi-tags-fill text-danger"></i> Giảm Giá Đặc Biệt</div>
                                    <div class="text-end mt-5">
                                        
                                        <p class=" mb-0 fs-5"><span class="text-secondary small">Từ</span> <span class="text-dark fs-5 fw-bold">1.867.845₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bắt đầu MOBILE: nội dung số 3 : tìm theo loại chỗ thuê -->
    <?php
        $toi_uu_code_noi_dung_so_3_mobile = [
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550862.jpeg?k=3514aa4abb76a6d19df104cb307b78b841ac0676967f24f4b860d289d55d3964&o=', 'Khách Sạn'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595548591.jpeg?k=01741bc3aef1a5233dd33794dda397083092c0215b153915f27ea489468e57a2&o=', 'Căn Hộ'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595551044.jpeg?k=262826efe8e21a0868105c01bf7113ed94de28492ee370f4225f00d1de0c6c44&o=', 'Các Resort'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/620168315.jpeg?k=300d8d8059c8c5426ea81f65a30a7f93af09d377d4d8570bda1bd1f0c8f0767f&o=', 'Các Biệt Thự '],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595549239.jpeg?k=ad5273675c516cc1efc6cba2039877297b7ad2b5b3f54002c55ea6ebfb8bf949&o=', 'Cabin nghỉ dưởng '],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595550000.jpeg?k=71eeb3e0996d7f734e57a6fa426c718749a36df768ca5d2fb1dc65fcd7483c1d&o=', 'Cottage'],
            ['https://q-xx.bstatic.com/xdata/images/xphoto/263x210/45450090.jpeg?k=52f6b8190edb5a9c91528f8e0f875752ce55a6beb35dc62873601e57944990e4&o=', 'Các Khu Glamping'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595551195.jpeg?k=fe19403cca087623a33bf24c4154a636cd26d04c2aa948634fb05afa971e7767&o=', 'Căn hộ dịch vụ'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550229.jpeg?k=2ae1f5975fa1f846ac707d3334eb604a7e8f817f640cbd790185b2691532476b&o=', 'Các Nhà Nghỉ Dưỡng'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550178.jpeg?k=1db9bffadd03a0f2a9f0a06ba6c7751b16465f2dd251738f229d7a57dca799ef&o=', 'Các Nhà Khách'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550415.jpeg?k=8967853a074040381dfa25a568e6c780e309b529e0c144995c5bbc9644721eca&o=', 'Các Hotel'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550975.jpeg?k=6d2c22368ec017e1f99a4811c8abb1cb2d7fd829c9ddd12a82ff1aa77ab7da19&o=', 'Các Motel'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595549020.jpeg?k=f5df2d3dc0000073bef517b0cab9593036f3f1aafa2421df31a6538a8c56b834&o=', 'Nhà nghỉ B&amp;B'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595551145.jpeg?k=52a1d8bd9bc1f2199bf8d95f5399377c521d3a6291013e3a36f4dbeecd337bd7&o=', 'Các Ryokan'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595551127.jpeg?k=3ce17a8b06333670edd53b58e47ab30acebb737f3bd21ebc7ea2ea849be7dc3e&o=', 'Các Riad'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595550306.jpeg?k=00c1d9a10179cc21b1e7e2ad1429ac21a5e779f258cf4cf66ddce30d618c05c9&o=', 'Các Công Viên Nghỉ Dưỡng'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595550377.jpeg?k=ef93cbc1a3af0d6db84e27b6da280a4ef24dbcfeb065fcfeae4fe9c43dddd2da&o=', 'Homestay'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595549938.jpeg?k=88e50f4acf09b4edc03ca94818723b3baca6eeaf49bf318edf8dc6690775c480&o=', 'Các khu cắm trại'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595550059.jpeg?k=323042e47ead9072a6ca4cd3386519f9c59faff1b74043d17b486dbd5f0d5d67&o=', 'Biệt Thự Đồng Quê'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595550098.jpeg?k=d1b5a6f6faa0c76496d57dd0d263a88c07ad220b3873e14fcd71c9d8a81c5c25&o=', 'Các nhà nghỉ trang trại'],
            ['https://r-xx.bstatic.com/xdata/images/hotel/263x210/595549146.jpeg?k=ac87efa3e3faf75d3d5e24376940d48f3a0c46d73dee59fce17907166502552e&o=', 'Thuyền'],
            ['https://q-xx.bstatic.com/xdata/images/hotel/263x210/595550925.jpeg?k=c0db68290ad93f4dea18b95395397a874a8801159fb4d6308bd6164ebcd28a11&o=', 'Lều trại sang trọng'],
            ['https://r-xx.bstatic.com/xdata/images/xphoto/263x210/45450075.jpeg?k=d23cf8443780ac09f46f59e40393d75dbe64b06029b4959c60b81b7fdefc9be0&o=', 'Các Chỗ Nghỉ Tự Nấu Ăn'],
            ['https://r-xx.bstatic.com/xdata/images/xphoto/263x210/57175023.jpeg?k=dc0319d4d64ded9ee4b0ddb162a2e80db7899300b7bf21b34506888895d74c79&o=', 'Các Căn Nhà Nhỏ'],
        ];
    ?>
    <div class="row justify-content-center d-flex d-md-none ps-2 pe-2">
        <div class="col-12 mt-3">
            <h3 class="fw-bold ">Tìm theo loại chỗ cho thuê </h3>
            <div class=" scrolling-wrapper luot_cha ">
                <?php
                    foreach ( $toi_uu_code_noi_dung_so_3_mobile as $key => $value_so_3_trang_chu) {
                ?>
                <div class="scroll-item">
                    <a href="taisan/tsdt/44" class="text-decoration-none text-black fw-bold">
                        <div class="card">
                            <img src="<?php echo $value_so_3_trang_chu[0]; ?>"
                                class="w-100 card-img-top" />
                        </div>
                        <h5 class="text-center text-black fw-bold mt-2">
                            <?php echo $value_so_3_trang_chu[1]; ?>
                        </h5>
                    </a>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- kết thúc chế độ di dộng của nội dung số 3: tìm theo loại chỗ cho thuê -->
     <!--Bắt đầu: nội dung số 4 Ưu đãi cho cuối tuần -  chế độ dành PC  -->
    <div class="row justify-content-center fade-in">
        <div class="col-md-12 mb-3 mt-3 d-none">
            <h3 class="fw-bold">Ưu đãi cho cuối tuần </h3>
            <p>
                Tiết kiệm cho chỗ nghỉ ở Thành Phố Hồ Chí Minh
            </p>
            <?php
                $toi_uu_code_noi_dung_so_4_PC_MOBILE = [
                    ['https://file4.batdongsan.com.vn/crop/393x222/2025/05/27/20250527093129-c62c_wm.jpg', ' Cho thuê River Panorama Quận 7','Thành Phố Hồ Chí Minh, Việt Nam','9.3','Tuyệt hảo . 127','Ưu đãi cuối tuần','2 đêm','US$920','US$130'],
                    ['https://file4.batdongsan.com.vn/crop/393x222/2025/05/26/20250526102601-28e6_wm.jpg', ' Cho thuê căn hộ tại dự án Sky89','Thành Phố Hồ Chí Minh, Việt Nam','9.3','Tuyệt hảo . 127','Ưu đãi cuối tuần','2 đêm','US$920','US$130'],
                    ['https://file4.batdongsan.com.vn/crop/393x222/2025/05/15/20250515102041-9831_wm.jpg', ' Cho thuê căn hộ SKY89 Q7','Thành Phố Hồ Chí Minh, Việt Nam','9.3','Tuyệt hảo . 127','Ưu đãi cuối tuần','2 đêm','US$920','US$130'],
                    ['https://file4.batdongsan.com.vn/crop/393x222/2025/05/31/20250531105544-c0a2_wm.jpg', ' Cho thuê Căn hộ 3PN','Thành Phố Hồ Chí Minh, Việt Nam','9.3','Tuyệt hảo . 127','Ưu đãi cuối tuần','2 đêm','US$920','US$130'],
                    ['https://file4.batdongsan.com.vn/crop/393x222/2025/05/26/20250526102601-28e6_wm.jpg', ' Cho thuê căn hộ tại dự án Sky89','Thành Phố Hồ Chí Minh, Việt Nam','9.3','Tuyệt hảo . 127','Ưu đãi cuối tuần','2 đêm','US$920','US$130'],
                    ['https://file4.batdongsan.com.vn/crop/393x222/2025/04/16/20250416141735-1f5b_wm.jpg', ' Cho thuê Sky 89 Quận 7','Thành Phố Hồ Chí Minh, Việt Nam','9.3','Tuyệt hảo . 127','Ưu đãi cuối tuần','2 đêm','US$920','US$130'],
                ];
            ?>
            <div class="d-none d-md-flex scroll-wrapper ">
                <button data-analytics="" data-cta="" class="scroll-button scroll-left shadow-sm"
                    onclick="scrollCarousel_2(-1)"><i class="bi bi-caret-left-fill"></i></button>
                <div class="scroll-container" id="carouselList_2">
                    <?php
                        foreach ( $toi_uu_code_noi_dung_so_4_PC_MOBILE as $key => $value_so_4_trang_chu) {
                    ?>
                    <div class="scroll-item-2 ">
                        <div class="card">
                            <img src="<?php echo $value_so_4_trang_chu[0]; ?>"
                                class="w-100 card-img-top" />
                            <div class="card-body p-2">
                                <div class="card-title">
                                    <a href="taisan/tsdt/44" class="text-decoration-none text-black fw-bold">
                                    <?php echo $value_so_4_trang_chu[1]; ?>
                                    </a>
                                </div>
                                <p>
                                    <?php echo $value_so_4_trang_chu[2]; ?>
                                </p>
                                <div class="d-flex align-items-center ">
                                    <span class="bg-primary py-1 px-2 text-white bo-tron"> <?php echo $value_so_4_trang_chu[3]; ?></span> &nbsp;<?php echo $value_so_4_trang_chu[4]; ?>
                                    đánh giá
                                </div>
                                <div class="d-flex align-items-center mt-2 mb-5 text-white ">
                                    <span class="bg-success py-1 px-2 bo-tron"><?php echo $value_so_4_trang_chu[5]; ?></span>
                                </div>

                                <p class="card-text text-end">
                                    <span><?php echo $value_so_4_trang_chu[6]; ?> </span><strike class="text-danger"><?php echo $value_so_4_trang_chu[7]; ?> </strike><b><?php echo $value_so_4_trang_chu[8]; ?></b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
                <button data-analytics="" data-cta="" class="scroll-button scroll-right shadow-sm"
                    onclick="scrollCarousel_2(1)"><i class="bi bi-caret-right-fill"></i></button>
            </div>
        </div>
    </div>
    <!-- kết thúc: nội dung số 4 Ưu đãi cho cuối tuần - chế độ dành PC  -->
    
    <!-- Bắt đầu: code nội dung số 5: Mobile: các chỗ nghỉ độc đáo -->
    <div class="row justify-content-center d-flex d-md-none fade-in">
        <?php
            $toi_uu_code_noi_dung_so_6_PC_MOBILE = [
                ['https://ak-d.tripcdn.com/images/0223l120008g72ahtE0ED_R_300_225_R5.jpg', 'Khách sạn Mi Linh',' <i class="bi bi-star-fill text-warning"></i>','B38A Bạch Đằng, Phường 2, Quận Tân Bình, Tp.HCM','9.3' ,'Tuyệt hảo . 127 đánh giá'],
                ['https://ak-d.tripcdn.com/images/1mc6c12000e00zv0f2DFA_R_300_225_R5.jpg', ' Sunrise Airport Hotel','<i class="bi bi-star-fill text-warning me-1"></i><i class="bi bi-star-fill text-warning me-1"></i><i class="bi bi-star-fill text-warning me-1"></i>','33 Đường Bạch Đằng, Phường 2, Quận Tân Bình, Tp.HCM','9.3' ,'Tuyệt hảo . 127 đánh giá'],
                ['https://ak-d.tripcdn.com/images/0204212000aucymbx3F73_R_300_225_R5.jpg', ' Khách sạn Venus','  <i class="bi bi-star-fill text-warning me-1"></i><i class="bi bi-star-fill text-warning me-1"></i>','872 Quang Trung, P.8, Q.Gò Vấp, TP. Hồ Chí Minh','9.3' ,'Tuyệt hảo . 127 đánh giá'],
                ['https://ak-d.tripcdn.com/images/200w0s000000hpvur45CE_R_300_225_R5.jpg', 'Le Saigon Hotel',' <i class="bi bi-star-fill text-warning me-1"></i><i class="bi bi-star-fill text-warning me-1"></i><i class="bi bi-star-fill text-warning me-1"></i>','17 Đống Đa, Q. Tân Bình, TP. Hồ Chí Minh','9.3' ,'Tuyệt hảo . 127 đánh giá'],
                ['https://ak-d.tripcdn.com/images/1mc3r12000dvyvtjiD8E0_R_300_225_R5.jpg', 'Hotel Cù Lao, Phú Nhuận ',' <i class="bi bi-star-fill text-warning me-1"></i><i class="bi bi-star-fill text-warning me-1"></i>','52/25-27 Cù Lao, Phú Nhuận, TP. Hồ Chí Minh','9.3' ,'Tuyệt hảo . 127 đánh giá'],
            ];
        ?>
    </div>
    <div class="row justify-content-center fade-in d-flex d-md-none ps-2 pe-2">
        <div class="col-12 mt-2">
            <h3 class="fw-bold">Các chỗ nghỉ độc đáo hàng đầu</h3>
            <p>
                Từ biệt thự, lâu đài cho đến nhà thuyền, igloo, chúng tôi đều có hết
            </p>
            <div class="scrolling-wrapper luot_cha ">
                <?php
                    foreach ( $toi_uu_code_noi_dung_so_6_PC_MOBILE as $key => $value_9) {
                ?>
                <div class="scroll-item-2 ">
                    <div class="card lop_1_card">
                        <img src="<?php echo $value_9[0]; ?>"
                            class="w-100 card-img-top" />
                        <div class="card-body p-2">
                            <div class="card-title">
                                <a href="taisan/tsdt/44" class="text-decoration-none text-black fw-bold">
                                    <?php echo $value_9[1]; ?> <?php echo $value_9[2]; ?>
                                </a>
                            </div>
                            <p>
                                <i class="bi bi-geo-alt-fill text-success me-2"></i><?php echo $value_9[3]; ?> 
                            </p>
                            <div class="d-flex align-items-center mb-4 ">
                                <span class="bg-primary py-1 px-2 text-white bo-tron-di-dong"><?php echo $value_9[4]; ?> </span> &nbsp; <?php echo $value_9[5]; ?> 
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
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Kết thúc: code nội dung số 5: Mobile: các chỗ nghỉ độc đáo -->

    <!-- Bắt đầu: nội dung số 7: phần đi nhiều hơn chi phí thấp : Mobile-->
    <div class="row justify-content-center d-flex d-md-none ps-2 pe-2">
        <div class="col-12 mt-4 d-md-none">
            <div class="card p-3 d-flex flex-row align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1 fw-bold">Đăng nhập để tiết kiệm</h5>
                        <p class="text-muted mb-2">Chỉ cần tìm nhãn Genius xanh lam để tiết kiệm 10% trở lên ở những chỗ
                            nghỉ có tham gia</p>
                        <button data-analytics="" data-cta="" class="btn btn-primary btn-sm">Đăng nhập</button>
                        <button data-analytics="" data-cta="" class="btn btn-light btn-sm">Đăng ký</button>
                    </div>
                </div>
                <div class="ms-3">
                    <img src="https://png.pngtree.com/png-clipart/20240810/original/pngtree-3d-gift-box-icon-christmas-holiday-white-red-wrap-png-image_15740143.png"
                        class="rounded" width="100" height="100" alt="ảnh ưu đãi">
                </div>
            </div>
        </div>
    </div>      
    <!-- Kết thúc: nội dung số 7: phần đi nhiều hơn chi phí thấp : Mobile-->
    <br>
    <!-- Bắt đầu: nội dung số 8: Phần hiệu ứng vòng tròn: PC-->
    <div class="container fade-in d-none d-md-block">
        <div class="row">
            <div class="col-12 d-flex overflow-hidden border rounded-3">
                <div class="col-12 col-md-8 position-relative">
                    <div
                        class="trang_chu_tron bg-primary flex-wrap rounded-circle d-flex justify-content-center align-items-center">
                        <div class="col-12 ">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                
          
          <div>
            <div class="d-flex mb-2 text-white">
                
              <div class="me-4">
                <h2 class="fw-bold">1.8M+</h2>
                <small>Người Dùng Đặt Phòng</small>
              </div>
              <div class="me-4">
                <h2 class="fw-bold">150K+</h2>
                <small>Người Dùng Cho Thuê</small>
              </div>
              <div>
                <h2 class="fw-bold">4.7</h2>
                <small>Xếp Hạng</small>
              </div>
            </div>
            
            
          </div>
        </div>
                        </div>
                    </div>
                    <div class="trang_chu_tron_2 bg-warning rounded-circle position-relative">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="https://img.freepik.com/free-vector/hand-drawn-flat-tourists_52683-69807.jpg?semt=ais_hybrid&w=740"
                        class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Kết thúc: nội dung số 8: Phần hiệu ứng vòng tròn: PC-->
    <!-- Bắt đầu: nội dung số 8: Phần hiệu ứng vòng tròn: Mobile-->
    <div class="row justify-content-center d-flex d-md-none ps-2 pe-2 mt-3 overflow-hidden">
        <div class=" d-flex flex-row align-items-center justify-content-between overflow-hidden">
            <div class="col-12 col-md-10 border shadow rounded-4 overflow-hidden d-flex flex-column flex-md-row align-items-center bg-white">
                <div class="text-center mb-4 mb-md-0 col-12 col-md-6">
                    <div class="position-relative d-inline-block">
                        <div class="trang_chu_tron_di_dong_1 bg-primary rounded-circle mx-auto d-flex justify-content-center align-items-center text-white text-center px-2 overflow-hidden">
                        <div>
                            <h3 class="fw-bold">
                            Tìm <span id="changingWord_di_dong" class="fade-text-di-dong">nhà</span><br>cho chuyến đi
                            </h3>
                            <button class="btn btn-light mt-3">Khám phá chỗ nghỉ</button>
                        </div>
                        </div>
                        <div class="trang_chu_tron_2_di_dong position-absolute"></div>
                        <div class="trang_chu_tron_3_di_dong position-absolute"></div>
                        <div class="trang_chu_tron_4_di_dong position-absolute"></div>
                        <div class="trang_chu_tron_5_di_dong position-absolute"></div>
                        <div class="trang_chu_tron_6_di_dong position-absolute"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center">
                <img src="https://img.freepik.com/free-vector/hand-drawn-flat-tourists_52683-69807.jpg?semt=ais_hybrid&w=740"
                    class="img-fluid" alt="Hình minh họa" style="max-width: 320px;" />
                </div>
            </div>
        </div>
    </div>
    <!-- Kết thúc: nội dung số 8: Phần hiệu ứng vòng tròn: Mobile-->

</div>

 
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(window).on('load', function () {
  setTimeout(() => {
    const $carousel1 = $('.owl-carousel-custom');
    $carousel1.owlCarousel({
      loop: false,
      margin: 16,
      nav: false,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      pullDrag: true,
      smartSpeed: 600,            // <-- hiệu ứng chuyển slide
      animateOut: 'fadeOut',      // tùy chọn fade
      animateIn: 'fadeIn',
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 }
      },
      onInitialized: updateNavButtons,
      onChanged: updateNavButtons
    });

    $('#prevBtn').click(function () {
      $carousel1.trigger('prev.owl.carousel');
    });

    $('#nextBtn').click(function () {
      $carousel1.trigger('next.owl.carousel');
    });

    function updateNavButtons(event) {
      const current = event.item.index;
      const visible = event.page.size;
      const total = event.item.count;

      if (total <= visible) {
        $('#prevBtn, #nextBtn').fadeOut();
      } else {
        if (current > 0) {
          $('#prevBtn').fadeIn();
        } else {
          $('#prevBtn').fadeOut();
        }

        if (current + visible < total) {
          $('#nextBtn').fadeIn();
        } else {
          $('#nextBtn').fadeOut();
        }
      }
    }

    // Phần banner tương tự
    const $carousel2 = $('.owl-carousel-custom-banner');
    $carousel2.owlCarousel({
      loop: false,
      margin: 16,
      nav: false,
      dots: false,
      mouseDrag: true,
      touchDrag: true,
      pullDrag: true,
      smartSpeed: 600,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 2 },
        1200: { items: 2 }
      },
      onInitialized: updateNavButtons2,
      onChanged: updateNavButtons2
    });

    $('#prevBtn1').click(function () {
      $carousel2.trigger('prev.owl.carousel');
    });

    $('#nextBtn1').click(function () {
      $carousel2.trigger('next.owl.carousel');
    });

    function updateNavButtons2(event) {
      const current = event.item.index;
      const visible = event.page.size;
      const total = event.item.count;

      if (total <= visible) {
        $('#prevBtn1, #nextBtn1').fadeOut();
      } else {
        if (current > 0) {
          $('#prevBtn1').fadeIn();
        } else {
          $('#prevBtn1').fadeOut();
        }

        if (current + visible < total) {
          $('#nextBtn1').fadeIn();
        } else {
          $('#nextBtn1').fadeOut();
        }
      }
    }
  }, 300);
});
</script>


 <script>
function scrollCarousel_Banner(direction) {
  const container = document.getElementById('carouselListBanner');
  const item = container.querySelector('.scroll-item');
  const gap = 16; // khoảng cách me-3
  const scrollAmount = item.offsetWidth + gap;

  container.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth'
  });
}
</script>




 <script>
    // Phần Script của nội dung: tìm theo loại chỗ cho thuê 
    function scrollCarousel_thinh_hanh_moi(direction) {
        const container = document.getElementById('carouselList');
        const item = container.querySelector('.scroll-item');
        const scrollAmount = item.offsetWidth + 16; // 16 là khoảng cách gap

        container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
        });
    }
    // Kết thúc phần Script của nội dungL: tìm theo loại chỗ cho thuê 
</script>
 <script>
    // Phần Script của nội dung: tìm theo loại chỗ cho thuê 
    function scrollCarousel_thinh_hanh_moi_2(direction) {
        const container = document.getElementById('carouselList_thinh_hanh_moi_2');
        const item = container.querySelector('.scroll-item');
        const scrollAmount = item.offsetWidth + 16; // 16 là khoảng cách gap

        container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
        });
    }
    // Kết thúc phần Script của nội dungL: tìm theo loại chỗ cho thuê 
</script>
<script>
    // Phần Script của nội dung: tìm theo loại chỗ cho thuê 
    function scrollCarousel_tim_theo_loai_cho_thue(direction) {
        const container = document.getElementById('carouselList_tim_theo_loai_cho_thue');
        const item = container.querySelector('.scroll-item_tim_theo_loai_cho_thue');
        const scrollAmount = item.offsetWidth + 16; // 16 là khoảng cách gap

        container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
        });
    }
    // Kết thúc phần Script của nội dungL: tìm theo loại chỗ cho thuê 
</script>
<script>
function scrollCarouselThinhHanh(direction) {
  const container = document.getElementById('carouselListThinhHanh');
  const item = container.querySelector('.scroll-item');
  const gap = 16; // khoảng cách me-3
  const scrollAmount = item.offsetWidth + gap;

  container.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth'
  });
}
</script>

<script>
function scrollCarouselThinhHanh_mobile(direction) {
  const container = document.getElementById('carouselListThinhHanh_mobile');
  const item = container.querySelector('.scroll-item');
  const gap = 16; // khoảng cách me-3
  const scrollAmount = item.offsetWidth + gap;

  container.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth'
  });
}
</script>

<script>
function scrollCarouselThinhHanh_2(direction) {
  const container = document.getElementById('carouselListThinhHanh_2');
  const item = container.querySelector('.scroll-item');
  const gap = 16; // px, tương ứng với .me-3
  const scrollAmount = item.offsetWidth + gap;

  // Cuộn
  container.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth'
  });

  // Sau khi cuộn xong, chờ smooth scroll kết thúc
  setTimeout(() => {
    const maxScrollLeft = container.scrollWidth - container.clientWidth;
    const currentScroll = container.scrollLeft;

    const btnPrev = document.getElementById('btnPrevThinhHanh_2');
    const btnNext = document.getElementById('btnNextThinhHanh_2');

    // Nếu ở đầu => ẩn Prev
    if (currentScroll <= 0) {
      btnPrev.style.display = 'none';
    } else {
      btnPrev.style.display = 'block';
    }

    // Nếu ở cuối => ẩn Next
    if (currentScroll >= maxScrollLeft - 5) {
      btnNext.style.display = 'none';
    } else {
      btnNext.style.display = 'block';
    }
  }, 300); // Delay cho scroll animation kết thúc
}

// Tự gọi lần đầu để ẩn nút prev nếu đang ở đầu
document.addEventListener('DOMContentLoaded', () => {
  scrollCarouselThinhHanh(0);
});
</script>


<script>
    // Phần Script của nội dung: các chỗ nghỉ độc đáo 
    function scrollCarousel_cac_cho_nghi_doc_dao(direction) {
        const container = document.getElementById('carouselList_cac_cho_nghi_doc_dao');
        const item = container.querySelector('.scroll-item_cac_cho_nghi_doc_dao');
        const scrollAmount = item.offsetWidth + 16; // 16 là khoảng cách gap

        container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
        });
    }
    // Kết thúc phần Script của nội dung: các chỗ nghỉ độc đáo 
</script>

<!-- Bắt đầu: Hiệu ứng đổi chữ cho di động cho phàna cuối cùng tìm chuyến đi  -->
<script>
    const words_di_dong = ['nhà', 'phòng', 'homestay', 'villa', 'căn hộ'];
    let currentIndex = 0;
    const changingWord = document.getElementById('changingWord_di_dong');
    setInterval(() => {
      changingWord.style.opacity = 0;
      setTimeout(() => {
        currentIndex = (currentIndex + 1) % words_di_dong.length;
        changingWord.textContent = words_di_dong[currentIndex];
        changingWord.style.opacity = 1;
      }, 300);
    }, 2000);
</script>


<!-- Bắt đầu: Hiệu ứng đổi chữ cho PC cho phàna cuối cùng tìm chuyến đi  -->
<script>
    const words = ["nhà", "căn hộ ", "biệt thự", "khách sạn căn hộ ", "nhà nghĩ dưỡng ", "cottage"];
    let index = 0;
    setInterval(() => {
        index = (index + 1) % words.length;
        document.getElementById("changingWord").textContent = words[index];
    }, 3000); // thay đổi mỗi 3 giây
</script>
<!-- Kết thúc: Hiệu ứng đổi chữ cho PC cho phàna cuối cùng tìm chuyến đi  -->