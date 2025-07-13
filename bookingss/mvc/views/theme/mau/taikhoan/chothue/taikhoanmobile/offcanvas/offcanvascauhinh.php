 <?php
    $email = $_COOKIE['admin'];
    $khachthue = json_decode($this->model('customermodel')->where("email='{$email}'"));
    $mang['customer_name'] = $khachthue[0]->name;
    $mang['customer_email'] = $khachthue[0]->email;
    $mang['customer_phone'] = $khachthue[0]->phone;
    ?>
   <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body" style="overflow-y: auto;height:80vh">
                        <form class="text-black-50">
                            <!-- Tên trang web -->
                            <div class="mb-3">
                                <label for="siteName" class="form-label">Tên trang web</label>
                                <input type="text" class="form-control" id="siteName" value="Khách sạn Hoàng Gia">
                            </div>

                            <!-- Logo -->
                            <div class="mb-3">
                                <label for="siteLogo" class="form-label">Logo trang web</label>
                                <input type="file" class="form-control" id="siteLogo">
                            </div>

                            <!-- Mô tả -->
                            <div class="mb-3">
                                <label for="siteDescription" class="form-label">Mô tả ngắn</label>
                                <textarea class="form-control" id="siteDescription" rows="3">Hệ thống quản lý khách sạn và nhà hàng cao cấp</textarea>
                            </div>

                            <!-- Email quản trị -->
                            <div class="mb-3">
                                <label for="adminEmail" class="form-label">Email quản trị</label>
                                <input type="email" class="form-control" id="adminEmail" value="<?php echo $mang['customer_email'] ?>">
                            </div>

                            <!-- Trạng thái hoạt động -->
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="siteStatus" checked>
                                <label class="form-check-label" for="siteStatus">Trang web đang hoạt động</label>
                            </div>

                            <!-- Nút lưu -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-sm">Lưu cấu hình</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>