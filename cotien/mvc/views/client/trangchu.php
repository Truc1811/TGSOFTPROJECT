<style>
    .custom-hover {
        border: 1px solid transparent;
        transition: border 0.3s ease;
    }

    .custom-hover:hover {
        border: 1px solid #5B56F7;
        /* Màu tím như hình */
    }

    .btn-hover-primary {
        border-color: #4A35D5;
        color: #4A35D5;
        background-color: white;
        transition: 0.3s ease;
    }

    .btn-hover-primary:hover {
        background-color: #4A35D5;
        color: #fff;
    }

    .btn-hover-primary:hover i {
        color: #fff;
    }

    .btn-hover-primary i {
        color: #4A35D5;
        transition: 0.3s ease;
    }

    .card-hover {
        border: 1px solid transparent;
        transition: border-color 0.2s ease-in-out, box-shadow 0.2s;
    }

    .card-hover:hover {
        border-color: #0d6efd !important;
        /* Blue border */
    }


    .nut-btn-invest {
        background-color: #ffffffff;
        color: black;
        border: none;
        font-size: 1.1rem;
    }



    .nut-btn-register {
        color: #ffffffff;
        border: 2px solid #a046ff;
        background-color: transparent;

        font-size: 1.1rem;
    }

    .nut-btn-register:hover {
        background-color: #6a1b9a;
        color: white;
        box-shadow: 0 6px 16px rgba(160, 70, 255, 0.4);
    }


    .nut_botron {
        width: 80px;
        height: 80px;
    }

    .font_i_span {
        font-size: 15px;
        font-weight: bold;
    }

    .font_i {
        font-size: 20px;
        font-weight: bold;
    }

    .left-border-highlight {
        border-left: 4px solid #6f42c1;
        /* Màu tím hoặc màu bạn muốn */
        background-color: #f6f4ff;
        /* Nền sáng nhẹ */
        border-radius: 0.5rem;
    }




    @media (max-width: 767.98px) {
        .container {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }

        .row.p-5 {
            padding-left: 12px !important;
            padding-right: 12px !important;
            padding-top: 24px !important;
            padding-bottom: 24px !important;
        }

        .nut_botron {
            width: 60px;
            height: 60px;
        }

        .font_i_span {
            font-size: 12px;
            font-weight: bold;
        }

        .font_i {
            font-size: 16px;
            font-weight: bold;
        }



    }
