<?php
$mang_donhang = [
  ['tatca', 'Tất cả', 'active', 'show active', -1],
  ['choxacnhan', 'Chờ xác nhận', '', '', 1],
  ['daxacnhan', 'Đã xác nhận', '', '', 2],
  ['chochuyencoc', 'Chờ chuyển cọc', '', '', 3],
  ['xacnhanchuyencoc', 'Xác nhận chuyển cọc', '', '', 4],
  ['dadat', 'Đã đặt', '', '', 5],
  ['dahuy', 'Đã hủy', '', '', 0],
];

// Giả định $mang_listdonhang2 đã được truyền từ controller vào $data
$mang_listdonhang2 = json_decode($data['order']);
?>

<style>
  .tab-scroll-dh::-webkit-scrollbar {
    display: none;
  }
</style>

<div class="p-3">
  <ul class="nav nav-tabs" id="donhangTab" role="tablist">
    <?php foreach ($mang_donhang as $valdh): ?>
      <li class="nav-item" role="presentation">
        <button class="nav-link <?= $valdh[2] ?>" id="<?= $valdh[0] ?>-tab" data-bs-toggle="tab"
                data-bs-target="#<?= $valdh[0] ?>" type="button" role="tab"
                aria-controls="<?= $valdh[0] ?>" aria-selected="true"><?= $valdh[1] ?></button>
      </li>
    <?php endforeach; ?>
  </ul>

  <div class="tab-content tab-scroll-dh" id="donhangTabContent" style="overflow-y: auto; height:80vh;">
    <?php foreach ($mang_donhang as $valdh):
      $id_tab = $valdh[0];
      $trang_thai_loc = $valdh[4]; // Trạng thái cần lọc
    ?>
      <div class="tab-pane fade <?= $valdh[3] ?>" id="<?= $valdh[0] ?>" role="tabpanel"
           aria-labelledby="<?= $valdh[0] ?>-tab">
        <?php include "mvc/views/theme/mau/maudata/maudonhangpc.php"; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
