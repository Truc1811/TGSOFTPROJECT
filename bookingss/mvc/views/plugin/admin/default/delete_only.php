<div class="d-flex justify-content-center">
    <div>
        <a class="p-1 text-black" 
        onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này?')" 
         href="admin/delete/<?php echo $db.'/'.$a.'/'.$value->id; ?>"
        >
        <i class="fas fa-trash-alt"></i>
        </a>
       
    </div>

</div>