</style>
<div class="bg-light" id="home">
    <div class="container">
        <div class="row p-5">
            <div class="col-12 col-md-12 text-center">
                <div class="d-flex justify-content-center">
                    <img src="https://vayvon.netlify.app/images/3a2bcf3259bb46c19791340180efc299.png" class="w-25" alt="">
                </div>

                <div class="text-center fw-bold mt-2 d-none d-md-block">
                    <div style="font-size: 60px;">
                        Nền tảng <span class="text-primary" style="font-size: 60px;">P2P Lending</span>
                    </div>
                    <div style="font-size: 60px;">
                        thông minh với <span class="text-danger" style="font-size: 60px;">AI</span>
                        <span style="color: #f75b81;font-size: 60px;">Scoring</span>
                    </div>
                    <div style="font-size: 60px;">
                        đầu tiên tại Việt Nam
                    </div>
                </div>
                <div class="text-center fw-bold mt-2 d-block d-md-none">
                    <div style="font-size: 30px;">
                        Nền tảng <span class="text-primary" style="font-size: 30px;">P2P Lending</span>
                    </div>
                    <div style="font-size: 30px;">
                        thông minh với <span class="text-danger" style="font-size: 30px;">AI</span>
                        <span style="color: #f75b81;font-size: 30px;">Scoring</span>
                    </div>
                    <div style="font-size: 30px;">
                        đầu tiên tại Việt Nam
                    </div>
                </div>
                <p class="fs-4 text-black-50 mt-2">Công nghệ AI tiên tiến đánh giá tín dụng tự động, tạo ra quyết định cho vay thông minh. Kết nối nhà đầu tư và người vay với tính minh bạch tuyệt đối và hiệu quả vượt trội.</p>
                <!-- Hàng nút tròn đầu tiên -->
                <!-- mobile -->
                <div class="row d-block d-md-none">
                    <div class="col-12 col-md-4 mt-2">
                        <button class="btn bg-white rounded-pill px-3 py-3 w-100">
                            <i class="bi bi-robot text-primary font_i"></i>&ensp;<span class="font_i_span">AI Credit Scoring</span>
                        </button>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <button class="btn bg-white rounded-pill px-3 py-3 w-100">
                            <i class="bi bi-graph-down-arrow text-primary font_i"></i>&ensp;<span class="font_i_span"> ML Risk Assessment</span>
                        </button>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <button class="btn bg-white rounded-pill px-3 py-3 w-100">
                            <i class="bi bi-eye-fill text-primary font_i"></i>&ensp;<span class="font_i_span"> Minh bạch tuyệt đối</span>
                        </button>

                    </div>
                </div>

                <!-- pc -->
                <div class="mt-4 d-none d-md-flex justify-content-evenly flex-wrap ">
                    <button class="btn bg-white rounded-pill px-3 py-3 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <i class="bi bi-robot text-primary font_i"></i>&ensp;<span class="font_i_span">AI Credit Scoring</span>
                    </button>
                    <button class="btn bg-white rounded-pill px-3 py-3 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">
                        <i class="bi bi-graph-down-arrow text-primary font_i"></i>&ensp;<span class="font_i_span"> ML Risk Assessment</span>
                    </button>
                    <button class="btn bg-white rounded-pill px-3 py-3 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.9s">
                        <i class="bi bi-eye-fill text-primary font_i"></i>&ensp;<span class="font_i_span"> Minh bạch tuyệt đối</span>
                    </button>
                </div>

                <!-- mobile -->
                <div class="row mt-2 d-block d-md-none">
                    <div class="col-12 col-md-4 mt-3">
                        <button class="btn btn-primary w-100 px-5 py-3" style="background-color: #4A35D5; border-color: #4A35D5;">
                            <i class="bi bi-rocket-fill font_i"></i>&ensp;<span class="font_i_span"> Bắt đầu ngay</span>
                        </button>
                    </div>
                    <div class="col-12 col-md-4 mt-3">
                        <button class="btn btn-outline-primary fw-bold  px-5 py-3 w-100">
                            <i class="bi bi-plus-circle font_i"></i>&ensp;<span class="font_i_span"> Tạo khoản vay</span>
                        </button>
                    </div>
                    <div class="col-12 col-md-4 mt-3">
                        <button class="btn btn-outline-primary  px-5 py-3 w-100">
                            <i class="bi bi-play-circle-fill font_i"></i>&ensp;<span class="font_i_span">Tìm hiểu thêm</span>
                        </button>
                    </div>
                </div>


                <!-- pc -->
                <div class="mt-4 d-none d-md-flex justify-content-evenly align-items-center flex-wrap ">
                    <button class="btn btn-primary rounded-3 px-5 py-4 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.9s" style="background-color: #4A35D5; border-color: #4A35D5;">
                        <i class="bi bi-rocket-fill font_i"></i>&ensp;<span class="font_i_span"> Bắt đầu ngay </span>
                    </button>
                    <button class="btn btn-outline-primary fw-bold px-5 py-4 ms-2 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">
                        <i class="bi bi-plus-circle font_i"></i>&ensp;<span class="font_i_span"> Tạo khoản vay</span>
                    </button>
                    <button class="btn btn-outline-primary  px-5 py-4 ms-2 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <i class="bi bi-play-circle-fill font_i"></i>&ensp;<span class="font_i_span">Tìm hiểu thêm</span>
                    </button>
                </div>


                <div class="border-top mt-4"></div>
                <div class="row text-center mt-5">

                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="counter fw-bold text-primary-emphasis fs-1" style="color: #4A35D5;" data-target="1000">0</h4>
                        <p class="text-muted">Tỷ VNĐ đã giải ngân</p>
                    </div>

                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="counter fw-bold text-primary-emphasis fs-1" style="color: #4A35D5;" data-target="12000">0</h4>
                        <p class="text-muted">Người dùng tin tưởng</p>
                    </div>

                    <div class="col-md-4">
                        <h4 class="counter fw-bold text-primary-emphasis fs-1" style="color: #4A35D5;" data-target="98">0</h4>
                        <p class="text-muted">% Tỷ lệ thu hồi nợ</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
