<div class="d-flex justify-content-center">
    
    <div class="me-2 p-1 cursor" 
        onclick="window.location.href='admin/update/<?php echo $db; ?>/<?php echo $a.'/'.$value->id; ?>'"
    >
          <i class="fas fa-pen-fancy cursor_pointer"></i>
    </div>
    <div class="ms-2 me-2">
        <a class="p-1 text-black" 
        onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này?')" 
         href="admin/delete/<?php echo $db.'/'.$a.'/'.$value->id; ?>"
        >
        <i class="fas fa-trash-alt"></i>
        </a>
       
    </div>
    <div class="mx-2 p-1 cursor themspc" 
        data-bs-toggle="modal" data-bs-target="#sanphamcon" data-id="<?php echo $value->id; ?>"
    >
         <i class="bi bi-plus-square-fill"></i>
    </div>

</div>