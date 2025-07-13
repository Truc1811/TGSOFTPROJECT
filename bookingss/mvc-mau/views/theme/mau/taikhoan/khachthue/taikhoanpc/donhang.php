<?php
$mang_donhang = [
  ['tatca', 'Tất cả', 'active', 'show active'],
  ['choxacnhan', 'Chờ xác nhận', '', ''],
  ['daxacnhan', 'Đã xác nhận', '', ''],
  ['dahoanthanh', 'Đã hoàn thành', '', ''],
  ['donhuy', 'Đơn hủy', '', ''],
];

?>
<div class="p-3">
  <ul class="nav nav-tabs" id="donhangTab" role="tablist">
    <?php
    foreach ($mang_donhang as $key => $valdh) {
    ?>
      <li class="nav-item" role="presentation">
        <button class="nav-link <?php echo $valdh[2] ?>" id="<?php echo $valdh[0] ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $valdh[0] ?>" type="button" role="tab"
          aria-controls="<?php echo $valdh[0] ?>" aria-selected="true"><?php echo $valdh[1] ?></button>
      </li>
    <?php
    }
    ?>
  </ul>
  <div class="tab-content" id="donhangTabContent" style="overflow-y: auto;height:80vh;">
    <?php
    foreach ($mang_donhang as $key => $valdh) {
    ?>
      <div class="tab-pane fade show <?php echo $valdh[3] ?>" id="<?php echo $valdh[0] ?>" role="tabpanel" aria-labelledby="<?php echo $valdh[0] ?>-tab">
        <?php require "mvc/views/theme/mau/maudata/maudonhangpc.php"; ?>
      </div>

    <?php
    }
    ?>

  </div>

</div>