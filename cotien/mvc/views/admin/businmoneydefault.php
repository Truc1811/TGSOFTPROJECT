<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<style>
  .step-active {
    background-color: #f59e0b;
    color: white;
  }

  .step-section {
    display: none;
  }

  .step-section.active {
    display: block;
  }

  .card-option {
    border: 2px solid #ccc;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .card-option:hover,
  .card-option.active {
    border-color: #198754;
    box-shadow: 0 0 10px rgba(25, 135, 84, 0.3);
  }

  .card-custom {
    border-radius: 16px;
    max-width: 360px;
  }

  .icon-circle {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, #f975c3, #ff9f68);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 28px;
    margin-bottom: 16px;
  }

  .check-list li {
    list-style: none;
    display: flex;
    align-items: start;
    margin-bottom: 8px;
  }

  .check-list i {
    color: #2ecc71;
    margin-right: 8px;
  }

  .tag-box {
    border-left: 4px solid #8b5cf6;
    background-color: #f9f9f9;
    padding: 12px 16px;
    border-radius: 8px;
    margin-top: 16px;
    font-size: 14px;
  }

  .step-progress {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
  }

  .step-circle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background-color: #e5e7eb;
    color: #374151;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.5s ease, color 0.5s ease;
    position: relative;
    z-index: 1;
  }

  .step-circle:first-child::before {
    display: none;
  }

  .step-circle.active {
    background: linear-gradient(90deg, #f97316, #f59e0b);
    color: white;
  }

  .btn-next{
    background: linear-gradient(90deg, #f97316, #f59e0b);
    color: white !important;
  }

  .step-circle.completed {
    background-color: #10b981;
    color: white;
  }

  .step-line.short-line {
    width: 50px;
    height: 4px;
    background-color: #e5e7eb;
    margin-top: 4px;
  }

  .box-suggestion {
    background-color: #fff7ed;
    border: 1px solid #fcd34d;
    padding: 15px;
    border-radius: 8px;
    font-size: 14px;
  }

  .progress-bar {
    background-color: #f97316 !important;
  }

  .form-control,
  .form-select {
    font-size: 14px;
  }

  .custom-banner {
    background: linear-gradient(90deg, #00db53, #00c8d0, #4299ff);
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    font-size: 14px;
  }

  .custom-banner .icon {
    font-size: 18px;
    margin-right: 10px;
  }

  .custom-banner .title {
    font-weight: bold;
    font-size: 16px;
    margin-right: 8px;
  }

  .custom-banner .desc {
    font-size: 13px;
    opacity: 0.9;
  }

  .checkmark-icon {
  position: absolute;
  top: 8px;
  right: 8px;
  font-size: 20px;
  color: #198754; /* màu xanh lá */
  display: none;
  z-index: 10;
}

.card-option.active .checkmark-icon {
  display: block;
}
</style>

<form class method="post" enctype="multipart/form-data" action>
  <div class="p-6 col-md-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height: 86vh">
    <!---- khung -->

    <div id="titleSection" class="w-100 text-white py-5 px-4 mt-3"
      style="background: linear-gradient(90deg, #6b3eff, #a065ff)">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="fw-bold mb-2">Tạo chiến dịch<br />gọi
              vốn</h2>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0">
              Chọn loại hình gọi vốn phù hợp với dự án của bạn...
            </p>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.querySelectorAll('.card-option').forEach(card => {
        card.addEventListener('click', function () {
          // Lấy loại gọi vốn đã chọn
          const type = this.getAttribute('data-type');
          document.getElementById('selectedType').textContent = type;

          // Ẩn phần tiêu đề màu tím
          document.getElementById('titleSection').style.display = 'none';

          // Ẩn step1, hiện step2
          document.getElementById('step1').classList.add('d-none');
          document.getElementById('step2').classList.remove('d-none');
          document.getElementById('step3').classList.remove('d-none');
          document.getElementById('step4').classList.remove('d-none');
        });
      });
    </script>
    <!-- Step 1: Chọn hình thức -->
    <div class="container py-5 step-section active" id="step1">
      <div class="row g-4">
        <!-- Card 1 -->
        <!-- Card 1 -->
                <div class="col-md-4">
                    <div
                        class="card card-custom p-4 d-flex flex-column card-option"
                        data-type="loan">
                        <i class="bi bi-check-circle-fill checkmark-icon"></i>
                        <div class="icon-circle mx-auto">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h5 class="text-center fw-bold mb-2">Vay vốn
                            (Loan-based)</h5>
                        <p class="text-center text-muted mb-3">
                            Vay tiền từ cộng đồng với lãi suất cố định. Không
                            mất quyền sở hữu
                            dự án.
                        </p>
                        <ul class="check-list ps-0">
                            <li><i class="fas fa-check-circle"></i> Lãi suất
                                cạnh tranh</li>
                            <li>
                                <i class="fas fa-check-circle"></i> Thời hạn vay
                                linh hoạt
                            </li>
                            <li><i class="fas fa-check-circle"></i> Không chia
                                sẻ cổ phần</li>
                            <li><i class="fas fa-check-circle"></i> Thủ tục đơn
                                giản</li>
                        </ul>
                        <div class="tag-box mt-auto">
                            <div class="text-muted">Phù hợp cho:</div>
                            <div><strong>SME, doanh nghiệp có doanh thu ổn
                                    định</strong></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div
                        class="card card-custom p-4 d-flex flex-column card-option"
                        data-type="loan">
                        <i class="bi bi-check-circle-fill checkmark-icon"></i>
                        <div
                            class="icon-circle mx-auto"
                            style="background: linear-gradient(135deg, #6bcb77, #4d96ff)">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="text-center fw-bold mb-2">Góp vốn
                            (Equity-based)</h5>
                        <p class="text-center text-muted mb-3">
                            Nhà đầu tư góp vốn và nhận cổ phần dự án. Phù hợp
                            với startup cần
                            tăng trưởng.
                        </p>
                        <ul class="check-list ps-0">
                            <li><i class="fas fa-check-circle"></i> Gọi vốn
                                lớn</li>
                            <li><i class="fas fa-check-circle"></i> Đồng hành
                                lâu dài</li>
                            <li><i class="fas fa-check-circle"></i> Tăng tính
                                minh bạch</li>
                            <li><i class="fas fa-check-circle"></i> Phát triển
                                bền vững</li>
                        </ul>
                        <div class="tag-box mt-auto">
                            <div class="text-muted">Phù hợp cho:</div>
                            <div>
                                <strong>Startup, doanh nghiệp tăng trưởng
                                    </strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div
                        class="card card-custom p-4 d-flex flex-column card-option"
                        data-type="loan">
                        <i class="bi bi-check-circle-fill checkmark-icon"></i>
                        <div
                            class="icon-circle mx-auto"
                            style="background: linear-gradient(135deg, #fdc830, #f37335)">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h5 class="text-center fw-bold mb-2">Đóng góp
                            (Donation-based)</h5>
                        <p class="text-center text-muted mb-3">
                            Nhận đóng góp từ cộng đồng mà không cần hoàn trả
                            hoặc chia cổ
                            phần.
                        </p>
                        <ul class="check-list ps-0">
                            <li><i class="fas fa-check-circle"></i> Không cần
                                trả lãi</li>
                            <li><i class="fas fa-check-circle"></i> Dễ tiếp cận
                                cộng đồng</li>
                            <li><i class="fas fa-check-circle"></i> Linh
                                hoạt</li>
                            <li><i class="fas fa-check-circle"></i> Phù hợp phi
                                lợi nhuận</li>
                        </ul>
                        <div class="tag-box mt-auto">
                            <div class="text-muted">Phù hợp cho:</div>
                            <div><strong>Dự án xã hội, từ thiện, cộng
                                    đồng</strong></div>
                        </div>
                    </div>
                </div>
      </div>

      <!-- Nút Tiếp tục -->
      <div class="text-end mt-4">
        <button class="btn btn-success" id="nextBtn" disabled>
          Tiếp tục →
        </button>
      </div>
    </div>

    <div class="container py-5 step-section" id="loanStep">
      <div class="container-fluid mt-0 p-0">
        <div class="custom-banner">
          <i class="fas fa-bullseye icon"></i>
          <div>
            <div class="title">WORKING VERSION - REWARD CAMPAIGN
              FORM</div>
            <div class="desc">All issues fixed - Progress
              calculation, buttons
              working, modern notifications</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <div class="d-flex  mt-3 mb-4 step-progress">
            <div class="step-circle active">1</div>
            <div class="step-line short-line"></div>
            <div class="step-circle">2</div>
            <div class="step-line short-line"></div>
            <div class="step-circle">3</div>
            <div class="step-line short-line"></div>
            <div class="step-circle">4</div>
          </div>
        </div>
        <div class="container py-4 ">
          <div class="container py-4" id="loan">
            <h3 class="fw-bold">Tạo Chiến Dịch Gọi Vốn Phần
              Thưởng</h3>
            <p class="text-muted">Tạo chiến dịch gọi vốn với các
              phần thưởng hấp
              dẫn cho nhà đầu tư</p>

            <!-- Step Indicator -->
            <!-- Step Indicator -->

            <div class="row">
                <div class="col-lg-8">
                    <div id="step-1">

                    <div class="container mt-5">
                        <h5 class="mb-4 fw-bold">Bước 1: Thông tin cơ bản</h5>

                        <div class="row g-3">
                        <!-- Tên dự án -->
                        <div class="col-md-6">
                            <label for="projectName" class="form-label fw-semibold">Tên dự án *</label>
                            <input type="text" class="form-control" id="projectName" placeholder="Nhập tên dự án">
                        </div>

                        <!-- Danh mục -->
                        <div class="col-md-6">
                            <label for="category" class="form-label fw-semibold">Danh mục *</label>
                            <select class="form-select" id="category">
                            <option selected disabled>Chọn danh mục</option>
                            <option>Công nghệ</option>
                            <option>Giáo dục</option>
                            <option>Thời trang</option>
                            <!-- Thêm danh mục khác nếu cần -->
                            </select>
                        </div>

                        <!-- Slogan -->
                        <div class="col-12">
                            <label for="slogan" class="form-label fw-semibold">Slogan dự án *</label>
                            <input type="text" class="form-control" id="slogan" placeholder="Nhập slogan">
                        </div>

                        <!-- Mô tả -->
                        <div class="col-12">
                            <label for="description" class="form-label fw-semibold">Mô tả chi tiết dự án *</label>
                            <textarea class="form-control" id="description" rows="4" placeholder="Nhập mô tả"></textarea>
                        </div>

                        <!-- Mục tiêu gọi vốn -->
                        <div class="col-md-6">
                            <label for="fundingGoal" class="form-label fw-semibold">Mục tiêu gọi vốn (VND) *</label>
                            <input type="text" class="form-control" id="fundingGoal" placeholder="Ví dụ: 1.000.000.000">
                        </div>

                        <!-- Thời gian chiến dịch -->
                        <div class="col-md-6">
                            <label for="campaignDuration" class="form-label fw-semibold">Thời gian chiến dịch (ngày)
                            *</label>
                            <select class="form-select" id="campaignDuration">
                            <option>7 ngày</option>
                            <option>15 ngày</option>
                            <option selected>30 ngày</option>
                            <option>60 ngày</option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <form class="">

                        <div class="d-flex justify-content-start mt-4 container">
                        
                                <button type="button" class="btn btn-outline-secondary">💾
                            Lưu nháp</button>
                            <br>
                        
                        <button type="button" class="btn btn-next ms-3" id="btnToStep2" style="">Tiếp tục
                            →</button>
                        </div>
                    </form>
                    </div>
                    <div class="d-none" id="step-2">
                    <!-- Step 2 - Thiết lập phần thưởng (Ẩn/Hiện theo bước) -->
                    <div class=" py-4 ">
                        <div class="container mt-5">
                        <h5 class="mb-3 fw-bold">Bước 2: Thiết lập phần thưởng</h5>

                        <div class="reward-package border rounded p-3 mb-3" data-index="1">
                        <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="fw-semibold mb-0">Gói thưởng #1</h6>
        <!-- <button type="button" class="btn btn-sm btn-danger btn-remove-package">
        <i class="bi bi-trash"></i> Xóa
        </button> -->
    </div>

                            <div class="row g-3">
                            <!-- Mức đầu tư tối thiểu -->
                            <div class="col-md-6">
                                <label for="minInvestment1" class="form-label">Mức đầu tư tối thiểu (VND)</label>
                                <input type="text" class="form-control" id="minInvestment1" placeholder="100,000">
                            </div>

                            <!-- Số lượng giới hạn -->
                            <div class="col-md-6">
                                <label for="limit1" class="form-label">Số lượng giới hạn</label>
                                <input type="text" class="form-control" id="limit1" placeholder="Ví dụ: 100">
                            </div>

                            <!-- Mô tả phần thưởng -->
                            <div class="col-12">
                                <label for="description1" class="form-label">Mô tả phần thưởng</label>
                                <textarea class="form-control" id="description1" rows="3"
                                placeholder="Nhập mô tả phần thưởng"></textarea>
                            </div>
                            </div>
                        </div>

                        <!-- Nút thêm gói -->
                        
                        </div>
                        <div class="container">
                            <button type="button" class="btn btn-primary" id="addRewardBtn">
                            <i class="bi bi-plus"></i> Thêm gói thưởng
                        </button>
                        <hr>
                        </div>
                        
                        <form class="container">
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <button type="button" class="btn btn-secondary" id="btnBackToStep1">
                                Quay lại
                            </button>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary">
                                    💾 Lưu nháp
                                </button>
                                <button type="button" class="btn btn-next ms-3" id="btnToStep3">
                                    Tiếp tục →
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>

                    <div class="d-none" id="step-3">
                    <!-- Step 2 - Thiết lập phần thưởng (Ẩn/Hiện theo bước) -->
                    <div class=" py-4 ">
                        <!-- form step 3 -->
                        <h5 class="fw-bold mb-3 text-uppercase">Bước 3: Hình ảnh và tài liệu</h5>
                        <!-- Hình ảnh -->
                        <div class="mb-4">
                        <label class="form-label fw-bold text-danger">Hình ảnh *</label>
                        <p class="text-muted small mb-2">Bạn có thể tải nhiều ảnh minh họa cho dự án của mình.</p>
                        <div
                            class="border border-2 border-danger border-dashed rounded-3 p-4 text-center bg-light position-relative">
                            <i class="bi bi-image fs-1 text-danger"></i>
                            <p class="fw-bold mt-2 mb-1">Kéo thả hoặc click để tải hình ảnh</p>
                            <p class="text-muted small">Định dạng JPG, PNG, WebP. Tối đa 10MB mỗi ảnh.</p>
                            <input type="file" class="form-control mt-3" multiple accept="image/*">
                        </div>
                        </div>
                        <!-- Video giới thiệu -->
                        <div class="mb-4">
                        <label class="form-label fw-bold text-danger">Video giới thiệu (tuỳ chọn)</label>
                        <p class="text-muted small mb-2">Đường dẫn video từ YouTube, Vimeo hoặc các nền tảng khác.</p>
                        <input type="url" class="form-control" placeholder="https://youtube.com/watch?v=...">
                        </div>

                        <!-- Tài liệu -->
                        <div class="mb-4">
                        <label class="form-label fw-bold text-primary">Tài liệu *</label>
                        <p class="text-muted small mb-2">Ví dụ: Business plan, tài liệu kỹ thuật, báo cáo tài chính...</p>
                        <div
                            class="border border-2 border-primary border-dashed rounded-3 p-4 text-center bg-light position-relative">
                            <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                            <p class="fw-bold mt-2 mb-1">Kéo thả hoặc click để tải tài liệu</p>
                            <p class="text-muted small">PDF, DOCX, PPTX... Tối đa 25MB mỗi file</p>
                            <input type="file" class="form-control mt-3" multiple accept=".pdf,.doc,.docx,.ppt,.pptx">
                        </div>
                        </div>
                    
                    </div>

                    
                    <form class="container">
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <button type="button" class="btn btn-secondary" id="btnBackToStep2">
                                Quay lại
                            </button>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary">
                                    💾 Lưu nháp
                                </button>
                                <button type="button" class="btn btn-next ms-3" id="btnToStep4">
                                    Tiếp tục →
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="d-none" id="step-4">
                    <h5 class="fw-bold">Bước 4: Xem lại và
                        gửi</h5>
                    <p class="mb-2 text-muted">Vui lòng hoàn
                        thành các bước trước để xem thông tin
                        tổng quan.</p>

                    <!-- Thông báo -->
                    <div class="alert alert-primary d-flex align-items-start" role="alert">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <div>
                        <strong>Lưu ý quan
                            trọng:</strong><br>
                        Sau khi gửi, dự án sẽ được đội ngũ
                        chuyên gia review trong vòng
                        <strong>2-3 ngày làm việc</strong>.
                        Chúng tôi sẽ liên hệ với bạn qua
                        email để thông báo kết quả.
                        </div>
                    </div>

                    <!-- Nút điều hướng -->
                    <div class="d-flex justify-content-between mt-4">
                        <form class="container">
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <button type="button" class="btn btn-secondary" id="btnBackToStep3">
                                    <i class="bi bi-arrow-left-circle me-1"></i>Quay lại
                                </button>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" onclick="saveDraft()" class="btn btn-outline-secondary">
                                    💾 Lưu nháp
                                </button>
                        
                                <button type="button" class="btn btn-warning text-white ms-3" id="btnToStep5">
                                    Hoàn thành <i class="bi bi-send-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                        </form>


                    </div>
                    </div>

                </div>

              <div class="col-lg-4">
                <div class="mb-3">
                  <div class="border p-3 rounded">
                    <h6 class="text-muted mb-2 text-center fw-bold fs-4">📈 Tiến
                      độ</h6>
                    <div id="progress-text" class="fw-bold text-warning fs-3 text-center">25%</div>
                    <span class="d-flex justify-content-center align-items-center">
                        <small>Hoàn Thành</small>
                    </span>
                    <div class="progress mt-2" style="height: 6px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%"></div>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="border p-3 rounded text-center">
                    <h6 id="step-title" class="text-muted"><i style="color: orangered;" class="bi bi-geo-alt-fill"></i> Bước 1:</h6>
                    <p id="step-desc" class="mb-0">Nhập
                      thông tin cơ bản về dự án của
                      bạn</p>
                  </div>
                </div>

                <div class="box-suggestion mt-3">
                  <h6 class="text-danger mb-2"><i  style="color: orangered;" class="bi bi-lightbulb-fill"></i> Gợi ý</h6>
                  <ul class="ps-1 list-unstyled">
                    <li>✔ Mô tả rõ ràng về sản phẩm/dịch
                      vụ</li>
                    <li>✔ Thiết lập phần thưởng hấp dẫn</li>
                    <li>✔ Tải lên hình ảnh chất lượng cao</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end khung   -->
    </div>
   
</form>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Bắt sự kiện chọn loại thẻ
    let selectedType = "";

    $(".card-option").click(function () {
      $(".card-option").removeClass("active");
      $(this).addClass("active");
      selectedType = $(this).data("type");
      $("#nextBtn").prop("disabled", false);
    });

    $("#nextBtn").click(function (e) {
      e.preventDefault();
      $(".step-section").removeClass("active");
      $("#" + selectedType + "Step").addClass("active");

      var titleSection = document.getElementById("titleSection");
      if (titleSection) {
        titleSection.style.display = "none";
      }
    });

    function goBack() {
      $(".step-section").removeClass("active");
      $("#step1").addClass("active");
      $(".card-option").removeClass("active");
      $("#nextBtn").prop("disabled", true);
    }

    // Toàn bộ logic chuyển bước
    const step1 = document.querySelector("#step-1");
    const step2 = document.querySelector("#step-2");
    const step3 = document.querySelector("#step-3");
    const step4 = document.querySelector("#step-4");

    const btnNext = document.querySelector("form .btn-next");
    const btnBack = document.getElementById("btnBackToStep1");
    const btnNextStep2 = document.getElementById("btnToStep3");
    const btnBackFromStep3 = document.getElementById("btnBackToStep2");
    const btnNextStep3 = document.getElementById("btnToStep4");
    const btnBackFromStep4 = document.getElementById("btnBackToStep3");
    const btnNextStep4 = document.getElementById("btnToStep5");

    const steps = document.querySelectorAll(".step-circle");
    const progressText = document.querySelector(".text-warning");
    const progressBar = document.querySelector(".progress-bar");

    const infoBox = document.querySelector(".col-lg-4 .border:nth-child(2) h6");
    const descBox = document.querySelector(".col-lg-4 .border:nth-child(2) p");

    const stepTitleEl = document.getElementById("step-title");
    const stepDescEl = document.getElementById("step-desc");

    function setStep(index) {
      steps?.forEach((el, i) => {
        el.classList.remove("active", "completed");
        if (i < index) el.classList.add("completed");
        else if (i === index) el.classList.add("active");
      });

      const percentage = (index + 1) * 25;
      progressText.textContent = percentage + "%";
      progressBar.style.width = percentage + "%";

      const stepTitles = [
        "Nhập thông tin cơ bản về dự án của bạn",
        "Thiết lập các gói phần thưởng cho nhà đầu tư",
        "Tải lên ảnh/video minh hoạ",
        "Xác nhận & xuất bản chiến dịch"
      ];
      const stepHeadings = ["🧾 Bước 1:", "🧾 Bước 2:", "🧾 Bước 3:", "🧾 Bước 4:"];

      if (infoBox && descBox) {
        infoBox.textContent = stepHeadings[index];
        descBox.textContent = stepTitles[index];
      }

      if (stepTitleEl && stepDescEl) {
        stepTitleEl.textContent = stepHeadings[index];
        stepDescEl.textContent = stepTitles[index];
      }
    }

    function showOnly(stepToShow, stepIndex) {
      [step1, step2, step3, step4].forEach((s) => s.classList.add("d-none"));
      stepToShow.classList.remove("d-none");
      setStep(stepIndex);
    }
    /*
    btnNext?.addEventListener("click", function (e) {
      e.preventDefault();
      showOnly(step2, 1);
    });
    */
   function validateStep(stepIndex) {
  switch (stepIndex) {
    case 0:
      const projectName = document.getElementById("projectName")?.value.trim();
      const category = document.getElementById("category")?.value;
      const slogan = document.getElementById("slogan")?.value.trim();
      const description = document.getElementById("description")?.value.trim();
      const fundingGoal = document.getElementById("fundingGoal")?.value.trim();
      const campaignDuration = document.getElementById("campaignDuration")?.value;

      if (
        !projectName || !slogan || !description || !fundingGoal || !campaignDuration ||
        !category || category === "Chọn danh mục"
      ) {
        alert("⚠️ Vui lòng điền đầy đủ thông tin ở Nội Dung 1.");
        return false;
      }
      return true;

    case 1:
  const rewardPackages = document.querySelectorAll(".reward-package");
  if (rewardPackages.length === 0) {
    alert("⚠️ Vui lòng thêm ít nhất một gói phần thưởng ở Nội Dung 2.");
    return false;
  }

  for (const pkg of rewardPackages) {
    const minInvestment = pkg.querySelector("input[id^='minInvestment']")?.value.trim();
    const limit = pkg.querySelector("input[id^='limit']")?.value.trim();
    const description = pkg.querySelector("textarea[id^='description']")?.value.trim();

    if (!minInvestment || !limit || !description) {
      alert("⚠️ Vui lòng điền đầy đủ thông tin trong tất cả các gói phần thưởng.");
      return false;
    }
  }

  return true;


    case 2:
      const mediaInputs = document.querySelectorAll("#step-3 input[type='file']");
      let hasMedia = false;
      mediaInputs.forEach(input => {
        if (input.files.length > 0) hasMedia = true;
      });
      if (!hasMedia) {
        alert("⚠️ Vui lòng tải lên ít nhất một ảnh hoặc video ở Bước 3.");
        return false;
      }
      return true;

    default:
      return true;
  }
}

btnNext?.addEventListener("click", function (e) {
  e.preventDefault();
  if (!validateStep(0)) return;
  showOnly(step2, 1);
});

btnNextStep2?.addEventListener("click", function () {
  if (!validateStep(1)) return;
  showOnly(step3, 2);
});

btnNextStep3?.addEventListener("click", function () {
  if (!validateStep(2)) return;
  showOnly(step4, 3);
});

    btnBack?.addEventListener("click", function () {
      showOnly(step1, 0);
    });

    btnBackFromStep3?.addEventListener("click", function () {
      showOnly(step2, 1);
    });

    btnBackFromStep4?.addEventListener("click", function () {
      showOnly(step3, 2);
    });

    btnNextStep4?.addEventListener("click", function () {
      alert("✅ Dự án của bạn đã sẵn sàng để gửi!");
    });

    window.saveDraft = function () {
      alert("Dữ liệu đã được lưu nháp!");
      // TODO: Lưu vào localStorage hoặc gọi API
    };
  });
</script>

<script>
  $(".card-option").click(function () {
  $(".card-option").removeClass("active");
  $(this).addClass("active");
  selectedType = $(this).data("type");
  $("#nextBtn").prop("disabled", false);
});

</script>

<script>
window.onload = function () {
  let rewardIndex = 1;

  document.getElementById('addRewardBtn').addEventListener('click', function () {
    rewardIndex++;

    const container = document.createElement('div');
    container.classList.add('border', 'rounded', 'p-3', 'mb-3', 'reward-package');
    container.innerHTML = `
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="fw-semibold mb-0">Gói thưởng #${rewardIndex}</h6>
        <button type="button" class="btn btn-sm btn-danger btn-remove-package">
          <i class="bi bi-trash"></i> Xóa
        </button>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Mức đầu tư tối thiểu (VND)</label>
          <input type="text" class="form-control" placeholder="100,000">
        </div>
        <div class="col-md-6">
          <label class="form-label">Số lượng giới hạn</label>
          <input type="text" class="form-control" placeholder="Ví dụ: 100">
        </div>
        <div class="col-12">
          <label class="form-label">Mô tả phần thưởng</label>
          <textarea class="form-control" rows="3" placeholder="Nhập mô tả phần thưởng"></textarea>
        </div>
      </div>
    `;

    const btn = document.getElementById('addRewardBtn');
    btn.parentNode.insertBefore(container, btn);

    attachRemoveEvents();
  });

  function attachRemoveEvents() {
    document.querySelectorAll('.btn-remove-package').forEach(button => {
      button.onclick = function () {
        this.closest('.reward-package').remove();
      };
    });
  }

  // Gắn sự kiện xóa ban đầu cho gói thưởng #1
  attachRemoveEvents();
};
</script>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">