$mang_congnghe = [
    [
        ' ĐỘC QUYỀN',
        'bi bi-robot',
        'AI Credit Scoring Tự động',
        'Hệ thống AI đánh giá tín dụng trong 30 giây, phân tích hơn 1000+ yếu tố để đưa ra điểm tín dụng chính xác. Người vay nhận báo cáo đánh giá ngay lập tức.',
        'badge',
        'bg-light',
        'linear-gradient(135deg, #e20a7aff, #e60d97ff)',
        'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.3s"'
    ],
    [
        'TIÊN TIẾN',
        'bi bi-graph-up-arrow',
        'ML Risk Assessment',
        'Machine Learning dự đoán rủi ro với độ chính xác 95%, giúp nhà đầu tư ra quyết định thông minh dựa trên dữ liệu thực tế, không chỉ cảm tính.',
        'badge',
        'bg-light',
        'linear-gradient(135deg, #4ecdc4, #44a08d)',
        'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.4s"'
    ],
    [
        '',
        'bi bi-eye-fill',
        'Minh bạch tuyệt đối',
        'Lender xem được toàn bộ báo cáo AI về borrower trước khi đầu tư. Mọi thông tin đánh giá rủi ro đều được chia sẻ công khai.',
        '',
        '',
        'linear-gradient(135deg, #1d24ecff, #4229e2ff)',
        'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.5s"'
    ],
    [
        '',
        'bi bi-cash-stack',
        'Quyết định tức thì',
        'AI xử lý hồ sơ tự động 24/7, không cần chờ đợi nhân viên thẩm định. Quyết định cho vay trong vòng 24 giờ, giải ngân trong 1-3 ngày.',
        '',
        '',
        'linear-gradient(135deg, #22bf76ff, #22d8b4ff)',
        'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.6s"'
    ],
    [
        '',
        'bi bi-shield-shaded',
        'Bảo mật Bank-level',
        'Hệ thống bảo mật đa lớp với mã hóa SSL 256-bit, tuân thủ chuẩn bảo mật ngân hàng. Dữ liệu AI được mã hóa và bảo vệ tối đa.',
        '',
        '',
        'linear-gradient(135deg, #0423b1ff, #0324b8ff)',
        'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.7s"'
    ],
    [
        '',
        'bi bi-browser-chrome',
        'Smart Matching',
        'AI tự động ghép nối borrower và lender phù hợp dựa trên profile rủi ro, mục tiêu đầu tư và khả năng tài chính của từng bên.',
        '',
        '',
        'linear-gradient(135deg, #4ecdc4, #44a08d)',
        'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.8s"'
    ],
];

?>


