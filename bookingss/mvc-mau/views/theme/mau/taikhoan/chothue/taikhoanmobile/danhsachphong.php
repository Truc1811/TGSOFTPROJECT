 <?php
    $dsachphong = json_decode($data['service_detail']);
    ?>
 <!-- Modal -->
 <style>
     .tab-scroll-dsp::-webkit-scrollbar {
         display: none;
     }
 </style>
 <div class="container-fluid">
     <div class="row">
         <div class="d-flex justify-content-between bg-primary text-white mb-3">
             <!-- Tiêu đề -->
             <div>
                 <h5 class="p-2 mt-2 text-center fw-bold">Danh sách phòng</h5>
             </div>
             <!-- Nút quay lại -->
             <div class="dongdsphong p-3" title="Quay lại">
                 <i class="bi bi-arrow-left " style="font-size: 25px;"></i>
             </div>

         </div>
     </div>
     <div class="form-card p-2 bg-white">
         <div class="row">
             <?php foreach ($dsachphong as $key => $valdsp) { ?>
                 <div class="col-12">
                     <img src="public/upload/<?php echo $valdsp->image; ?>" class="object-fit-cover" alt="Ảnh tài sản 1" style="height: 180px; width: 100%; object-fit: cover;">
                     <p class="fs-5 fw-bold text-black-50"><?php echo $valdsp->name; ?></p>
                     <p class="fs-5 fw-bold text-black-50"><?php echo $valdsp->price; ?>&ensp;VND</p>
                     <p class="text-black-50"><?php echo $valdsp->content; ?></p>
                 </div>
                 <div class="border-bottom mb-3"></div>
             <?php } ?>
         </div>
     </div>
 </div>