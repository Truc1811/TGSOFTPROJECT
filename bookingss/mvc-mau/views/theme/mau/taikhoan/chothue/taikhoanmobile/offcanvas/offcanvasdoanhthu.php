<?php
$mang_doanhthu = [
  ['ngay', 'Ngày', 'active', 'show active','doanhthungaymb'],
  ['thang', 'Tháng', '', '','doanhthuthangmb'],
  ['nam', 'Năm', '', '','doanhthunammb'],
];

?>
<div class="container-fluid">
  <ul class="nav nav-tabs mb-1" id="doanhthuTab" role="tablist">
    <?php
    foreach ($mang_doanhthu as $key => $valdth) {
    ?>
      <li class="nav-item" role="presentation">
        <button class="nav-link <?php echo $valdth[2] ?>" id="<?php echo $valdth[0] ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $valdth[0] ?>" type="button" role="tab"
          aria-controls="<?php echo $valdth[0] ?>" aria-selected="true"><?php echo $valdth[1] ?></button>
      </li>
    <?php
    }
    ?>
  </ul>
  <div class="tab-content mt-2" id="doanhthuTabContent">
    <?php
    foreach ($mang_doanhthu as $key => $valdth) {
    ?>
      <div class="tab-pane fade show <?php echo $valdth[3] ?>" id="<?php echo $valdth[0] ?>" role="tabpanel" aria-labelledby="<?php echo $valdth[0] ?>-tab">
        <?php require "mvc/views/theme/mau/maudata/$valdth[4].php"; ?>
      </div>

    <?php
    }
    ?>

  </div>

</div>