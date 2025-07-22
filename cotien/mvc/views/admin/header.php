<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$thoi_gian=getdate();
$ngay=$thoi_gian['mday'];
$thang=$thoi_gian['mon'];
$nam=$thoi_gian['year'];
?>

 <style>
    body {
      background-color: #f8f9fa;
    }

    .sidebar {
      background-color: #111827;
      color: white;
      min-height: 100vh;
      width: 280px;
      padding: 20px 15px;
    }

    .sidebar .nav-link {
      color: #cbd5e1;
      border-radius: 8px;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background: linear-gradient(to right, #8b5cf6, #6366f1);
      color: white !important;
      font-weight: 600;
    }

    .sidebar .nav-link i {
      font-size: 18px;
    }

    .user-info {
      margin-bottom: 30px;
    }

    .user-info .badge {
      background-color: #8b5cf6;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
      }
    }
  </style>

  <style>
    .brand-logo {
      font-weight: bold;
      font-size: 24px;
    }

    .brand-logo span {
      color: #e5ff00ff; /* Tím */
    }

    .search-box {
      border-radius: 25px;
      padding-left: 40px;
      height: 38px;
    }

    .search-wrapper {
      position: relative;
      width: 100%;
      max-width: 380px;
    }

    .search-wrapper i {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      color: #6c757d;
    }

    .icon-wrapper {
      position: relative;
      font-size: 20px;
      cursor: pointer;
    }

    .icon-wrapper .badge {
      position: absolute;
      top: -6px;
      right: -8px;
      font-size: 10px;
      background-color: red;
      color: white;
      border-radius: 10px;
      padding: 2px 6px;
    }
  </style>
  
  
  <div class="row d-none d-md-flex justify-content-between align-items-center flex-nowrap px-4 text-white py-2" style=" background: rgba(71, 21, 255, 1);">
    <!-- Logo -->
    <div class="col-auto pe-3">
        <div class="brand-logo fw-bold">
            Vay<span class="text-warning">Von.com</span>
        </div>
    </div>


    <!-- Thanh tìm kiếm và tài khoản -->
    <div class="col d-flex align-items-center justify-content-end gap-3">
      


        <!-- Tài khoản -->
        <div class="d-flex align-items-center">
            <i class="bi bi-person-circle fs-5"></i>
            <span class="ms-2"><?php echo @$tai_khoan ?: 'Admin'; ?></span>
        </div>

       <!-- Tìm kiếm -->
<div class="d-flex align-items-center bg-white rounded-pill px-3 py-1" style="max-width: 240px;">
    <i class="bi bi-search text-dark"></i>
    <input type="text" class="form-control border-0 ps-2 bg-white" placeholder="Tìm kiếm..." style="box-shadow: none; height: 30px; line-height: 40px;">
</div>

 <div class="icon-wrapper">
          <i class="bi bi-bell"></i>
          <span class="badge">3</span>
        </div>

        <!-- Logout -->
        <a class="btn btn-danger btn-sm" href="admin/logout">
            <i class="bi bi-box-arrow-right"></i>
        </a>
    </div>
</div>

<!-- di dong dday-->
<!-- Mobile Nav -->
<div class="row d-flex d-md-none align-items-center justify-content-between px-3 py-2 text-white" style=" background: rgba(71, 21, 255, 1);">
    <!-- Logo -->
    <div class="col-auto d-flex align-items-center" style="font-size: 24px;">

        <span class="ms-2 fw-bold">Vay<span class="text-warning">Von</span></span>
    </div>

    <!-- Offcanvas Menu Button -->
    <div class="col-auto">
        <button class="btn btn-outline-light btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
            <i class="bi bi-list fs-5"></i>
        </button>
    </div>
</div>


<!-- Sidebar -->
<div class="offcanvas-md offcanvas-start sidebar offcanvas" tabindex="-1" id="offcanvasExample">
  <div class="offcanvas-header d-md-none">
    <h5 class="offcanvas-title text-white">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">
    <div class="text-white mb-3 d-flex align-items-center ">
      <i class="fa-solid fa-coins fa-2x text-info me-2"></i>
      
    </div>

    <div class="user-info text-white">
      
      <p class="mb-0 fw-semibold">Trung Vo</p>

      <span class="badge mt-1">Nhà đầu tư</span>
    </div>

    <nav class="nav flex-column">
      <a class="nav-link active" data-href="/admin/tongquan" href="#"> <i class="fa-solid fa-house"></i> Tổng quan</a>
      <a class="nav-link" data-href="/admin/update/configuration/1/1"  href="#"><i class="fa-solid fa-cart-shopping"></i> Khoảng Đầu Tư</a>
      <a class="nav-link" data-href="/admin/listr/myproject" href="#"><i class="fa-solid fa-chart-pie"></i> Dự án của tôi</a>
      <a class="nav-link" data-href="/admin/listr/mes" href="#"><i class="fa-solid fa-coins"></i> Tin nhắn</a>
      <a class="nav-link" data-href="/admin/listr/businmoney" href="#"><i class="fa-solid fa-coins"></i> Chiến dịch KD</a>
      <a class="nav-link" data-href="/wallet/account"  href="#"><i class="fa-solid fa-coins"></i> Ví điện tử</a>
      <a class="nav-link" data-href="/admin/listr/listuser"  href="#"><i class="fa-solid fa-coins"></i> Quản lý User</a>
    </nav>

    <hr class="text-secondary mt-4" />
    <p class="text-uppercase text-secondary fw-bold small">Quản lý tài khoản</p>
  </div>
</div>


<!-- Bootstrap JS + jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Active class toggle
  $(document).ready(function () {
    $('.nav-link').on('click', function () {
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>


