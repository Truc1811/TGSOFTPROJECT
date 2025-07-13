 <div class="container">
     <div class="row ">
         <div class="d-flex justify-content-between bg-primary text-white mb-3">
             <!-- Tiêu đề -->
             <div>
                 <h5 class="p-2 mt-2 text-center fw-bold">Thêm phòng</h5>
             </div>
             <!-- Nút quay lại -->
             <div class="dongthemphong p-3" title="Quay lại">
                 <i class="bi bi-arrow-left " style="font-size: 25px;"></i>
             </div>

         </div>

         <div class="card border-0">
             <form class="text-black-50" method="post" action="taisan/dangtaisan_chitiet" enctype="multipart/form-data" id="myFormdts" onsubmit="return ktformpc()">
                 <div class="row g-4">
                     <!-- Cột trái -->
                     <div class="col-md-6">
                         <div class="mb-3">
                             <label for="tentaisan" class="form-label fw-semibold fs-6">Tên tài sản</label>
                             <input type="text" class="form-control form-control-sm" id="tentaisan" name="name">
                         </div>
                         <div class="mb-3">
                             <label for="price" class="form-label fw-semibold fs-6">Giá</label>
                             <input type="text" class="form-control form-control-sm" id="price" name="price">
                         </div>
                         <div class="mb-3">
                             <label for="discount" class="form-label fw-semibold fs-6">Giá giảm</label>
                             <input type="text" class="form-control form-control-sm" id="discount" name="discount">
                         </div>
                         <div class="mb-3">
                             <label for="content" class="form-label fw-semibold fs-6">Mô tả</label>
                             <input type="text" class="form-control form-control-sm" id="content" name="content">
                         </div>

                     </div>

                     <!-- Cột phải -->
                     <div class="col-md-6">
                         <div class="mb-3">
                             <label for="image" class="form-label">Hình đại diện (*) (780 x 438)</label>
                             <input type="file" name="image" class="form-control form-control-sm" id="image" required>
                         </div>

                         <div class="mb-3">
                             <label for="meta_keywords" class="form-label">SEO Keywords (*)</label>
                             <input type="text" name="meta_keywords" class="form-control form-control-sm" id="meta_keywords" required>
                         </div>
                         <div class="mb-3">
                             <label for="meta_description" class="form-label">Mô tả - SEO Description (*)</label>
                             <input type="text" name="meta_description" class="form-control form-control-sm" id="meta_description" required>
                         </div>

                     </div>
                 </div>

                 <!-- Nút lưu -->
                 <div class="text-end mt-4">
                     <input type="submit" name="submit" class="btn btn-primary btn-sm px-4" id="" value="Lưu">
                 </div>
             </form>
         </div>

     </div>
</div>
    