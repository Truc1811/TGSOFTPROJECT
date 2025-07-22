
<!-- Font Awesome 6 -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  rel="stylesheet"
/>
<style type="text/css">
  .tag_click:hover {
    background-color: #eaf2ffff;
    color: #002affff !important ;
  }

  .scrollbar::-webkit-scrollbar {
    width: 6px;
  }
  .scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 10px;
  }
</style>
<style>
  .sidebar {
    background-color: #111827;
    color: #fff;
    padding: 20px;
    width: 260px;
    height: 100vh;
  }

  .sidebar .user-info {
    margin-top: 20px;
    border-top: 1px solid #1f2937;
    padding-top: 20px;
  }
  .user-badge {
    font-size: 12px;
    background: #a78bfa;
    padding: 5px 10px;
    border-radius: 20px;
    display: inline-block;
    color: white;
  }
  .sidebar .menu {
    margin-top: 30px;
  }
  .menu-item {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    color: #d1d5db;
    border-radius: 10px;
    margin-bottom: 8px;
    text-decoration: none;
    transition: background 0.2s;
  }
  .menu-item:hover {
    background-color: #1f2937;
    color: white;
  }
  .menu-item.active {
    background: linear-gradient(to right, #a78bfa, #7c3aed);
    color: white;
    box-shadow: 0 2px 10px rgba(167, 139, 250, 0.5);
    padding-left: 12px;
  }
  .menu-item i {
    width: 24px;
    margin-right: 12px;
    font-size: 16px;
  }
  .menu-title {
    margin-top: 40px;
    font-size: 12px;
    color: #9ca3af;
    letter-spacing: 1px;
  }

  /* Hide sidebar on mobile */
  @media (max-width: 767.98px) {
    .sidebar {
      height: 100%;
    }
  }
</style>

<!----start---->
<div
  class="d-none d-md-block col-2 text-center p-2 overflow-auto scrollbar"
  style="height: 900vh; background-color: #111827"
>


  <div
    class="my-3"
    style="border-bottom: 1px solid white"
  >
    <div class="fw-bold text-white">Trung Vo</div>

    <div class="user-info mb-3 mt-2">
      <span class="user-badge">Nhà đầu tư</span>
    </div>
  </div>

  <div class="menu">
  <a href="#" data-href="admin/tongquan" class="menu-item">
    <i class="fa-solid fa-house"></i> Tổng quan
  </a>
  <a href="#" data-href="admin/update/configuration/1/1" class="menu-item">
    <i class="fa-solid fa-cart-shopping"></i> Khoảng Đầu Tư
  </a>
  <a href="#" data-href="admin/listr/myproject" class="menu-item">
    <i class="fa-solid fa-chart-pie"></i> Dự án của tôi
  </a>
  <a href="#" data-href="admin/listr/mes" class="menu-item">
    <i class="fa-solid fa-coins"></i> Tin nhắn
  </a>
  <a href="#" data-href="admin/listr/businmoney" class="menu-item">
    <i class="fa-solid fa-coins"></i> Chiến dịch KD
  </a>
   <a href="#" data-href="wallet/account" class="menu-item">
    <i class="fa-solid fa-coins"></i> Ví điện tử
  </a>
   <a href="#" data-href="admin/listr/users" class="menu-item">
    <i class="fa-solid fa-coins"></i> Quản lý User
  </a>
     <!-- <a href="#" data-href="/admin/listr/thongtintaisan" class="menu-item">
    <i class="fa-solid fa-coins"></i> Thông tin tài sản
  </a> -->
  <!-- ... các menu khác tương tự -->
</div>


</div>
<!----- end---->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll(".menu-item");

    let hasMatched = false;

    menuItems.forEach((item) => {
      const href = item.getAttribute("data-href");

      if (href && currentPath.startsWith(href)) {
        item.classList.add("active");
        hasMatched = true;
      }

      // Thêm click event để điều hướng
      item.addEventListener("click", function (e) {
        e.preventDefault();

        // Lưu trạng thái active trước khi chuyển trang (nếu dùng SPA thì không cần reload)
        menuItems.forEach((el) => el.classList.remove("active"));
        this.classList.add("active");

        const link = this.getAttribute("data-href");
        if (link) window.location.href = link;
      });
    });

    // Nếu không khớp url nào, mặc định active cái đầu
    if (!hasMatched && menuItems[0]) {
      menuItems[0].classList.add("active");
    }
  });
</script>

