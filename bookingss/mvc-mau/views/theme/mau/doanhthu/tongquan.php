<?php
$mang_doanhthu = [
  ['ngay', 'Ngày', 'active', 'show active'],
  ['thang', 'Tháng', '', ''],
  ['nam', 'Năm', '', ''],
];

?>
<div class="">
  <ul class="nav nav-tabs" id="doanhthuTab" role="tablist">
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
  <div class="tab-content mt-3" id="doanhthuTabContent">
    <?php
    foreach ($mang_doanhthu as $key => $valdth) {
    ?>
      <div class="tab-pane fade show <?php echo $valdth[3] ?>" id="<?php echo $valdth[0] ?>" role="tabpanel" aria-labelledby="<?php echo $valdth[0] ?>-tab">
        <?php require "mvc/views/theme/mau/maunavtab/maudth.php"; ?>
      </div>

    <?php
    }
    ?>

  </div>

</div>