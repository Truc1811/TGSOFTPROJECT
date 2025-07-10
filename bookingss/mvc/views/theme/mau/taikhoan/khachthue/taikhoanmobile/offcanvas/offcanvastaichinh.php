  <style>
    .card-custom {
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }

    .card-custom:hover {
      transform: translateY(-5px);
    }

    .card-title {
      font-size: 1.2rem;
    }

   
  </style>
  <div class="container-fluid">
    <!-- Header -->
    <div class="text-center mb-3">
      <h2 class=""><i class="bi bi-person-circle" style="font-size: 24px;color:blue"></i> Tài Chính Cá Nhân</h2>
      <p class="text-muted">Tổng quan số dư và giao dịch</p>
    </div>

    <!-- Thông tin tài khoản -->
    <div class="row ">
      <div class="col-12 col-md-3 mb-3">
        <div class="card card-custom text-white bg-primary text-center">
          <div class="card-body">
            <h5 class="card-title">Số dư</h5>
            <p class="card-text">1.500.000₫</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="card card-custom text-white bg-success text-center">
          <div class="card-body">
            <h5 class="card-title">Tiền thưởng</h5>
            <p class="card-text">300.000₫</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="card card-custom text-white bg-info text-center">
          <div class="card-body">
            <h5 class="card-title">Đã thanh toán</h5>
            <p class="card-text">2.000.000₫</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="card card-custom text-dark bg-warning text-center">
          <div class="card-body">
            <h5 class="card-title">Nạp tiền</h5>
            <p class="card-text">1.800.000₫</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Nút nạp thẻ -->
    <div class="text-center mt-5">
      <button class="btn btn-lg btn-outline-primary px-5 py-2 rounded-pill shadow-sm"><i class="bi bi-credit-card" style="font-size: 24px;color:blue"></i> Nạp tiền ngay</button>
    </div>
  </div>