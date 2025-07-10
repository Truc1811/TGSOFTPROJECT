<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
  body {
    background: linear-gradient(to right,rgb(83, 203, 233), #2a5298);
    color: white;
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
  }

  .left-side {
    background: url('https://img.freepik.com/premium-vector/secure-login-sign-up-concept-illustration-user-use-secure-login-password-protection-website-social-media-account-vector-flat-style_7737-2270.jpg') no-repeat center center;
    background-size: cover;
    height: 100vh;
    animation: moveBackground 30s linear infinite;
  }

  @keyframes moveBackground {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }

  .overlay {
    background: rgba(0, 0, 0, 0.6);
    height: 100%;
    padding: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .overlay h2 {
    font-size: 40px;
    font-weight: bold;
  }

  .form-container {
    width: 100%;
    max-width: 500px;
    padding: 40px 20px;
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 15px;
    backdrop-filter: blur(5px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    margin: 20px;
  }

  .form-label {
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 4px;
  }

  .form-control {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #ccc;
    color: #fff;
    border-radius: 0;
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 6px;
    transition: border-color 0.3s ease;
  }

  .form-control:focus {
    border-color: #0d6efd;
    box-shadow: none;
    background-color: transparent;
    color: #fff;
  }

  .form-control::placeholder {
    color: #ccc;
  }

  .btn-custom {
    background-color: #0d6efd;
    border: none;
    color: white;
    font-weight: 500;
    transition: 0.3s;
  }

  .btn-custom:hover {
    background-color: #0b5ed7;
  }

  .btn-outline-light {
    border-color: white;
    color: white;
  }

  .btn-outline-light:hover {
    background: white;
    color: #0d6efd;
  }

  .form-check-input:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
  }

  .form-text {
    color: #ffc107;
  }

  .link-text {
    font-size: 14px;
  }

  .link-text a {
    color: #ffc107;
  }

  @media (max-width: 768px) {
    .left-side {
      display: none;
    }

    .form-container {
      margin: 20px auto;
    }
  }
</style>

<div class="row g-0">
  <!-- Left side -->
  <div class="col-md-6 left-side d-none d-md-block">
    <div class="overlay">
      <h2>SIGNUP ACCOUNT</h2>
    </div>
  </div>

  <!-- Right side -->
  <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
    <div class="form-container">
      <form data-aos="fade-up" method="POST" action="logon/dangky" enctype="multipart/form-data" id="myFormlogon" onsubmit="ktformLogon(e)">
        <div class="mb-3">
          <label for="image" class="form-label">Hình đại diện</label>
          <input type="file" name="image" class="form-control form-control-sm" id="image" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Họ tên</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nhập họ tên">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
          <input type="text" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mật khẩu">
        </div>

        <div class="mb-3 row">
          <div class="col-md-6">
            <label class="form-label d-block">Bạn là:</label>
            <div class="form-check form-check-inline">
              <input type="radio" name="status" value="1" id="chothue" class="form-check-input" required>
              <label class="form-check-label" for="thue">Cho thuê</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="status" value="2" id="chothue" class="form-check-input">
              <label class="form-check-label" for="chothue">Khách Thuê</label>
            </div>
          </div>

          <div class="col-md-6 mt-3 mt-md-0">
            <label class="form-label d-block">Giới tính:</label>
            <div class="form-check form-check-inline">
              <input type="radio" name="level" value="1" id="nam" class="form-check-input" required>
              <label class="form-check-label" for="nam">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="level" value="2" id="nu" class="form-check-input">
              <label class="form-check-label" for="nu">Nữ</label>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Số điện thoại</label>
          <input type="text" class="form-control ktsdt" id="phone" name="phone" placeholder="Số điện thoại">
          <div id="ktsdt" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control ktemail" id="email" name="email" placeholder="Email">
          <div id="ktemail" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Địa chỉ</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
        </div>

        <input type="submit" class="btn btn-custom w-100 mb-3" name="submit" id="nut_dang_ky" value="Đăng ký">

        <p class="text-center link-text mb-2">If you already have an account, you can log in:</p>
        <a href="login/customer" class="btn btn-custom w-100 mb-2">Đăng nhập</a>
      </form>
    </div>
  </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<script>
  var kt_email = 'true';
  var kt_sdt = 'true';

  function kt_tongthe_dangky() {
    if (kt_email == 'true' && kt_sdt == 'true') {
      $('#nut_dang_ky').prop('disabled', false);
    } else {
      $('#nut_dang_ky').prop('disabled', true);
    }
  }
  $(document).ready(function() {
    $('.ktsdt').keyup(function() {
      var kt = $('.ktsdt').val();
      $.post('logon/kiemtrasdt', {
        'kt': kt
      }, function(kqt) {
        if (kqt.includes("true")) {
          kt_sdt = 'fasle';
          $('#ktsdt').html('Không hợp lệ');
        } else {
          kt_sdt = 'true';
          $('#ktsdt').html('hợp lệ');
        }
        kt_tongthe_dangky();
      }, 'text');
    });

    $('.ktemail').keyup(function() {
      var kte = $('.ktemail').val();
      $.post('logon/kiemtraemail', {
        'kte': kte
      }, function(kqtemal) {
        if (kqtemal.includes("true")) {
          kt_email = 'fasle';
          $('#ktemail').html('Không hợp lệ');
        } else {
          kt_email = 'true';
          $('#ktemail').html('hợp lệ');
        }
        kt_tongthe_dangky();
      }, 'text');
    });
  });
</script>