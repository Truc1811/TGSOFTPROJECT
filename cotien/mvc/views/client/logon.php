<div class="container py-5">
    <div class="row">
        <div class="mx-auto shadow p-4 bg-white rounded" >
            <h4 class="text-white text-center bg-primary p-2 rounded-top">ĐĂNG KÝ TÀI KHOẢN</h4>
            <!-- <p class="text-center mt-3 text-danger fw-semibold">Xây dựng tài chính của bạn theo cách mới.</p> -->
            <form method="post" action="logon/dangky" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-12 text-center">
                        <label class="form-label d-block">Bạn muốn đăng ký tài khoản để?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="goivon" value="1" required>
                            <label class="form-check-label" for="goivon">Gọi vốn</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="dautu" value="2" checked>
                            <label class="form-check-label" for="dautu">Đầu tư</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control ktemail" id="email" required>
                        <div id="ktemail" class="form-text"></div>

                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mật khẩu *</label>
                        <input type="password" name="password" class="form-control " id="password" required>
                    </div>

                    <div class="col-md-6">
                        <label for="confirm_password">Nhập lại mật khẩu</label>
                        <input type="password" id="confirm_password" class="form-control">
                        <div id="password-message" class="invalid-feedback">
                            Mật khẩu không khớp!
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Họ và tên người đại diện pháp luật *</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Địa chỉ trụ sở chính</label>
                        <input type="text" name="address" class="form-control form-control-yellow">
                    </div>
                    <!-- Số CCCD -->
                    <div class="col-md-6">
                        <label class="form-label">Số CCCD *</label>
                        <input type="text" name="id_number" class="form-control" maxlength="12" pattern="\d{12}" required>
                    </div>

                    <!-- Ngày sinh -->
                    <div class="col-md-6">
                        <label class="form-label">Ngày sinh *</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>

                    <!-- Ảnh CCCD mặt trước -->
                    <div class="col-md-6">
                        <label class="form-label">Ảnh CCCD mặt trước *</label>
                        <input type="file" name="front_image" class="form-control" accept="image/*" required>
                        <img id="previewFront" class="img-thumbnail mt-2" style="max-height:150px;">

                    </div>

                    <!-- Ảnh CCCD mặt sau -->
                    <div class="col-md-6">
                        <label class="form-label">Ảnh CCCD mặt sau *</label>
                        <input type="file" name="back_image" class="form-control" accept="image/*" required>
                        <img id="previewBack" class="img-thumbnail mt-2" style="max-height:150px;">
                    </div>

                    <div class="col-12 text-center mt-3">
                        <a href="home" type="button" class="btn btn-secondary me-2">← Quay lại</a>
                        <input type="submit" class="btn btn-primary px-4" name="submit" value="Đăng ký">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<script>
    var kt_email = 'true'; // Giả định hợp lệ ban đầu

    $(document).ready(function () {
        // 1. Kiểm tra email hợp lệ qua AJAX
        $('.ktemail').on('keyup', function () {
            var email = $(this).val();
            $.post('logon/kiemtraemail', { 'kte': email }, function (response) {
                if (response.includes("true")) {
                    kt_email = 'false';
                    $('#ktemail').html('Không hợp lệ').addClass('text-danger').removeClass('text-success');
                } else {
                    kt_email = 'true';
                    $('#ktemail').html('Hợp lệ').addClass('text-success').removeClass('text-danger');
                }
            }, 'text');
        });

        // 2. Kiểm tra khớp mật khẩu khi blur
        $('#confirm_password').on('blur', function () {
            let password = $('#password').val();
            let confirm = $(this).val();

            if (confirm === '') {
                $(this).removeClass('is-valid is-invalid');
                $('#password-message').hide();
            } else if (password !== confirm) {
                $(this).removeClass('is-valid').addClass('is-invalid');
                $('#password-message').show();
            } else {
                $(this).removeClass('is-invalid').addClass('is-valid');
                $('#password-message').hide();
            }
        });

        // Reset xác nhận khi sửa mật khẩu
        $('#password').on('blur', function () {
            $('#confirm_password').removeClass('is-valid is-invalid');
            $('#password-message').hide();
        });

        // 3. Ngăn submit nếu email hoặc mật khẩu sai
        $('form').on('submit', function (e) {
            let emailValid = kt_email === 'true';
            let password = $('#password').val();
            let confirm = $('#confirm_password').val();
            let passwordMatch = password === confirm;

            let errorMessages = [];

            // Kiểm tra mật khẩu
            if (!passwordMatch) {
                $('#confirm_password').addClass('is-invalid');
                $('#password-message').show();
                errorMessages.push("Mật khẩu không khớp.");
            }

            // Kiểm tra email
            if (!emailValid) {
                $('#ktemail').html('Không hợp lệ').addClass('text-danger').removeClass('text-success');
                errorMessages.push("Email không hợp lệ.");
            }

            if (errorMessages.length > 0) {
                e.preventDefault();
                alert(errorMessages.join("\n"));
            }
        });

        // 4. Hiển thị ảnh CCCD mặt trước
        $("input[name='front_image']").on("change", function (e) {
            const file = e.target.files[0];
            if (file) {
                $("#previewFront").attr("src", URL.createObjectURL(file));
            }
        });

        // 5. Hiển thị ảnh CCCD mặt sau
        $("input[name='back_image']").on("change", function (e) {
            const file = e.target.files[0];
            if (file) {
                $("#previewBack").attr("src", URL.createObjectURL(file));
            }
        });
    });
</script>

