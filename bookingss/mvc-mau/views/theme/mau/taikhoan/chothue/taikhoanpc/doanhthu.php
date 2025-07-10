<?php
$mang_doanhthupc = [
  ['ngay', 'Ngày', 'active', 'show active', 'doanhthungay'],
  ['thang', 'Tháng', '', '', 'doanhthuthang'],
  ['nam', 'Năm', '', '', 'doanhthunam'],
];

?>




<nav class="p-3">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <?php
    foreach ($mang_doanhthupc as $key => $valdthpc) {
    ?>
      <button class="nav-link <?php echo $valdthpc[2] ?>" id="nav-<?php echo $valdthpc[0] ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $valdthpc[0] ?>" type="button" role="tab" aria-controls="nav-<?php echo $valdthpc[0] ?>" aria-selected="true">
        <?php echo $valdthpc[1] ?>
      </button>
    <?php
    }
    ?>
  </div>
</nav>

<div class="tab-content p-3" id="nav-tabContent">
  <?php
  foreach ($mang_doanhthupc as $key => $valdthpc) {
  ?>
    <div class="tab-pane fade <?php echo $valdthpc[3] ?>" id="nav-<?php echo $valdthpc[0] ?>" role="tabpanel" aria-labelledby="nav-<?php echo $valdthpc[0] ?>-tab">
      <?php require "mvc/views/theme/mau/maudata/$valdthpc[4].php"; ?>
    </div>
  <?php
  }
  ?>
</div>