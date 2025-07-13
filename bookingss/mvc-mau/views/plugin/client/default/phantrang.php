<div class="d-flex align-items-center">
    Trang
</div>
<?php
for($i=1;$i<=$so;$i++){
?>
    <div class="ms-3 px-2 py-1 text-white btn btn-primary <?php if($a==$i){ echo 'btn-danger';} ?>"
        onclick="window.location.href='admin/listr/<?php echo $db.'/'.$i; ?>'" 
        
     >
        <?php echo $i; ?>
    </div>
<?php
}
?>