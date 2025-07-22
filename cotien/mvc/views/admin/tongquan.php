<style>
    /* Bắt đầu: Icon của phần vương miệng và kim cương  */
    .access-icon.vip {
        background-color: #eee8ff;
        color: #6f42c1;
    }

    /* Kết thúc: Icon của phần vương miệng và kim cương  */

    /* Bắt đầu: dự án hot */
    .project-card {
        overflow: hidden;
        transition: transform 0.2s;
        border-radius: .5rem;
    }

    .project-card:hover {
        transform: translateY(-5px);
    }

    .badge-float {
        top: .75rem;
        right: .75rem;
    }

    /* Kết thúc: dự án hot  */

    /* Phần xử lý cái thanh xử lý */
    .progress {
        height: 6px;
    }

    /*  Bắt đầu: nội dung đầu tự dự án vào đây */
    .avatar-circle {
        width: 40px;
        height: 40px;
        border-radius: 20%;
    }

    /* ----- CARD Phần đầu tiên  ----- */
    .metric-card {
        border-radius: 12px;
    }

    /* icon vuông màu */
    .metric-icon {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        /* không co icon */
    }
</style>


<div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
    <!---- khung -->
    <div class="col-12 col-md-12 d-flex flex-wrap">

        <!-- DỰ ÁN MỚI  -->
        <div class="container py-4">
            <h3><strong>Xin chào, John Trung</strong></h3>
            <p class="text-muted">Chào mừng trở lại với Cotien! Dưới đây là tổng quan hoạt động của bạn.</p>
            <div class="row row-cols-1 row-cols-md-4">

                <!-- Card 1 -->
                <div class="col mt-md-0 mt-2">
                    <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                        <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#7e46d9">
                            <i class="fa-solid fa-coins"></i>
                        </div>
                        <div class="flex-grow-1 text-center">
                            <div class="fw-bold"><span id="so_tien">0</span><br>VND</div>
                            <small class="text-muted d-block mt-1 text-secondary">Tổng đầu tư</small>
                        </div>
                        <div>
                            <span class="metric-change up ms-2 " id="phan_tram_dau_tu" style="color: #17c964;">
                                <i class="fa-solid fa-arrow-up "></i> 15%
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col mt-md-0 mt-2">
                    <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                        <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#17c964;">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="flex-grow-1 text-center">
                            <div class="fw-bold" id="loi_nhuan">0<br>VND
                            </div>
                            <small class="text-muted d-block mt-1 text-secondary">Lợi nhuận đã nhận</small>
                        </div>
                        <div>
                            <span class="metric-change up ms-1 " style="color: #17c964;">
                                <i class="fa-solid fa-arrow-up " id="phan_tram_loi_nhuan"></i> 8%
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col mt-md-0 mt-2">
                    <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                        <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#ffa41b;">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        <div class="flex-grow-1 text-center">
                            <div class="fw-bold" id="tong_dau_tu">0
                            </div>
                            <small class="text-muted d-block mt-1 text-secondary">Dự án đã <br> đầu tư</small>
                        </div>
                        <div>
                            <span class="metric-change up ms-2 text-danger " id="phan_tram_du_an">
                                0%
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col mt-md-0 mt-2">
                    <div class="p-3 d-flex align-items-center metric-card h-100 bg-white shadow-sm">
                        <div class="metric-icon d-flex justify-content-center align-items-center flex-shrink-0 text-white" style="background:#ffa41b;">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                        <div class="flex-grow-1 text-center">
                            <div class="fw-bold" id="so_du">0<br>VND
                            </div>
                            <small class="text-muted d-block mt-1 text-secondary">Số dư ví</small>
                        </div>
                        <div>
                            <span class="metric-change up ms-2 text-danger ">
                                <i class="fa-solid fa-arrow-down " id="phan_tram_so_du"></i> 5%
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biểu đồ cột -->
            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">Danh mục đầu tư</h3>
                        <a href="#" class="btn btn-lg fw-bold" style="border-radius: 10px; border: 1px #7e46d9 solid; color:#7e46d9">Xem tất cả</a>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <canvas id="investmentBarChart"></canvas>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-center">
                            <p><span class="legend-color" style="background:#6f42c1;"></span> Vay vốn (10 triệu)</p>
                            <p><span class="legend-color" style="background:#28a745;"></span> Cổ phần (8.75 triệu)</p>
                            <p><span class="legend-color" style="background:#fd7e14;"></span> Phần thưởng (6.25 triệu)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bắt đầu phần dự án gần đây -->
        <div class="container py-4">
            <div class="card shadow-sm" style="border-radius: 12px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0 fw-bold">Đầu tư gần đây</h3>
                        <a href="#" class="btn btn-lg fw-bold" style="border-radius: 10px; border: 1px #7e46d9 solid; color:#7e46d9">Xem tất cả</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr class="text-secondary">
                                    <th>Dự án</th>
                                    <th>Loại</th>
                                    <th>Số tiền</th>
                                    <th>Ngày</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dòng 1 -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle bg-primary fw-bold d-flex justify-content-center align-items-center text-white me-2">TI</div>
                                            <div>
                                                <div class="project-name fw-bold">Tech Innovation</div>
                                                <div class="fs-6 text-secondary">Công nghệ</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Công nghệ</td>
                                    <td>10,000,000 VND</td>
                                    <td>15/05/2025</td>
                                    <td>Đang hoạt động</td>
                                    <td><button class="btn btn-outline-purple btn-sm fw-bold" style="border-radius: 8px;border: 1px solid #6f42c1;color: #6f42c1;">Xem</button></td>
                                </tr>

                                <!-- Dòng 2 -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle bg-success fw-bold d-flex justify-content-center align-items-center text-white me-2">GF</div>
                                            <div>
                                                <div class="project-name fw-bold">Green Farm</div>
                                                <div class="fs-6 text-secondary">Nông nghiệp</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Nông nghiệp</td>
                                    <td>5,000,000 VND</td>
                                    <td>10/05/2025</td>
                                    <td>Đang hoạt động</td>
                                    <td><button class="btn btn-outline-purple btn-sm fw-bold" style="border-radius: 8px;border: 1px solid #6f42c1;color: #6f42c1;">Xem</button></td>
                                </tr>

                                <!-- Dòng 3 -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle bg-warning fw-bold d-flex justify-content-center align-items-center text-white me-2">CS</div>
                                            <div>
                                                <div class="project-name fw-bold">Coffee Shop</div>
                                                <div class="fs-6 text-secondary">F&B</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>F&B</td>
                                    <td>2,000,000 VND</td>
                                    <td>05/05/2025</td>
                                    <td>Hoàn thành</td>
                                    <td><button class="btn btn-outline-purple btn-sm fw-bold" style="border-radius: 8px;border: 1px solid #6f42c1;color: #6f42c1;">Xem</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kết thúc phần dự án gần đây -->

        <!-- BẮT ĐẦU: PHẦN NỘI DUNG DỰ ÁN HOT  -->
        <div class="container py-4">
            <div class="hot-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Dự án hot</h3>
                    <a href="#" class="btn btn-lg fw-bold" style="border-radius: 10px; border: 1px #7e46d9 solid; color:#7e46d9">Xem tất cả</a>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card project-card shadow-sm">
                            <!-- Banner + Badge -->
                            <div class="project-banner d-flex justify-content-center align-items-center position-relative text-white " style="background: #7e46d9; height: 180px;">
                                <div class="  m-0" style="font-size: 122px;">AP</div>
                                <span class="badge text-white badge-float position-absolute bg-primary" style="border-radius: 20px;">CỔ PHẦN</span>
                            </div>
                            <!-- Nội dung -->
                            <div class="card-body">
                                <h5 class="card-title mb-1">AI Platform</h5>
                                <p class="text-muted mb-3">Nền tảng AI doanh nghiệp Việt Nam</p>
                                <!-- progrss -->
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-primary" style="width: 78%"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-3 small fw-semibold">
                                    <span>390,000,000 VND</span>
                                    <span>78%</span>
                                </div>
                                <!-- hàng icon -->
                                <div class="d-flex justify-content-between text-muted small mb-4">
                                    <span><i class="bi bi-people me-1"></i>156 nhà đầu tư</span>
                                    <span><i class="bi bi-clock me-1"></i>15 ngày còn lại</span>
                                </div>
                                <!-- nút -->
                                <a href="#" class="btn btn-detail w-100 text-white fw-semibold" style="background: #7e46d9;">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card project-card shadow-sm">
                            <!-- Banner + Badge -->
                            <div class="project-banner d-flex justify-content-center align-items-center position-relative text-white " style="background: #10B981; height: 180px;">
                                <div class="  m-0" style="font-size: 122px;">MD</div>
                                <span class="badge text-white badge-float position-absolute" style="border-radius: 20px;">PHẦN THƯỞNG</span>
                            </div>
                            <!-- Nội dung -->
                            <div class="card-body">
                                <h5 class="card-title mb-1">Medtech Device</h5>
                                <p class="text-muted mb-3">Thiết bị y tế thông minh cho gia đình</p>
                                <!-- progress -->
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-primary" style="width: 78%"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-3 small fw-semibold">
                                    <span>135,000,000 VND</span>
                                    <span>45%</span>
                                </div>
                                <!-- hàng icon -->
                                <div class="d-flex justify-content-between text-muted small mb-4">
                                    <span><i class="bi bi-people me-1"></i>156 nhà đầu tư</span>
                                    <span><i class="bi bi-clock me-1"></i>15 ngày còn lại</span>
                                </div>
                                <!-- nút -->
                                <a href="#" class="btn btn-detail w-100 text-white fw-semibold" style="background: #7e46d9;">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card project-card shadow-sm">
                            <div class="project-banner d-flex justify-content-center align-items-center position-relative text-white " style="background: #F59E0B; height: 180px;">
                                <div class="  m-0" style="font-size: 122px;">FF</div>
                                <span class="badge text-white badge-float position-absolute bg-success" style="border-radius: 20px;">VAY VỐN</span>
                            </div>
                            <!-- Nội dung -->
                            <div class="card-body">
                                <h5 class="card-title mb-1">Fusion Food</h5>
                                <p class="text-muted mb-3">Chuỗi nhà hàng ẩm thực fusion</p>
                                <!-- progress -->
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-primary" style="width: 78%"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-3 small fw-semibold">
                                    <span>390,000,000 VND</span>
                                    <span>78%</span>
                                </div>
                                <!-- hàng icon -->
                                <div class="d-flex justify-content-between text-muted small mb-4">
                                    <span><i class="bi bi-people me-1"></i>156 nhà đầu tư</span>
                                    <span><i class="bi bi-clock me-1"></i>15 ngày còn lại</span>
                                </div>
                                <!-- nút -->
                                <a href="#" class="btn btn-detail w-100 text-white fw-semibold" style="background: #7e46d9;">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- KẾT THÚC: PHẦN NỘI DUNG DỰ ÁN HOT  -->

        <!-- BẮT ĐẦU: PHẦN NỘI DUNG CÓ VƯƠNG MIENGJ VÀ KIM CƯƠNG  -->
        <div class="container py-4">
            <div class="d-md-flex justify-content-between my-2">
                <div>
                    <h5 class="fw-bold mb-3">Quyền truy cập của bạn</h5>
                </div>
                <div>
                    <a href="#" class="btn btn-lg fw-bold" style="border-radius: 10px; border: 1px #7e46d9 solid; color:#7e46d9">Nâng Cấp</a>
                </div>
            </div>
            <div class="position-relative d-flex justify-content-between flex-column flex-lg-row gap-3">
                <!-- Thẻ Premium -->
                <div class="col access-card bg-white card-outline-left flex-grow-1 shadow-sm d-md-flex justify-content-center p-3 position-relative gap-2" style="border-radius: 12px;border-left: 4px solid #fcb900;">
                    <div class="access-icon bg-opacity-50 bg-warning d-flex justify-content-center align-items-center flex-shrink-0 text-warning " style="border-radius: 25px;width: 48px;height: 48px;">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="w-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">3 dự án <strong>Premium</strong></h6>
                            <span class="badge badge-premium bg-warning px-2 py-1 text-white " style="border-radius: 12px;">Premium</span>
                        </div>
                        <small class="text-muted">Quyền truy cập đến hết ngày <strong>04/07/2025</strong></small>
                        <div class="progress progress-sm my-2 rounded-pill">
                            <div class="progress-bar progress-bar-purple rounded-pill" style="width: 60%;background-color:#6f42c1 ;"></div>
                        </div>
                        <small class="text-muted">3/5 dự án</small>
                    </div>
                </div>
                <!-- Thẻ VIP -->
                <div class="col access-card bg-white card-outline-right flex-grow-1 shadow-sm d-md-flex justify-content-center p-3 position-relative gap-2" style="border-radius: 12px;border-left: 4px solid #6f42c1;">
                    <div class="access-icon d-flex justify-content-center align-items-center vip flex-shrink-0" style="border-radius: 25px;width: 48px;height: 48px;">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="w-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">7 tài liệu <strong>VIP</strong> đã mở khóa</h6>
                            <span class="badge badge-vip px-2 py-1 text-white" style="background-color: #6f42c1;border-radius: 12px;">VIP</span>
                        </div>
                        <small class="text-muted">Các tài liệu phân tích chuyên sâu, dữ liệu tài chính</small>
                        <div class="mt-2">
                            <button class="btn btn-outline-primary btn-sm rounded-pill">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- KẾT THÚC: PHẦN NỘI DUNG CÓ VƯƠNG MIENGJ VÀ KIM CƯƠNG  -->

        <style>
            .timeline-wrapper {
                border-radius: 8px;
                padding: 24px;

            }

            .timeline {
                border-left: 2px solid #e0e0e0;
                padding-left: 30px;
                position: relative;
            }

            .timeline-item {
                position: relative;
                margin-bottom: 30px;
            }

            .timeline-item:last-child {
                margin-bottom: 0;
            }

            .timeline-icon {
                position: absolute;
                left: -44px;
                top: 0;
                width: 26px;
                height: 26px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 14px;
            }

            .purple {
                background-color: #6f42c1;
            }

            .green {
                background-color: #198754;
            }

            .orange {
                background-color: #fd7e14;
            }

            .blue {
                background-color: #0d6efd;
            }

            .yellow {
                background-color: #ffc107;
                color: #000;
            }

            .timeline-title {
                font-weight: 600;
            }

            .timeline-date {
                font-size: 0.875rem;
                color: #6c757d;
            }
        </style>

        <div class="container my-5">
            <div class="timeline-wrapper bg-white shadow-sm">
                <h5 class="fw-bold mb-4">Hoạt động gần đây</h5>
                <div class="timeline">

                    <!-- Item 1 -->
                    <div class="timeline-item">
                        <div class="timeline-icon purple">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="timeline-title">Đầu tư vào Tech Innovation</div>
                        <div>Bạn đã đầu tư 10,000,000 VND vào dự án Tech Innovation</div>
                        <div class="timeline-date mt-1">15/05/2025 - 10:30</div>
                    </div>

                    <!-- Item 2 -->
                    <div class="timeline-item">
                        <div class="timeline-icon green">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="timeline-title">Nạp tiền vào ví</div>
                        <div>Bạn đã nạp 20,000,000 VND vào ví Cotien</div>
                        <div class="timeline-date mt-1">10/05/2025 - 14:15</div>
                    </div>

                    <!-- Item 3 -->
                    <div class="timeline-item">
                        <div class="timeline-icon orange">
                            <i class="fas fa-lock-open"></i>
                        </div>
                        <div class="timeline-title">Mở khóa tài liệu</div>
                        <div>Bạn đã mở khóa tài liệu VIP của dự án Green Farm</div>
                        <div class="timeline-date mt-1">05/05/2025 - 09:45</div>
                    </div>

                    <!-- Item 4 -->
                    <div class="timeline-item">
                        <div class="timeline-icon blue">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="timeline-title">Tư vấn với chuyên gia</div>
                        <div>Bạn đã đặt lịch tư vấn marketing với chuyên gia Nguyễn Hoàng Minh</div>
                        <div class="timeline-date mt-1">03/05/2025 - 14:30</div>
                    </div>

                    <!-- Item 5 -->
                    <div class="timeline-item">
                        <div class="timeline-icon yellow">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="timeline-title">Nhận lợi nhuận</div>
                        <div>Bạn đã nhận 1,750,000 VND lợi nhuận từ dự án Coffee Shop</div>
                        <div class="timeline-date mt-1">01/05/2025 - 16:20</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end khung   -->
</div>

<!-- ChartJS -->
<script>
    const ctx = document.getElementById('investmentBarChart').getContext('2d');
    const investmentBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Vay vốn', 'Cổ phần', 'Phần thưởng'],
            datasets: [{
                label: 'Giá trị đầu tư (VND)',
                data: [10000000, 8750000, 6250000],
                backgroundColor: ['#6f42c1', '#28a745', '#fd7e14'],
                borderRadius: 6,
                barThickness: 40
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: value => value.toLocaleString() + ' VND'
                    }
                }
            }
        }
    });
</script>
<!-- <script>
    console.log()
</script> -->
<script>
    function tongquan() {
        fetch('/cotien/admin/dashboard')
            .then(response => response.json()) // Chuyển phản hồi từ server (JSON string) thành object JS
            .then(data => {
                const d = data.data;
                console.log("data:", d); 
                document.getElementById("tong_dau_tu").innerHTML = d.tong_dau_tu;
                document.getElementById("so_tien").innerHTML = d.so_tien;
                document.getElementById("so_du").innerHTML = d.so_tien;
            })
    }


    // Gọi khi trang load
    document.addEventListener("DOMContentLoaded", tongquan);
</script>