 <?php
    $email = $_COOKIE['admin'];
    $khachthue = json_decode($this->model('customermodel')->where("email='{$email}'"));
    $mang['customer_email'] = $khachthue[0]->email;
    ?>
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Cấu hình Trang Web</h5>
                </div>
                <div class="card-body">
                    <form class="text-black-50">
                        <div class="row">
                            <!-- Tên và Logo -->
                            <div class="col-md-6 mb-3">
                                <label for="siteName" class="form-label fw-semibold fs-6">Tên trang web</label>
                                <input type="text" class="form-control form-control-sm" id="siteName" value="Khách sạn Hoàng Gia">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="siteLogo" class="form-label fw-semibold fs-6">Logo trang web</label>
                                <input type="file" class="form-control form-control-sm" id="siteLogo">
                            </div>

                            <!-- Mô tả -->
                            <div class="mb-3">
                                <label for="siteDescription" class="form-label fw-semibold fs-6">Mô tả ngắn</label>
                                <textarea class="form-control form-control-sm" id="siteDescription" rows="3">Hệ thống quản lý khách sạn và nhà hàng cao cấp</textarea>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="adminEmail" class="form-label fw-semibold fs-6">Email quản trị</label>
                                <input type="email" class="form-control form-control-sm" id="adminEmail" value="<?php echo $mang['customer_email'] ?>">
                            </div>

                        </div>

                        <!-- Trạng thái -->
                        <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" id="siteStatus" checked>
                            <label class="form-check-label" for="siteStatus">Trang web đang hoạt động</label>
                        </div>

                        <!-- Nút lưu -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="bi bi-save"></i> Lưu cấu hình
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>