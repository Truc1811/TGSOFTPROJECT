<style>
  .customer-card {
    background-color: #fff;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    transition: all 0.2s ease-in-out;
  }

  .customer-card:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
  }


  .badge-new {
    background-color: #dc3545;
    color: white;
    font-size: 0.75rem;
    padding: 2px 6px;
    border-radius: 8px;
    margin-left: 5px;
  }
</style>
<?php
$mang_tinnhanpc = [
  ['Nguyễn Văn Nam', 'Xác nhận đặt phòng tại Khách sạn Gánh ngày 12/07', 'a112', 'Khách yêu cầu xác nhận lại thông tin phòng đơn đã đặt.', '25p trước'],
  ['Nguyễn Ngô Mỹ Nữ', 'Thay đổi thời gian nhận phòng sang 15h', 'b114', 'Khách muốn lùi thời gian check-in do đến trễ chuyến bay.', ''],
  ['Nguyễn Công Phi', 'Thêm người vào đặt phòng ngày 20/07', 'c118', 'Khách bổ sung 1 người lớn, cần nâng cấp lên phòng đôi.', '25p trước'],
  ['Lê Thị Thu Trang', 'Yêu cầu hủy đặt phòng tại TTC Hotel ngày 25/7', 'd121', 'Khách cần hỗ trợ hủy đặt phòng vì lý do cá nhân. Đề nghị liên hệ sớm.', '25p trước'],
  ['Phạm Quốc Hưng', 'Cần hóa đơn VAT cho đơn đặt phòng ngày 10/07', 'e145', 'Khách yêu cầu xuất hóa đơn công ty cho khoản thanh toán.', ''],
  ['Trần Mỹ Duyên', 'Yêu cầu phòng không hút thuốc', 'f168', 'Khách nhấn mạnh phòng cần không có mùi thuốc và có cửa sổ.', '30p trước'],
  ['Vũ Ngọc Khánh', 'Đổi loại phòng từ tiêu chuẩn sang cao cấp', 'g194', 'Khách muốn nâng hạng phòng đã đặt, chấp nhận chi phí phát sinh.', ''],
  ['Đặng Hoàng Long', 'Hỏi về dịch vụ ăn sáng kèm theo phòng', 'h110', 'Khách muốn xác nhận lại có bao gồm buffet sáng không.', '25p trước'],
  ['Hoàng Minh Thư', 'Xác nhận đặt 2 phòng đơn cạnh nhau', 'i143', 'Khách đặt 2 phòng cho gia đình, yêu cầu gần nhau cùng tầng.', ''],
  ['Nguyễn Thành Tâm', 'Thanh toán thất bại, cần hỗ trợ lại', 'j177', 'Khách báo lỗi khi chuyển khoản, muốn được hướng dẫn lại.', ''],
  ['Lâm Thanh Mai', 'Đổi lịch đặt phòng sang tuần sau', 'k102', 'Khách cần chuyển thời gian lưu trú do công việc đột xuất.', '25p trước'],
  ['Phan Văn Toàn', 'Cần phòng có bếp mini', 'l188', 'Khách muốn tự nấu ăn, hỏi khách sạn có phòng bếp không.', ''],
  ['Ngô Quỳnh Như', 'Góp ý về trải nghiệm đặt phòng online', 'm133', 'Khách hài lòng nhưng muốn giao diện dễ nhìn hơn trên điện thoại.', '']
];

?>
<style>
  .tab-scroll-tn::-webkit-scrollbar {
    display: none;
  }
</style>
<div class="p-3">
  <h2 class="mb-3">Tất cả tin nhắn</h2>
  <div class="tab-scroll-tn" style="overflow-y: auto;height:80vh">
    <?php
    foreach ($mang_tinnhanpc as $key => $valtinnhanpc) {
    ?>
      <!-- Khách hàng -->
      <div class="customer-card d-flex align-items-start mb-3" style="cursor: pointer;">
        <div class="d-flex align-items-start w-100 p-2">
          <!-- Icon người dùng -->
          <div class="me-3">
            <i class="bi bi-person-circle fs-2 text-primary"></i>
          </div>

          <!-- Nội dung thông báo + thời gian -->
          <div class="flex-grow-1" data-bs-toggle="modal" data-bs-target="#<?php echo $valtinnhanpc[2]; ?>Modal">
            <!-- Hàng trên: tên và badge gần nhau -->
            <div class="d-flex align-items-center">
              <h6 class="mb-1 fw-bold me-2"><?php echo $valtinnhanpc[0]; ?></h6>
              <?php if (!empty($valtinnhanpc[4])): ?>
                <span class="badge bg-danger text-white" style="font-size: 0.75rem;">
                  <?php echo $valtinnhanpc[4]; ?>
                </span>
              <?php endif; ?>
            </div>
            <!-- Nội dung tin nhắn -->
            <p class="mb-1 text-black-50"><?php echo $valtinnhanpc[1]; ?></p>
          </div>
        </div>
      </div>


    <?php } ?>
  </div>
  <?php
  foreach ($mang_tinnhanpc as $key => $valtinnhanpc) {
  ?>
    <!-- Modal -->
    <div class="modal fade mt-4" id="<?php echo $valtinnhanpc[2]; ?>Modal" tabindex="-1" aria-labelledby="<?php echo $valtinnhanpc[2]; ?>ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white" id="<?php echo $valtinnhanpc[2]; ?>ModalLabel">Chi tiết tin nhắn</h5>
            <div data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;"><i class="bi bi-arrow-left fs-5 text-white"></i></div>
          </div>
          <div class="modal-body">
            <h5 class="mb-3 text-black-50 text-center"><?php echo $valtinnhanpc[0]; ?></h5>
            <?php require "mvc/views/theme/mau/maudata/maumodal/mautin.php"; ?>
          </div>

          <div class="d-flex justify-content-between align-items-center p-2">
            <input
              type="search"
              class="form-control form-control-sm border-primary shadow-sm rounded me-2">
            <button type=" button" class="btn btn-primary btn-sm">Gửi</button>
          </div>

        </div>
      </div>
    </div>
  <?php } ?>
  <!-- end Modal -->

  <!-- end Khách hàng -->

</div>