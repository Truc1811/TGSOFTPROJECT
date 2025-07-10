 <?php
    $dsphong = json_decode($data['service_detail']);
    ?>
 <!-- Modal -->
 <style>
     .tab-scroll-dsp::-webkit-scrollbar {
         display: none;
     }

     .border-bottom {
         border-color: #e0e0e0 !important;
         /* màu nhạt hơn */
     }
 </style>
 <div class="modal fade mt-2" id="danh_sach_phongModal" tabindex="-1" aria-labelledby="danh_sach_phongModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog modal-xl tab-scroll-dsp" style="overflow-x: auto;height:90vh;">
         <div class="modal-content">
             <div class="modal-header bg-primary">
                 <h5 class="modal-title text-white" id="danh_sach_phongModalLabel">Danh sách phòng</h5>
                 <div data-bs-dismiss="modal" aria-label="Close" class="me-2"><i class="bi bi-arrow-left fs-5 text-white" style="cursor: pointer;"></i></div>
             </div>
             <div class="modal-body">
                 <div class="form-card p-4 bg-white rounded shadow-sm border-bottom">
                     <?php foreach ($dsphong as $valdsp) { ?>
                         <div class="row py-3 align-items-start">
                             <!-- Cột ảnh -->
                             <div class="col-md-3 mb-2 mb-md-0">
                                 <img src="public/upload/<?php echo $valdsp->image; ?>"
                                     class="object-fit-cover rounded-3 w-100"
                                     alt="Ảnh phòng"
                                     style="height: 150px; object-fit: cover;">
                             </div>

                             <!-- Cột tên và giá -->
                             <div class="col-md-4 mb-2 mb-md-0">
                                 <h5 class="mb-1"><?php echo $valdsp->name; ?></h5>
                                 <p class="fs-5 fw-bold text-danger"><?php echo $valdsp->price; ?>&ensp;VND</p>
                             </div>

                             <!-- Cột nội dung -->
                             <div class="col-md-5">
                                 <p class="text-black-50 mb-0"><?php echo $valdsp->content; ?></p>
                             </div>
                         </div>
                     <?php } ?>
                 </div>


             </div>

         </div>
     </div>
 </div>