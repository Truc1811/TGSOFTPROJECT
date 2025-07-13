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
  <?php
    $mang_lsgdth = [
        ['Mã giao dịch'],
        ['Khách sạn/Nhà hàng'],
        ['Loại phòng'],
        ['Ngày đến'],
        ['Ngày đi'],
        ['Số khách'],
        ['Trạng thái'],
    ];

    $mang_lsgdtd = [
        ['HSNH001', 'Khách sạn Mặt Trời', 'phòng đơn', '2025-07-01', '2025-07-05', '1 khách', 'đã xác nhận'],
        ['HSNH002', 'Nhà hàng Sông Xanh', 'bàn 4 người', '2025-06-25', '2025-06-25', '4 khách', 'chưa xác nhận'],
        ['HSNH003', 'Resort Biển Xanh', 'villa gia đình', '2025-08-10', '2025-08-15', '6 khách', 'đã hủy'],
        ['HSNH004', 'Khách sạn Hoàng Gia', 'phòng đôi', '2025-09-05', '2025-09-10', '2 khách', 'đã xác nhận'],
        ['HSNH005', 'Nhà hàng Lẩu Nướng', 'bàn 10 người', '2025-06-30', '2025-06-30', '10 khách', 'đã xác nhận'],

    ];



    ?>
  <div class="container-fluid p-3">
      <!-- Header -->
      <div class="mb-4">
          <h2 class="">📅 Lịch sử đặt phòng</h2>
          <p class="text-muted">Theo dõi các lượt đặt nhà hàng - khách sạn của bạn</p>
      </div>

      <!-- Bảng lịch sử -->
      <div class="table-responsive">
          <table class="table table-striped table-hover">
              <thead>
                  <tr>
                      <td>
                          <div class="col-12 d-flex">
                              <div class="col-2 fw-bold"><?php echo $mang_lsgdth[0][0] ?></div>
                              <div class="col-3 fw-bold"><?php echo $mang_lsgdth[1][0] ?></div>
                              <div class="col-2 fw-bold"><?php echo $mang_lsgdth[2][0] ?></div>
                              <div class="col-1 fw-bold"><?php echo $mang_lsgdth[3][0] ?></div>
                              <div class="col-1 fw-bold"><?php echo $mang_lsgdth[4][0] ?></div>
                              <div class="col-1 fw-bold"><?php echo $mang_lsgdth[5][0] ?></div>
                              <div class="col-2 fw-bold"><?php echo $mang_lsgdth[6][0] ?></div>
                          </div>
                      </td>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($mang_lsgdtd as $key => $vallsgd) { ?>
                      <tr>
                          <td>
                              <div class="col-12 d-flex">
                                  <div class="col-2"><?php echo $vallsgd[0] ?></div>
                                  <div class="col-3"><?php echo $vallsgd[1] ?></div>
                                  <div class="col-2"><?php echo $vallsgd[2] ?></div>
                                  <div class="col-1"><?php echo $vallsgd[3] ?></div>
                                  <div class="col-1"><?php echo $vallsgd[4] ?></div>
                                  <div class="col-1"><?php echo $vallsgd[5] ?></div>
                                  <div class="col-2"><?php echo $vallsgd[6] ?></div>
                              </div>
                          </td>
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
      </div>
  </div>