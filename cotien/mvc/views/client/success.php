<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Khung Sản Phẩm Giao Diện App</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <style>
          @keyframes successFlash {
    0% { opacity: 0; transform: scale(0.8); color: #28a745; }
    50% { opacity: 1; transform: scale(1.1); color: #218838; }
    100% { transform: scale(1); color: #28a745; }
  }

  .success-effect {
    animation: successFlash 1.5s ease-in-out forwards;
    font-weight: bold;
    text-align: center;
  }
    
  </style>
</head>
<body>

<div class="container py-3">

  <!-- Dòng sản phẩm -->
  <div class="row g-3 d-flex justify-content-center align-items-center">
    <!-- SP 1 -->
    <div class="col-md-6">
        <img src="https://img.freepik.com/premium-vector/success-vector-illustration_1893-2234.jpg" alt="" class="w-100 img-fluid">
    </div>
    <div class="col-md-6 d-flex flex-column">
        <h1 class="success-effect" id="success-msg" >Đăng Ký Thành Công</h1>
        <a href="login" class="btn fw-bold fs-5">Đăng nhập ngay</a>
    </div>


</div>




<script>
  window.addEventListener('DOMContentLoaded', () => {
    const msg = document.getElementById('success-msg');
    msg.classList.add('success-effect');

    // Nếu muốn hiệu ứng lặp lại, có thể reset animation:
    setInterval(() => {
      msg.classList.remove('success-effect');
      void msg.offsetWidth; // Trigger reflow
      msg.classList.add('success-effect');
    }, 4000); // mỗi 4 giây lặp lại
  });
</script>

</body>
</html>
