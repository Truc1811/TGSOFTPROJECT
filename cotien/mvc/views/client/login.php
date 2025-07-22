<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Đăng nhập Cotien</title>

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background-color: #f8f9fa;
    }

    html ,body{
      height: 100%;
    }


    .left-panel {
      background-color: #fff;
      padding: 40px 30px;
    }

    .right-panel {
      background-color: #38019eff;
      color: #fff;
      padding: 40px 30px;
    }

    .form-control:focus {
      border-color: #6f42c1;
      box-shadow: none;
    }

    .btn-primary {
      background-color: #6f42c1;
      border: none;
    }

    .btn-outline-primary {
      border: 1px solid #6f42c1;
      color: #6f42c1;
    }

    .btn-outline-primary:hover {
      background-color: #6f42c1;
      color: white;
    }

    .feature-icon {
      font-size: 1.25rem;
      margin-right: 10px;
      color: #ffc107;
    }

    .form-check-input:checked {
      background-color: #6f42c1;
      border-color: #6f42c1;
    }

    .text-purple {
      color: #6f42c1;
    }

    .divider {
      text-align: center;
      color: #999;
      margin: 15px 0;
      position: relative;
    }

    .divider::before,
    .divider::after {
      content: "";
      position: absolute;
      height: 1px;
      width: 40%;
      background: #ccc;
      top: 50%;
    }

    .divider::before {
      left: 0;
    }

    .divider::after {
      right: 0;
    }

    @media (max-width: 768px) {
      .right-panel {
        display: none;
      }
    }
  </style>
</head>

<body>

  <div class="container-fluid login-container h-100">
    <div class="row h-100">
      <!-- Left Login Form -->
      <div class="col-md-6 left-panel d-flex flex-column justify-content-center">
        <div class="mx-auto w-100" style="max-width: 400px;">
          <h1 class="fw-bold mb-4 text-center" style="color: #5b02ffff;">Đăng nhập</h2>
            <!-- <p class="text-muted">Chào mừng bạn trở lại! Vui lòng đăng nhập vào tài khoản của bạn.</p> -->

            <!-- Form -->
            <form method="post" action="login/check_login">
              <div class="mb-3">
                <label class="form-label">Email hoặc tên đăng nhập</label>
                <input type="email" class="form-control" placeholder="Nhập email hoặc tên đăng nhập" name="email" />
              </div>
              <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" />
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rememberMe" />
                  <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                </div>
                <a href="#" class="text-purple text-decoration-none">Quên mật khẩu?</a>
              </div>
              <style>
                .btn-cus {
                  background-color: #5b02ffff;
                  color: white;
                }

                .btn-cus:hover {
                  background-color: #5a2dd1 !important;
                  /* màu tím sáng hơn */
                  transform: scale(1.02);
                  /* phóng to nhẹ */
                  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                  /* bóng nhẹ */
                  color: white;
                }
              </style>

              <div class="text-center">
                <input type="submit" name="submit" value="🔐 Đăng nhập" class="btn btn-primary rounded-pill px-4" />
              </div>
			  <div class="text-center mt-2">
                <a href="home" name="submit" class="btn btn-light rounded-pill px-4">
				
					Quay về trang chủ 
				
				</a>
              </div>

            </form>

            <p class="text-center text-muted mt-3">
              Chưa có tài khoản? <a href="logon" class="text-purple fw-semibold text-decoration-none">Đăng ký ngay</a>
            </p>
        </div>
      </div>

      <!-- Right Info Panel -->
      <div class="col-md-6 right-panel d-flex flex-column justify-content-center">
        <div class="mx-auto" style="max-width: 400px;">
          <h4 class="fw-bold mb-4">Tham gia cộng đồng VayVon</h4>

          <p><i class="fas fa-users feature-icon"></i><strong>Cộng đồng đầu tư</strong><br>
            <span class="ms-4">Kết nối với hàng nghìn nhà đầu tư và startup tiềm năng</span>
          </p>

          <p><i class="fas fa-shield-alt feature-icon"></i><strong>Bảo mật tuyệt đối</strong><br>
            <span class="ms-4">Xác thực eKYC và mã hóa thông tin cá nhân</span>
          </p>

          <p><i class="fas fa-chart-line feature-icon"></i><strong>Theo dõi đầu tư</strong><br>
            <span class="ms-4">Dashboard chi tiết theo dõi portfolio và lợi nhuận</span>
          </p>

          <div class="row text-center mt-4">
            <div class="col-4">
              <h5 class="fw-bold text-warning">1000+</h5>
              <p class="mb-0">Dự án đã gọi vốn</p>
            </div>
            <div class="col-4">
              <h5 class="fw-bold text-warning">50 tỷ+</h5>
              <p class="mb-0">Tổng vốn đã huy động</p>
            </div>
            <div class="col-4">
              <h5 class="fw-bold text-warning">5000+</h5>
              <p class="mb-0">Nhà đầu tư tin tưởng</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>