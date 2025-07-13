<div class="d-flex justify-content-center">
    <div class="me-2 p-1 cursor" >
          <i class="fas fa-pen-fancy cursor_pointer"></i>
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#showhoadon<?php echo $value->id;  ?>Modal"></i>
    </div>

</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showhoadon<?php echo $value->id;  ?>Modal">
  Launch demo modal
</button>
 -->
<!-- Modal -->
<div class="modal fade" id="showhoadon<?php echo $value->id;  ?>Modal" tabindex="-1" aria-labelledby="showhoadon<?php echo $value->id;  ?>ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showhoadon<?php echo $value->id;  ?>ModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>