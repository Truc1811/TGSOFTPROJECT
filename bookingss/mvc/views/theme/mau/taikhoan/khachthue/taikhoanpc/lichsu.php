  <style>
 
    .status-confirmed {
      color: green;
      font-weight: 600;
    }
    .status-canceled {
      color: red;
      font-weight: 600;
    }
    .status-pending {
      color: orange;
      font-weight: 600;
    }
  </style>

  <div class="container-fluid p-3">
    <!-- Header -->
    <div class="text-center mb-4">
      <h2 class="fw-bold">📅 Lịch sử đặt phòng</h2>
      <p class="text-muted">Theo dõi các lượt đặt nhà hàng - khách sạn của bạn</p>
    </div>

    <!-- Bảng lịch sử -->
    <div class="table-responsive">
      <table class="table table-hover align-middle shadow-sm bg-white rounded">
        <thead class="table-primary">
          <tr>
            <th>#</th>
            <th>Khách sạn / Nhà hàng</th>
            <th>Loại phòng</th>
            <th>Ngày đến</th>
            <th>Ngày đi</th>
            <th>Số khách</th>
            <th>Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Khách sạn Hòa Bình</td>
            <td>Phòng đôi</td>
            <td>2025-07-01</td>
            <td>2025-07-05</td>
            <td>2 người</td>
            <td><span class="status-confirmed">✔ Đã xác nhận</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nhà hàng Biển Xanh</td>
            <td>Bàn VIP 6 người</td>
            <td>2025-06-10</td>
            <td>2025-06-10</td>
            <td>6 người</td>
            <td><span class="status-canceled">✖ Đã hủy</span></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Khách sạn Sông Hồng</td>
            <td>Phòng đơn</td>
            <td>2025-08-15</td>
            <td>2025-08-18</td>
            <td>1 người</td>
            <td><span class="status-pending">⏳ Đang chờ</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>