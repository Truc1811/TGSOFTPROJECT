<style type="text/css">
  .popup{
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.9);
    z-index: 999;
    display: none;
  }

</style>


<script>
$(document).ready(function(){
  //   setTimeout(function(){
  //     $('.popup').fadeIn();
  // }, 2000);
})
</script>

<div class="popup container-fluid">
  <div class="row d-flex flex-wrap align-content-center justify-content-center h-100">
    <div class="col-12 col-md-6 d-flex flex-wrap bg-white p-5 rounded-3">
      <div class=" col-12 text-center fs-3 mb-3">
          Bạn là ai ?
      </div>
      <div class="col-6 btn btn-primary" onclick="window.location.href='dang-ky'">
        Nhà tuyển dụng
      </div>
      <div class="col-6 btn btn-danger" onclick="window.location.href='dang-ky-ung-vien'">
        Người tìm việc
      </div>

    </div>
  </div>  
</div>