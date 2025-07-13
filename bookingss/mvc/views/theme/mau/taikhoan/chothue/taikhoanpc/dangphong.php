 
 <?php
 $service=json_decode($data['service']);
 
 ?>
 <!-- Modal -->
  <div class="modal fade mt-2" id="dang_phongModal" tabindex="-1" aria-labelledby="dang_phongModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-xl modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header bg-primary">
                  <h5 class="modal-title text-white" id="dang_phongModalLabel">Thêm phòng</h5>
                  <div data-bs-dismiss="modal" aria-label="Close" class="me-2"><i class="bi bi-arrow-left fs-5 text-white" style="cursor: pointer;"></i></div>
              </div>
              <div class="modal-body">
                  <div class="form-card p-4 bg-white rounded shadow-sm">
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
                                      <label for="discount" class="form-label fw-semibold fs-6">Chọn tài sản</label>
                                      <select class="form-select" name="service_id" aria-label="Default select example">
                                          <option selected>Chọn tài sản</option>
                                          <?php foreach ($service as $key => $value) {?>
                                              <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                            
                                         <?php }?>
                                      
                                      </select>
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
                              <div class="mb-3">
                                  <label for="image" class="form-label">Nội dung</label>
                                  <textarea id="ckeditorthemphong" name="content" class="form-control form-control-sm"></textarea>
                                  <script>
                                      CKEDITOR.replace('ckeditorthemphong');
                                  </script>
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
      </div>
  </div>