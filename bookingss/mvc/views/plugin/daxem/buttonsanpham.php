<!-- nhớ require taosanpham vao sanphamdetail -->
<!-- <div onclick="window.location.href='daxem/sanphamdaxem'" style="cursor: pointer;">
  <i class="bi bi-heart " style="font-size: 25px"></i>
</div> -->


<button type="button" class="btn btn-primary position-relative p-0" style="background-color:rgba(0, 0, 0, 0); border:0px" onclick="window.location.href='daxem/sanphamdaxem'">
  <i class="bi bi-heart text-black" style="font-size: 25px"></i>
  <span class="position-absolute top-0 start-75 translate-middle badge rounded-pill bg-danger loaddaxem">
    <?php if(@$_SESSION['tongxem']){ echo $_SESSION['tongxem'];} else { echo '0';} ?>
  </span>
</button>