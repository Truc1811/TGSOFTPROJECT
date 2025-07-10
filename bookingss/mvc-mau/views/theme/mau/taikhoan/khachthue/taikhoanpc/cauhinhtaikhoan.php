 <?php
    $email = $_COOKIE['admin'];
    $khachthue = json_decode($this->model('customermodel')->where("email='{$email}'"));
    $mang['customer_name'] = $khachthue[0]->name;
    $mang['customer_email'] = $khachthue[0]->email;
    $mang['customer_phone'] = $khachthue[0]->phone;
    ?>
<style>
    .tab-scroll {
        max-height: 500px;
        overflow-y: auto;
    }
</style>

<div class="container-fluid p-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Cấu hình tài khoản</h5>
                </div>
                <div class="card-body tab-scroll">

                    <!-- Ảnh đại diện -->
                    <div class="text-center mb-4">
                        <img src="public/upload/admin.jpg" alt="Avatar" class="rounded-circle mb-2" width="80" height="80">
                        <div>
                            <button class="btn btn-sm btn-outline-primary">Thay ảnh đại diện</button>
                        </div>
                    </div>

                    <!-- Form chia làm 2 cột ngang nhau -->
                    <form class="text-black-50">
                        <div class="row">
                            <!-- Cột trái: Thông tin cá nhân -->
                            <div class="col-md-6">
                                <h6 class="mb-3 text-primary">Thông tin cá nhân</h6>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label fw-semibold fs-6">Họ và tên</label>
                                    <input type="text" class="form-control form-control-sm" id="fullname" value="<?php echo $mang['customer_name']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold fs-6">Email</label>
                                    <input type="email" class="form-control form-control-sm" id="email" value="<?php echo $mang['customer_email']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label fw-semibold fs-6">Số điện thoại</label>
                                    <input type="tel" class="form-control form-control-sm" id="phone" value="<?php echo $mang['customer_phone']; ?>">
                                </div>
                            </div>

                            <!-- Cột phải: Mật khẩu -->
                            <div class="col-md-6">
                                <h6 class="mb-3 text-primary">Đổi mật khẩu</h6>
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-semibold fs-6">Mật khẩu hiện tại</label>
                                    <input type="password" class="form-control form-control-sm" id="password" placeholder="••••••••">
                                </div>
                                <div class="mb-3">
                                    <label for="newPassword" class="form-label fw-semibold fs-6">Mật khẩu mới</label>
                                    <input type="password" class="form-control form-control-sm" id="newPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label fw-semibold fs-6">Xác nhận mật khẩu mới</label>
                                    <input type="password" class="form-control form-control-sm" id="confirmPassword">
                                </div>
                            </div>
                        </div>

                        <!-- Nút lưu -->
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Lưu thay đổi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
