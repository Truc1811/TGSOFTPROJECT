  <style>
      .dang_tai_san_pc::-webkit-scrollbar {
          display: none;
      }
  </style>
  <!-- Modal -->
  <div class="modal fade mt-2" id="dangtaisanModal" tabindex="-1" aria-labelledby="dangtaisanModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-xl modal-dialog-scrollable dang_tai_san_pc">
          <div class="modal-content">
              <div class="modal-header bg-primary">
                  <h5 class="modal-title text-white" id="dangtaisanModalLabel">Đăng tài sản</h5>
                  <div data-bs-dismiss="modal" aria-label="Close" class="me-2"><i class="bi bi-arrow-left fs-5 text-white" style="cursor: pointer;"></i></div>
              </div>
              <div class="modal-body">
                  <div class="form-card p-4 bg-white rounded shadow-sm">
                      <form class="text-black-50" method="post" action="taisan/dangtaisan" enctype="multipart/form-data" id="myFormdts" onsubmit="return ktformpc()">
                          <div class="row g-4">
                              <!-- Cột trái -->
                              <div class="col-md-6">
                                  <div class="mb-3">
                                      <label for="tentaisan" class="form-label fw-semibold fs-6">Tên tài sản</label>
                                      <input type="text" class="form-control form-control-sm" id="tentaisan" name="name">
                                  </div>
                                  <div class="mb-3">
                                      <label for="image" class="form-label">Hình đại diện (*) (780 x 438)</label>
                                      <input type="file" name="image" class="form-control form-control-sm" id="image" required>
                                  </div>

                                  <div class="mb-3">
                                      <label for="diachi" class="form-label fw-semibold fs-6">Địa chỉ</label>
                                      <input type="text" class="form-control form-control-sm" id="diachi" name="address">
                                  </div>
                                  <div class="mb-3">
                                      <label for="phone" class="form-label fw-semibold fs-6">Số điện thoại</label>
                                      <input type="number" class="form-control form-control-sm " id="phone" name="phone">
                                  </div>

                              </div>

                              <!-- Cột phải -->
                              <div class="col-md-6">

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
                              <div class="mb-3">
                                  <label for="image" class="form-label">Nội dung</label>
                                  <textarea id="ckeditordangtaisan" name="content" class="form-control form-control-sm"></textarea>
                                  <script>
                                      CKEDITOR.replace('ckeditordangtaisan');
                                  </script>
                              </div>
                          </div>

                          <!-- Nút lưu -->
                          <div class="text-end mt-4">
                              <input type="submit" name="submit" class="btn btn-primary btn-sm px-4" id="nut_dang_tai_san" value="Lưu">
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
  </div>