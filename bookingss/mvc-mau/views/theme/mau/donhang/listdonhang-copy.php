<style>
  .modal-backdrop.show {
    opacity: 0 !important;
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
<div class="p-3 ">
  <div class="row">
    <ul class="nav nav-tabs tab-scroll" id="donhang1Tab" role="tablist">
      <?php
      foreach ($mang_offdonhang as $key => $valoffdh) {
      ?>
        <li class="nav-item" role="presentation">
          <button class="nav-link <?php echo $valoffdh[2] ?>" id="<?php echo $valoffdh[0] ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $valoffdh[0] ?>" type="button" role="tab"
            aria-controls="<?php echo $valoffdh[0] ?>" aria-selected="true"><?php echo $valoffdh[1] ?></button>
        </li>
      <?php
      }
      ?>
    </ul>
    <div class="tab-content" id="donhang1TabContent">
      <?php
      foreach ($mang_offdonhang as $key => $valoffdh) {
      ?>
        <div class="tab-pane fade show <?php echo $valoffdh[3] ?>" id="<?php echo $valoffdh[0] ?>" role="tabpanel" aria-labelledby="<?php echo $valoffdh[0] ?>-tab">
          <?php require "mvc/views/theme/mau/maunavtab/maudonhang2.php"; ?>
        </div>

      <?php
      }
      ?>
    </div>
  </div>

</div>