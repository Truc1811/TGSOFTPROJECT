<div class="d-flex justify-content-center">
    <a class="btn btn-primary me-2"
        href="admin/update/<?php echo $db; ?>/<?php echo $a.'/'.$value->id; ?>" 
    >
          <i class="bi bi-pencil-square"></i>
    </a>
    
    <a class="btn btn-danger me-2" 
    onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này?')" 
     href="admin/delete/<?php echo $db.'/'.$a.'/'.$value->id; ?>"
    >
        <i class="bi bi-trash"></i>
    </a>
    
       
    
</div>