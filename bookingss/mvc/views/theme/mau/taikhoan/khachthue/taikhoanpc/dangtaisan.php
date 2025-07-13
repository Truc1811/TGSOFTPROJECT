  <style>
      .form-card {
          max-width: 600px;
          margin: auto;
          border-radius: 15px;
      }
  </style>
  <!-- Modal -->
  <div class="modal fade mt-2" id="dangtaisanModal" tabindex="-1" aria-labelledby="dangtaisanModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header bg-primary">
                  <h5 class="modal-title text-white" id="dangtaisanModalLabel">Đăng tài sản</h5>
                  <div  data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-arrow-left fs-5 text-white"></i></div>
              </div>
              <div class="modal-body">
                  <div class="container py-5">
                      <div class="form-card shadow-lg p-4">
                          <h2 class="text-center text-primary">Đăng Ký Tài Sản</h2>

                          <form class="text-black-50">
                              <div class="mb-3">
                                  <label for="assetName" class="form-label">Tên tài sản</label>
                                  <input type="text" class="form-control" id="assetName" placeholder="Nhập tên tài sản" required>
                              </div>

                              <div class="mb-3">
                                  <label for="assetType" class="form-label">Loại tài sản</label>
                                  <select class="form-select" id="assetType" required>
                                      <option value="">-- Chọn loại tài sản --</option>
                                      <option>Căn Hộ</option>
                                      <option>Chung Cư</option>
                                      <option>Resort</option>
                                      <option>Villa</option>
                                  </select>
                              </div>

                              <div class="mb-3">
                                  <label for="assetDesc" class="form-label">Mô tả tài sản</label>
                                  <textarea class="form-control" id="assetDesc" rows="3" placeholder="Mô tả ngắn gọn..."></textarea>
                              </div>

                              <div class="mb-3">
                                  <label for="assetValue" class="form-label">Giá trị (VNĐ)</label>
                                  <input type="number" class="form-control" id="assetValue" placeholder="Nhập giá trị" required>
                              </div>

                              <div class="mb-3">
                                  <label for="assetImage" class="form-label">Ảnh tài sản</label>
                                  <input class="form-control" type="file" id="assetImage">
                              </div>

                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                  <button type="submit" class="btn btn-primary btn-sm">Đăng ký</button>
                                  <button type="reset" class="btn btn-outline-secondary btn-sm">Làm lại</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>