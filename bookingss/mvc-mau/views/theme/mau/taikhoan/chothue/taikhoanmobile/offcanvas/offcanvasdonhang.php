<style>
  .nav-tabs {
    border-bottom: 1px solid #dee2e6;
  }

  .nav-tabs .nav-link {
    color: #333;
    font-size: 14px;
    padding: 10px 12px;
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

  .hide-scrollbar {
    overflow-y: auto;
    height: 80vh;
    scrollbar-width: none;
    /* Firefox */
    -ms-overflow-style: none;
    /* IE 10+ */
  }

  .hide-scrollbar::-webkit-scrollbar {
    display: none;
    /* Chrome, Safari */
  }

 
</style>
<?php
$mang_offdonhang = [
  ['tatcamb', 'Tất cả', 'active', 'show active'],
  ['choxacnhanmb', 'Chờ xác nhận', '', ''],
  ['daxacnhanmb', 'Đã xác nhận', '', ''],
  ['dahoanthanhmb', 'Đã hoàn thành', '', ''],
];

?>
<div class="container-fluid p-2">
  <div class="row">
    <div class="col-12">
      <!-- Wrapper để cuộn ngang khi tràn -->
      <div class="">
          <div class="tab-nav-wrapper" style="overflow-x: auto; white-space: nowrap; -ms-overflow-style: none; scrollbar-width: none;">
          <div class="nav nav-tabs d-inline-flex" id="nav-tab" role="tablist" style="min-width: max-content;">
            <?php foreach ($mang_offdonhang as $key => $valoffdh) { ?>
              <button class="nav-link <?php echo $valoffdh[2] ?>" id="nav-<?php echo $valoffdh[0] ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $valoffdh[0] ?>"
                type="button" role="tab" aria-controls="nav-<?php echo $valoffdh[0] ?>" aria-selected="true"><?php echo $valoffdh[1] ?></button>
            <?php } ?>
          </div>
            </div>
        </nav>
      </div>

      <div class="tab-content hide-scrollbar" id="nav-tabContent ">
        <?php foreach ($mang_offdonhang as $key => $valoffdh) {
          $tab_status = $valoffdh[0];
        ?>
          <div class="tab-pane fade <?php echo $valoffdh[3] ?>" id="nav-<?php echo $valoffdh[0] ?>" role="tabpanel" aria-labelledby="nav-<?php echo $valoffdh[0] ?>-tab">
            <?php require "mvc/views/theme/mau/maudata/maudonhangmb.php"; ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>