<div class="container ">
    <div class="row p-5 " id="features">
        <div class="text-center">
            <h1 class="text-wrap fw-bold">Công nghệ AI thông minh - Khác biệt duy nhất</h1>
            <p class="mt-3 fs-5">VayVon.com là nền tảng P2P lending đầu tiên tại Việt Nam áp dụng AI Scoring và Machine Learning để tự động đánh giá tín dụng, mang lại trải nghiệm vượt trội cho cả người vay và nhà đầu tư</p>
        </div>
        <?php foreach ($mang_congnghe as $key => $valcn) { ?>
            <div class="col-12 col-md-4 mt-3 mt-md-3">
                <div class="position-relative cursor  <?php echo $valcn[5]  ?> px-4 py-5 text-center  rounded-4 shadow-sm border border-primary border-2 h-100 <?php echo $valcn[7]  ?>" <?php echo $valcn[8]  ?> style="border-color: #cfc7f8;">
                    <span class="position-absolute top-0 end-0   <?php echo $valcn[4]  ?> rounded-pill bg-warning text-white mt-2 me-2 small fw-bold">
                        <?php echo $valcn[0]  ?>
                    </span>
                    <div class=" rounded-circle d-inline-flex justify-content-center align-items-center mb-3 nut_botron" style="background: <?php echo $valcn[6]  ?>;">
                        <i class="<?php echo $valcn[1]  ?> text-white fs-1 icon-btrap"></i>
                    </div>
                    <h5 class="fw-bold mt-3 fs-4 text-wrap"><?php echo $valcn[2]  ?></h5>
                    <p class="text-muted small mb-0 mt-3 fs-5" style="line-height: 25px;">
                        <?php echo $valcn[3]  ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<?php
$mang_quytrinh = [
    ['1', ' AI TỰ ĐỘNG', 'bi bi-robot', 'AI Credit Scoring (30 giây)', 'Borrower nộp hồ sơ → AI phân tích 1000+ yếu tố → Tạo điểm tín dụng và báo cáo rủi ro tự động → Borrower nhận kết quả đánh giá ngay lập tức.', 'rgb(233, 236, 239)','wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.3s"'],
    ['2', ' MINH BẠCH', 'bi bi-eye-fill', 'Lender Review AI Report', 'Lender xem báo cáo AI chi tiết về borrower: điểm tín dụng, dự đoán rủi ro, lãi suất đề xuất → Ra quyết định đầu tư dựa trên dữ liệu AI thực tế.', 'rgb(233, 236, 239)','wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.4s"'],
    ['3', ' THÔNG MINH', 'bi bi-browser-chrome', 'AI Smart Matching', 'AI tự động ghép nối borrower-lender tối ưu dựa trên: mức rủi ro, khả năng tài chính, mục tiêu đầu tư → Tạo ra kết nối hoàn hảo.', 'rgb(233, 236, 239)','wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.5s"'],
    ['4', ' REAL TIME', 'bi bi-graph-up-arrow', 'ML Monitoring & Tracking', 'Machine Learning liên tục theo dõi và cập nhật rủi ro → Cảnh báo sớm nếu có bất thường → Cả hai bên luôn được thông tin minh bạch.', 'rgba(255, 255, 255, 1)','wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.6s"'],
]
?>
<div class="bg-light">
    <div class="container" id="it-work">
        <div class="row p-5">
            <div class="text-center">
                <h1 class="text-wrap fw-bold">Quy trình AI thông minh - Hoàn toàn tự động</h1>
                <p class="mt-3 fs-5">Hệ thống AI xử lý toàn bộ quy trình từ đánh giá tín dụng đến ghép nối đầu tư, mang lại hiệu quả tối ưu cho cả borrower và lender</p>
            </div>
            <!-- Card 1 -->
            <?php foreach ($mang_quytrinh as $key => $valqt) { ?>
                <div class="col-12 col-md-3 mt-4">
                    <div class="   text-center pt-5 pb-5 px-4 rounded-4 border border-2 h-100 position-relative cursor <?php echo $valqt[6]  ?> " <?php echo $valqt[7]  ?> style="border-color: #d6d2f7; background-color: <?php echo $valqt[5]  ?>;">
                        <!-- Số thứ tự -->
                        <span class="position-absolute top-0 start-50 translate-middle badge rounded-circle bg-primary text-white fw-bold d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                            <?php echo $valqt[0]  ?>
                        </span>
                        <!-- Tag -->
                        <span class="position-absolute top-0 end-0 mt-2 me-2 badge bg-primary text-white small fw-semibold">
                            <?php echo $valqt[1]  ?>
                        </span>
                        <!-- Icon -->
                        <div class="bg-light rounded-circle d-inline-flex justify-content-center align-items-center mb-3 nut_botron">
                            <i class="<?php echo $valqt[2]  ?> text-primary fs-1 icon-btrap"></i>
                        </div>
                        <!-- Title -->
                        <h6 class="fw-bold fs-4"> <?php echo $valqt[3]  ?></h6>
                        <!-- Content -->
                        <p class="text-muted small mt-2 fs-5" style="line-height: 28px;">
                            <?php echo $valqt[4]  ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>



<?php
$mang_toiuu = [
    [
        'bi bi-graph-up',
        'Lợi ích cho Lender (Nhà đầu tư)',
        'Giảm rủi ro 40%:',
        'AI dự đoán chính xác khả năng trả nợ',
        '100% Minh bạch:',
        'Xem toàn bộ báo cáo AI về borrower:',
        'Quyết định thông minh:',
        ' Dựa trên dữ liệu, không phải cảm tính',
        'Tiết kiệm thời gian:',
        ' AI làm tất cả, bạn chỉ cần quyết định',
        'Lãi suất lên đến 15%/năm',
        'Đầu tư từ 1 triệu VNĐ',
        'Rút vốn linh hoạt',
        'Đa dạng sản phẩm đầu tư',
        'Quản lý rủi ro tự động',
        ' <i class="bi bi-arrow-right-circle me-1"></i> Đăng ký làm Nhà đầu tư',
        'primary',
        'linear-gradient(135deg, #3838e5ff, #2864daff)',
         'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.3s"'

    ],
    [
        'bi bi-cash-coin',
        'Lợi ích cho Borrower (Người vay)',
        'Đánh giá trong 30 giây:',
        'AI chấm điểm tín dụng tức thì',
        'Lãi suất tối ưu: ',
        'AI tính toán mức lãi phù hợp với profile',
        'Báo cáo minh bạch:',
        'Hiểu rõ tại sao được/không được duyệt',
        'Matching thông minh: ',
        ' Kết nối với lender phù hợp nhất',
        'Lãi suất từ 8-12%/năm',
        'Vay từ 5-500 triệu VNĐ',
        'Không cần thế chấp',
        'Giải ngân trong 24h',
        'Trả góp linh hoạt 1-12 tháng',
        ' <i class="bi bi-arrow-right-circle me-1"></i> Đăng ký để vay vốn',
        'success',
        'linear-gradient(135deg, #4ecdc4, #44a08d)',
         'wow fadeInUp',
        'data-wow-duration="0.6s" data-wow-delay="0.6s"'

    ]
]

?>
<div class="container">
    <div class="row p-5 ">
        <div class="text-center">
            <h1 class="text-wrap fw-bold">AI mang lại lợi ích gì cho bạn?</h1>
            <p class="mt-3 fs-5">Công nghệ AI không chỉ tối ưu hóa quy trình mà còn mang lại giá trị thực sự cho cả người vay và nhà đầu tư thông qua dữ liệu minh bạch</p>
        </div>
        <?php foreach ($mang_toiuu as $key => $valtu) { ?>
            <div class="col-12 col-md-6 mt-3">
                <div class="bg-light rounded-4 p-4 shadow-sm card-hover h-100 cursor <?php echo $valtu[18]  ?>" <?php echo $valtu[19]  ?>>
                    <!-- Header -->
                    <div class="text-center mb-4">
                        <div class=" rounded-circle d-inline-flex justify-content-center align-items-center mb-3 nut_botron" style="background: <?php echo $valtu[17]  ?>;">
                            <i class="<?php echo $valtu[0]  ?> text-white fs-1 icon-btrap"></i>
                        </div>
                        <h5 class="fw-bold text-<?php echo $valtu[16]  ?> fs-4"><?php echo $valtu[1]  ?></h5>
                    </div>

                    <!-- Lợi ích chính -->
                    <div class="mb-4">
                        <div class="left-border-highlight px-3 py-2 mb-2 small d-flex align-items-center">
                            <i class="bi bi-shield-check text-primary me-2 fs-5"></i>
                            <span><strong><?php echo $valtu[2] ?></strong> <?php echo $valtu[3] ?></span>
                        </div>
                        <div class="left-border-highlight px-3 py-2 mb-2 small d-flex align-items-center">
                            <i class="bi bi-eye text-primary me-2 fs-5"></i>
                            <span><strong><?php echo $valtu[4] ?></strong> <?php echo $valtu[5] ?></span>
                        </div>
                        <div class="left-border-highlight px-3 py-2 mb-2 small d-flex align-items-center">
                            <i class="bi bi-bar-chart text-primary me-2 fs-5"></i>
                            <span><strong><?php echo $valtu[6] ?></strong> <?php echo $valtu[7] ?></span>
                        </div>
                        <div class="left-border-highlight px-3 py-2 mb-2 small d-flex align-items-center">
                            <i class="bi bi-clock text-primary me-2 fs-5"></i>
                            <span><strong><?php echo $valtu[8] ?></strong> <?php echo $valtu[9] ?></span>
                        </div>
                    </div>


                    <!-- Danh sách phụ -->
                    <ul class="list-unstyled small mb-4">
                        <li class="text-black-50" style="line-height:1.8"><i class="bi bi-check-lg me-2 text-success"></i><span class="fs-5"><?php echo $valtu[10]  ?></span></li>
                        <li class="text-black-50" style="line-height:1.8"><i class="bi bi-check-lg me-2 text-success"></i><span class="fs-5"><?php echo $valtu[11]  ?></span></li>
                        <li class="text-black-50" style="line-height:1.8"><i class="bi bi-check-lg me-2 text-success"></i><span class="fs-5"><?php echo $valtu[12]  ?></span></li>
                        <li class="text-black-50" style="line-height:1.8"><i class="bi bi-check-lg me-2 text-success"></i><span class="fs-5"><?php echo $valtu[13]  ?></span></li>
                        <li class="text-black-50" style="line-height:1.8"><i class="bi bi-check-lg me-2 text-success"></i><span class="fs-5"><?php echo $valtu[14]  ?></span></li>
                    </ul>

                    <!-- Nút -->
                    <div class="text-center">
                        <button href="#" class="btn btn-<?php echo $valtu[16] ?> fw-bold btn-lg">
                            <?php echo $valtu[15]  ?>
                        </button>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="bg-primary">
    <div class="container">
        <div class="row p-5">
            <div class="text-center text-white">
                <h1>Trải nghiệm AI P2P Lending đầu tiên tại Việt Nam</h1>
                <p class="mt-2 text-wrap fs-4">Tham gia cùng hàng nghìn người dùng đã tin tưởng công nghệ AI của VayVon.com để có những quyết định tài chính thông minh và minh bạch tuyệt đối.</p>
            </div>
            <div class="d-block d-md-none">
                <div class="col-12 col-md-6 mt-2">
                    <button class="btn nut-btn-invest w-100 rounded-pill">
                        <i class="bi bi-search text-black"></i> <span style="color: black;">Tìm dự án đầu tư</span>
                    </button>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <button class="btn nut-btn-register w-100 rounded-pill">
                        <i class="bi bi-person-plus-fill"></i> Đăng ký miễn phí
                    </button>
                </div>
            </div>
            <div class="d-none d-md-block">
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn btn-lg nut-btn-invest p-4 rounded-pill">
                        <i class="bi bi-search text-black"></i> <span style="color: black;">Tìm dự án đầu tư</span>
                    </button>
                    <button class="btn btn-lg nut-btn-register p-4 rounded-pill">
                        <i class="bi bi-person-plus-fill"></i> Đăng ký miễn phí
                    </button>
                </div>
            </div>


            <div style="height: 20px;"></div>
        </div>
    </div>
</div>
<script>
    function animateValue(element, start, end, duration) {
        let range = end - start;
        let startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            let progress = Math.min((timestamp - startTime) / duration, 1);
            element.innerText = Math.floor(progress * range + start);
            if (progress < 1) requestAnimationFrame(step);
        }

        requestAnimationFrame(step);
    }

    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll(".counter");
        counters.forEach(counter => {
            const end = parseInt(counter.getAttribute("data-target"));
            animateValue(counter, 0, end, 2000);
        });
    });
</script>