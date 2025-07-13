<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bootstrap Wave Login with Dark-Light Mode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
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
      margin: 60px auto;
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
    .wave1 { animation: waveMove 8s linear infinite; opacity: 0.7; }
    .wave2 { animation: waveMoveReverse 12s linear infinite; opacity: 0.4; }
    .wave3 { animation: waveMove 20s linear infinite; opacity: 0.2; }

    @keyframes waveMove {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    @keyframes waveMoveReverse {
      0% { transform: translateX(-50%); }
      100% { transform: translateX(0); }
    }

    .fade-in { opacity: 0; transform: translateY(20px); animation: fadeIn 1s ease-out forwards; }
    .fade-in:nth-child(1) { animation-delay: 0s; }
    .fade-in:nth-child(2) { animation-delay: 0.5s; }
    .fade-in:nth-child(3) { animation-delay: 1s; }
    @keyframes fadeIn { to { opacity: 1; transform: translateY(0); } }

    .khung_lon{ z-index: 12; }

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
    .dark-mode .footer-note { color: #aaa; }
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
  0% { transform: translate(0, 0) scale(1); }
  50% { transform: translate(30px, 20px) scale(1.1); }
  100% { transform: translate(0, 0) scale(1); }
}

@keyframes float2 {
  0% { transform: translate(0, 0) scale(1); }
  50% { transform: translate(-20px, 25px) scale(0.9); }
  100% { transform: translate(0, 0) scale(1); }
}

  </style>
</head>
<body>

  <!-- 🌙☀️ Toggle Button -->
  <button class="toggle-btn" onclick="toggleDarkMode()">🌙</button>

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

  <!-- 🔐 Login Form Bootstrap -->
  <div class="fade-in khung_lon">
    <div class="login-container bg-white">
      <h5 class="fw-bold text-center mb-3 text-dark">ĐĂNG NHẬP HOẶC TẠO TÀI KHOẢN</h5>
      <p class="text-center text-muted small">Bạn có thể đăng nhập tài khoản Booking.com của mình để truy cập các dịch vụ của chúng tôi.</p>

      <form>
        <div class="mb-3">
          <label for="email" class="form-label fw-bold text-dark">Địa chỉ email</label>
          <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email của bạn" required>
        </div>
        <button type="submit" class="btn btn-primary text-white w-100 mb-2">
          <a class="text-white text-center text-decoration-none" href="http://localhost:9090/Booking/index.php?p=trangchusaukhidangnhap">
              Tiếp tục với email
          </a>
        </button>
      </form>
      <br>
      <div class="text-center"><span>- Hoặc sử dụng một trong các lựa chọn này -</span></div>
      <br>
      <div class="d-flex justify-content-center social-icons mb-3">
        <a href="http://localhost:9090/Booking/index.php?p=trangchusaukhidangnhap">
          <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google">
        </a>
        <a href="http://localhost:9090/Booking/index.php?p=trangchusaukhidangnhap">
          <img src="https://cdn-icons-png.flaticon.com/512/0/747.png" alt="Apple">
        </a>
        <a href="http://localhost:9090/Booking/index.php?p=trangchusaukhidangnhap">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
        </a>
      </div>

      <p class="text-center footer-note mt-4">
        Qua việc đăng nhập hoặc tạo tài khoản, bạn đồng ý với các
        <a href="#">Điều khoản và Điều kiện</a> cũng như
        <a href="#">Chính sách An toàn và Bảo mật</a> của chúng tôi.
      </p>

      <p class="text-center footer-note mt-2">
        Bản quyền © 2006 - 2025 - Booking.com™
      </p>
    </div>
  </div>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
      const btn = document.querySelector('.toggle-btn');
      btn.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
