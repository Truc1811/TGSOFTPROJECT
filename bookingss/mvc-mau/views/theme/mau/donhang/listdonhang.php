<style>


  .nav-tabs {
    border-bottom: 1px solid #dee2e6;
  }

  .nav-tabs .nav-link {
    color: #333;
    font-size: 14px;
    padding: 10px 16px;
    border: none;
    background-color: transparent;
    position: relative;
    white-space: nowrap;
  }

  .nav-tabs .nav-link.active {
    color: #1a73e8;
    font-weight: 500;
  }

  .nav-tabs .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 100%;
    background-color: #1a73e8;
  }

  .thanhcroll {
    overflow-x: auto;
    white-space: nowrap;
  }

  .thanhcroll::-webkit-scrollbar {
    display: none;
    /* Ẩn thanh cuộn trên iOS/Android */
  }

  .chat-box {
    background-color: white;
  }

  .message {
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
  }

  .message.user {
    flex-direction: row-reverse;
  }

  .avatar {
    font-size: 20px;
    margin: 0 8px;
  }

  .text {
    padding: 8px 12px;
    border-radius: 12px;
    border: 1px solid #ddd;
    max-width: 75%;
  }

  .user .text {
    text-align: right;
  }

  .notification-card {
    max-width: 400px;
    margin: 30px auto;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 16px;
    background-color: #fff;
  }

  .notification-footer {
    font-size: 14px;
    color: gray;
    text-align: center;
    margin-top: 10px;
  }

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
$mang_offdonhang = [
  ['tatca2', 'Tất cả', 'active', 'show active'],
  ['choxacnhan2', 'Chờ xác nhận', '', ''],
  ['daxacnhan2', 'Đã xác nhận', '', ''],
  ['dahoanthanh2', 'Đã hoàn thành', '', ''],
];

?>
<div class="container-fluid p-1 ">
  <div class="row">
    <div class="col-12">
      <!-- Wrapper để cuộn ngang khi tràn -->
      <div class="thanhcroll">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="min-width: max-content;">
            <?php foreach ($mang_offdonhang as $key => $valoffdh) { ?>
              <button class="nav-link <?php echo $valoffdh[2] ?>" id="nav-<?php echo $valoffdh[0] ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $valoffdh[0] ?>"
                type="button" role="tab" aria-controls="nav-<?php echo $valoffdh[0] ?>" aria-selected="true"><?php echo $valoffdh[1] ?></button>
            <?php } ?>
          </div>
        </nav>
      </div>

      <div class="tab-content " id="nav-tabContent" style=" overflow-y:auto;height:85vh">
        <?php foreach ($mang_offdonhang as $key => $valoffdh) { ?>
          <div class="tab-pane fade <?php echo $valoffdh[3] ?>" id="nav-<?php echo $valoffdh[0] ?>" role="tabpanel" aria-labelledby="nav-<?php echo $valoffdh[0] ?>-tab">
            <?php require "mvc/views/theme/mau/maudata/maudonhangmb.php"; ?>
          </div>
        <?php } ?>
      </div>



    </div>
  </div>
</div>