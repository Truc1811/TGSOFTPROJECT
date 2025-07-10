 <div class="container-fluid">
     <div class="row ">
        <div class="d-flex justify-content-between bg-primary text-white mb-3">
             <!-- Tiêu đề -->
             <div>
                 <h5 class="p-2 mt-2 text-center fw-bold">Đăng tài sản</h5>
             </div>
             <!-- Nút quay lại -->
             <div class="dongdts p-3" title="Quay lại">
                 <i class="bi bi-arrow-left " style="font-size: 25px;"></i>
             </div>

         </div>
         <div class="card border-0">
             <form class="text-black-50 " method="post" action="taisan/dangtaisan" enctype="multipart/form-data" id="myForm" onsubmit="return ktform()">

                 <!-- Cột trái -->
                 <div class="col-12">
                     <div class="mb-3">
                         <label for="tentaisan" class="form-label fw-semibold fs-6">Tên tài sản</label>
                         <input type="text" class="form-control form-control-sm" id="tentaisan" name="name">
                     </div>
                     <div class="mb-3">
                         <label for="diachi" class="form-label fw-semibold fs-6">Địa chỉ</label>
                         <input type="text" class="form-control form-control-sm" id="diachi" name="address">
                     </div>
                     <div class="mb-3">
                         <label for="content" class="form-label fw-semibold fs-6">Content</label>
                         <input type="text" class="form-control form-control-sm" id="content" name="content">
                     </div>
                     <div class="mb-3">
                         <label for="phone" class="form-label fw-semibold fs-6">Số điện thoại</label>
                         <input type="number" class="form-control form-control-sm ktsdt" id="phone" name="phone">
                         <div id="ktsdt" class="form-text"></div>
                     </div>
                     <div class="mb-3">
                         <label for="image" class="form-label">Hình đại diện (*) (780 x 438)</label>
                         <input type="file" name="image" class="form-control form-control-sm" id="image" required>
                     </div>

                     <div class="mb-3">
                         <label class="form-label">Loại</label>
                         <div class="">
                             <select class="form-select" aria-label="Default select example">
                                 <option selected>Chọn loại</option>
                                 <option value="1" name="hide">Resort</option>
                                 <option value="2" name="hide">Hotel</option>
                                 <option value="3" name="hide">Homestay</option>
                             </select>
                         </div>
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
         <div class="text-end mt-1">
             <input type="submit" name="submit" class="btn btn-primary btn-sm px-4" value="Lưu">
         </div>
         </form>
     </div>
 </div>