
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-end">
            <?php 
            echo ($start+1)."-".$end." trong số ".$total." giao dịch";
            ?>
        </div>
        
    </div>
     
 </div>
<!-- Loop through each transaction -->
<?php foreach ($mang as $key => $t) {

       
      $amountPrefix='';
      if($t->type==='deposit'){
        $amountPrefix='+';
        $color='bi bi-plus-lg ';
        $bg='bg-success';
      }else if($t->type==='withdraw'){
        $amountPrefix='-';
        $color='bi bi-dash-lg ';
        $bg='bg-danger';
      }else if($t->type==='investment'){
        $amountPrefix='-';
        $color='bi bi-arrow-up-right ';
        $bg='bg-primary';
      }
        else if($t->type==='repayment'){
        $amountPrefix='-';
        $color='bi bi-arrow-up-right ';
        $bg='bg-warning';
      }else if($t->type==='interest'){
        $amountPrefix='-';
        $color='bi bi-arrow-down-left ';
        $bg='bg-danger';
      }



?>

<li class="list-group-item d-flex justify-content-between align-items-start transaction-list">
    <div class="d-flex align-items-start">
        <div class="me-3 mt-1">
            <div class="<?= $bg;?> text-white rounded-circle d-flex justify-content-center align-items-center"
                style="width: 24px; height: 24px;">
                <i class="<?php echo $color; ?>"></i> <!-- Use the color variable -->
                <!-- FontAwesome icon -->
            </div>
        </div>
        <div>
            <div class="fw-semibold"><?php echo htmlspecialchars($t->type); ?></div>
            <div class="text-muted small">
                <?php
                echo date('Y-m-d H:i:s',strtotime($t->create_date)); 
                ?>
            </div>

        </div>
    </div>
    <div class="text-end">
        <div id="desposit-withdraw"
            class=" fw-bold text-<?php echo ($amountPrefix == '+') ? 'success' : 'danger'; ?>">
            <?php echo $amountPrefix . number_format($t->amount, 0, ',', '.') . ' VND'; ?>
        </div>
        <div class="text-muted small">
            <?php echo htmlspecialchars($t->description); ?>
        </div>
    </div>
</li>
<?php } ?>

 


