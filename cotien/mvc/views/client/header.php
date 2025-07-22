  <style>
      .nut a {
          text-decoration: none;
          color: black;
          border-bottom: 0 solid transparent;
          padding-bottom: 2px;
          /* Để tạo khoảng trống cho border */
          transition: color 0.3s ease, border-bottom 0.3s ease;
          font-size: 16px;

      }

      .nut li:hover a {
          color: #007bff;
          border-bottom: 3px solid #007bff;
          /* Gạch dưới dày hơn */
      }




      .btn-login {
          padding: 13px 20px;
          font-size: 1rem;
          border: 2px solid #7b2ff7;
          background: transparent;
          border-radius: 12px;
          color: #7b2ff7;
          font-weight: 500;
      }

      .btn-register {
          padding: 13px 20px;
          font-size: 1rem;
          border: none;
          border-radius: 12px;
          font-weight: 500;
          background: blue;
          color: white;
      }

      .chitiettaisan {
          position: fixed;
          top: 60px;
          /* xuất hiện ngay dưới logo */
          left: 0;
          width: 100%;
          max-height: calc(100vh - 70px);
          /* phần còn lại của màn hình */
          overflow-y: auto;
          /* có thể cuộn nếu dài hơn */
          background-color: white;
          z-index: 999;
          visibility: hidden;
          transition: top 0.4s ease;
      }

      .chitiettaisan .nav-link {
          color: #000 !important;
          /* Màu đen */
          font-weight: 500;
      }

      .showchitiettaisan {
          top: 70px;
          /* Hiện ra từ dưới logo (tùy logo cao bao nhiêu) */
          visibility: visible;
          z-index: 999;
          transition: top 0.4s ease, visibility 0s, z-index 0s;
      }

      #user-menu-wrapper {
          position: relative;
      }

      .dropdown-menu-custom {
          position: absolute;
          top: 120%;
          /* khoảng cách so với icon */
          left: 50%;
          transform: translateX(-50%);
          background: white;
          border: 1px solid #ddd;
          border-radius: 10px;
          box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
          min-width: 180px;
          padding: 10px;
          display: none;
          opacity: 0;
          z-index: 999;
          transition: all 0.25s ease;
      }

      .dropdown-menu-custom.show {
          display: block;
          opacity: 1;
          transform: translateX(-50%) translateY(0);
      }

      .dropdown-item-custom {
          display: block;
          padding: 8px 12px;
          color: #333;
          text-decoration: none;
          border-radius: 6px;
          transition: background-color 0.2s;
      }

      .dropdown-item-custom:hover {
          background-color: #f8f9fa;
      }
  </style>

  <div class="container mt-3  d-none d-md-block">
      <div class="row p-5">
          <div class="col-md-3 d-flex justify-content-start">
              <div class="fw-bold d-flex align-items-center">
                  <div class="icon-container d-flex justify-content-center align-items-center rounded-3 me-3">
                      <i class="bi bi-coin text-primary fs-1"></i>
                  </div>
                  <div class="d-flex">
                      <a href="home" class="text-gradient-pink text-primary fw-bold fs-2 text-decoration-none">VayVon.com</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 pt-3 ">
              <ul class="nut d-flex justify-content-between text-black text-wrap">
                  <li class="list-unstyled"><a href="#home" class="text-decoration-none text-black">Trang chủ</a></li>
                  <li class="list-unstyled"><a href="#features" class="text-decoration-none text-black">Tính năng</a></li>
                  <li class="list-unstyled"><a href="#it-work" class="text-decoration-none text-black">Cách thức</a></li>
                  <li class="list-unstyled"><a href="" class="text-decoration-none text-black">Biểu phí</a></li>
                  <li class="list-unstyled"><a href="" class="text-decoration-none text-black">Liên hệ</a></li>
              </ul>
          </div>
          <div class="col-md-3 d-flex justify-content-end">
              <?php if (!@$_COOKIE['khachhang']) { ?>
                  <div class="d-flex justify-content-evenly flex-nowrap ">
                      <a href="login" class="btn btn-outline-primary btn-login me-3">Đăng nhập</a>
                      <a href="logon" class="btn btn-register ">Đăng ký</a>
                  </div>
              <?php  } ?>
              <?php if (@$_COOKIE['khachhang']) { ?>
                  <div class="position-relative d-inline-block mt-2" id="user-menu-wrapper">
                      <i class="bi bi-person-circle fs-2 text-primary" id="user-icon" style="cursor: pointer;"></i>

                      <div id="dropdown-menu" class="dropdown-menu-custom text-start">
                          <ul class="list-unstyled mb-0">
                              <li><a href="admin/tongquan" class="dropdown-item-custom text-black-50">Tài khoản của tôi</a></li>
                              <li><a href="trangchu/logout" class="dropdown-item-custom text-danger">Đăng xuất</a></li>
                          </ul>
                      </div>
                  </div>
              <?php } ?>
          </div>
      </div>
  </div>


  <div class="container py-3 d-block d-md-none">
      <div class="row align-items-center">
          <!-- Logo -->
          <div class="col-6 d-flex align-items-center">
              <div class="fw-bold d-flex align-items-center">
                  <div class="icon-container d-flex justify-content-center align-items-center rounded-3 me-3">
                      <i class="bi bi-coin text-primary fs-1"></i>
                  </div>
                  <div class="d-flex">
                      <span class="text-gradient-pink text-primary fw-bold fs-2">VayVon.com</span>
                  </div>
              </div>
          </div>

          <!-- Menu toggle icon -->
          <div class="col-6 text-end">
              <i class="bi bi-list fs-1 taisan" style="cursor: pointer;"></i>
          </div>
      </div>
  </div>

  <!-- OFFCANVAS MENU (placed OUTSIDE row!) -->
  <div class="chitiettaisan">
      <div class="offcanvas-body">
          <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link fs-5" href="#home">Trang chủ</a></li>
              <li class="nav-item"><a class="nav-link fs-5" href="#features">Tính năng</a></li>
              <li class="nav-item"><a class="nav-link fs-5" href="#it-work">Cách thức</a></li>
              <li class="nav-item"><a class="nav-link fs-5" href="">Biểu phí</a></li>
              <li class="nav-item"><a class="nav-link fs-5" href="">Liên hệ</a></li>
              <?php if (!@$_COOKIE['khachhang']) { ?>
                  <li class="nav-item"><a class="nav-link fs-5" href="login">Đăng nhập</a></li>
                  <li class="nav-item"><a class="nav-link fs-5" href="logon">Đăng ký</a></li>
              <?php  } ?>
              <?php if (@$_COOKIE['khachhang']) { ?>
                  <li><a href="admin/tongquan" class="dropdown-item-custom text-black-50 fs-5">Tài khoản của tôi</a></li>
                  <li><a href="trangchu/logout" class="dropdown-item-custom text-danger fs-5">Đăng xuất</a></li>
              <?php } ?>
          </ul>
      </div>
  </div>

  <script>
      $(document).ready(function() {
          // Toggle khi nhấn nút 3 gạch
          $('.taisan').click(function(e) {
              e.stopPropagation(); // Ngăn đóng ngay khi click
              $('.chitiettaisan').toggleClass('showchitiettaisan');
          });

          // Đóng khi nhấn ra ngoài
          $(document).click(function() {
              $('.chitiettaisan').removeClass('showchitiettaisan');
          });

          // Không đóng khi click trong menu
          $('.chitiettaisan').click(function(e) {
              e.stopPropagation();
          });

          // Đóng khi click vào mục menu (tùy chọn)
          $('.chitiettaisan .nav-link').click(function() {
              $('.chitiettaisan').removeClass('showchitiettaisan');
          });
      });
  </script>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
          const userIcon = document.getElementById("user-icon");
          const dropdown = document.getElementById("dropdown-menu");

          userIcon.addEventListener("click", function(e) {
              e.stopPropagation();
              dropdown.classList.toggle("show");
          });

          document.addEventListener("click", function(e) {
              if (!dropdown.contains(e.target)) {
                  dropdown.classList.remove("show");
              }
          });
      });
  </script>