<div class="d-flex justify-content-center">
  <div class="me-2 p-1 cursor" >
    <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#showhoadon<?php echo $value->id;  ?>Modal"></i>
  </div>

</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showhoadonModal">
  Launch demo modal
</button>
-->
<!-- Modal -->
<div class="modal fade" id="showhoadon<?php echo $value->id;  ?>Modal" tabindex="-1" aria-labelledby="showhoadon<?php echo $value->id;  ?>ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showhoadon<?php echo $value->id;  ?>ModalLabel">Hóa đơn chi tiết</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên KH</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Số lương</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $kho=json_decode($data['kho']);
            foreach ($kho as $key => $valkho) {
              if($valkho->id_hoadon==$value->id){
                ?>

                <tr>
                  <td class="align-middle text-center" scope="row"><?php echo $valkho->id_hoadon ?></td>
                  <td><?php echo $value->name ?></td>
                  <td class="align-middle text-center" scope="row">
                    <?php 
                    if($value->status==1){
                      echo 'mua vào';
                    }else{
                      echo 'bán ra';
                    }

                    ?>
                  </td>
                  <td class="align-middle text-center"><?php echo $valkho->name_t ?></td>
                  <td class="align-middle text-center"><?php echo $valkho->so_luong_ton ?></td>
                </tr>

                <?php
              }
            }
            ?>


          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>