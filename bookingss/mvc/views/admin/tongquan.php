<?php
        $a=@json_decode($data['numpage']);
        $so=@json_decode($data['sumpage']);
        $db=str_replace('default','',json_decode($data['page']));
        $title_name='Tổng quan';
        
        $dm=json_decode($data['dm']);
?>
<script>
$(document).ready(function(){
    $('#checkall').click(function(){
        var check=$('#checkall').is(':checked');
        if(check){
            $('.thecheck').prop('checked',true);
        } else {
            $('.thecheck').prop('checked',false);
        }       
    });


     $('.giatriloc').change(function(){
        var giatri=$(this).val();
        var a="<?php echo $a; ?>";
        var dd='<?php echo $dm ?>admin/listr/sanpham/'+a+'/'+giatri;
        $('.locsp').attr('href',dd);
    });

    $('.themspc').click(function(){
        var id=$(this).data('id');
        var a="<?php echo $a; ?>";
        $.post(
                    'ajax/loadformspc', // URL 
                    {'id' : id,'a':a},  // Data
                    function(kqlsp){ // Success
                        $('.loadspc').html(kqlsp);
                    }, 
                    'text' // dataTyppe
            );
    });
});
</script>

        <!-- tren -->
        <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height:6vh">
              
            <div class="fs-5 fw-bold px-2">
                <?php echo $title_name; ?>
            </div>
            <div class="d-flex px-2">
               
              
            </div>
        </div>
        <!-- duoi -->
        <div class="p-6 overflow-auto scrollbar d-flex flex-wrap col-12 bg-light py-3 align-content-start" style="height:86vh">
            <div class="col-6 col-md-3 p-2">
                <div class="bg-white p-3 d-flex flex-wrap justify-content-between rounded-3">
                    <div class="col-4 d-flex align-items-center">
                        <i class="bi bi-person-arms-up fs-48"></i>
                    </div>
                    <div class="col-8">
                        <p class="text-black-50 text-end">Page view</p>
                        <h1 class="text-end">38</h1>
                    </div>
                </div>
                <div class="bg-warning text-white p-3 d-flex flex-wrap justify-content-between">
                    <div class="col-auto"><i class="bi bi-arrow-up"></i> 2,3%</div>
                    <div class="col-auto">Total</div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-2">
                <div class="bg-white p-3 d-flex flex-wrap justify-content-between rounded-3">
                    <div class="col-4 d-flex align-items-center">
                       <i class="bi bi-box-seam-fill fs-48"></i>
                    </div>
                    <div class="col-8">
                        <p class="text-black-50 text-end">Giao dịch</p>
                        <h1 class="text-end">2</h1>
                    </div>
                </div>
                <div class="bg-primary text-white p-3 d-flex flex-wrap justify-content-between">
                    <div class="col-auto"><i class="bi bi-arrow-up"></i> 100%</div>
                    <div class="col-auto">Total</div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-2">
                <div class="bg-white p-3 d-flex flex-wrap justify-content-between rounded-3">
                    <div class="col-4 d-flex align-items-center">
                       <i class="bi bi-cart-fill fs-48"></i>
                    </div>
                    <div class="col-8">
                        <p class="text-black-50 text-end">Khách hàng</p>
                        <h1 class="text-end">0</h1>
                    </div>
                </div>
                <div class="bg-success text-white p-3 d-flex flex-wrap justify-content-between">
                    <div class="col-auto"><i class="bi bi-arrow-up"></i> 0%</div>
                    <div class="col-auto">Total</div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-2">
                <div class="bg-white p-3 d-flex flex-wrap justify-content-between rounded-3">
                    <div class="col-4 d-flex align-items-center">
                       <i class="bi bi-cash-coin fs-48"></i>
                    </div>
                    <div class="col-8">
                        <p class="text-black-50 text-end">Doanh thu</p>
                        <h1 class="text-end">0</h1>
                    </div>
                </div>
                <div class="bg-info text-white p-3 d-flex flex-wrap justify-content-between">
                    <div class="col-auto"><i class="bi bi-arrow-up"></i> 0%</div>
                    <div class="col-auto">Total</div>
                </div>
            </div>


            <!-- bieu do -->
            <div class="col-12 col-md-6 p-2 ">
                <div class="bg-white p-3 rounded-3">
                    <h5>Biểu đồ doanh thu</h5>
                    <div>
                      <canvas id="myChart"></canvas>
                    </div>
                    
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                  const ctx = document.getElementById('myChart');

                  new Chart(ctx, {
                    type: 'bar',
                    data: {
                      labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
                      datasets: [{
                        label: 'Doanh thu ( vnđ)',
                        data: [0, 0, 0, 0, 0, 0],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                </script>
 
            </div>
            <div class="col-12 col-md-6 p-2 ">
                <div class="bg-white p-3 h-100 rounded-3">
                    <h5>Giao dịch mới nhất</h5>
                    <div>
                        Đang cập nhật...
                    </div>
                </div>
            </div>
           
           
        </div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sanphamcon">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="sanphamcon" tabindex="-1" aria-labelledby="sanphamconLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm con</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body loadspc">
        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
