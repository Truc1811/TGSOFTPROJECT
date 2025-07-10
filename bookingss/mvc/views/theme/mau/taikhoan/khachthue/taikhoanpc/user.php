<style>
    .tab-scroll {
        max-height: 500px; /* Hoặc chiều cao bạn muốn */
        overflow-y: auto;
    }
</style>
<div class="container-fluid p-3">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card shadow-sm ">
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

                    <!-- Thông tin cá nhân -->
                    <form>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="fullname" value="Nguyễn Văn A">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="nguyenvana@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone" value="0987654321">
                        </div>

                        <hr />

                        <!-- Mật khẩu -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu hiện tại</label>
                            <input type="password" class="form-control" id="password" placeholder="••••••••">
                        </div>

                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="newPassword">
                        </div>

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Xác nhận mật khẩu mới</label>
                            <input type="password" class="form-control" id="confirmPassword">
                        </div>

                        <!-- Nút lưu -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-success btn-sm">Lưu thay đổi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>