<style>
  .login-error-wrapper {
    position: relative;
    background: url('https://lh5.googleusercontent.com/AJvS3l1X3PvvSz7G_QBKpfrCmxzHj9EpMRpuAokhP67Fa__vbcOx7AdE-074gfxh1LPAOVfGLxq3bi2xQlyVEGlVDhgKu957evRh7xfREDbGgx9c7onAXBHm0XYSukjSHJx4mSa0lrTFb_QfyOZ0eORAme2T2WOulgEWEEph-1EyGkIPXogLMCbIJPAOMQ') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .overlay-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    z-index: 1;
  }

  .alert-box {
    z-index: 2;
    position: relative;
    max-width: 500px;
    width: 90%;
    background-color: rgba(0, 0, 0, 0.8);
    /* Nền mờ trắng */
  }
</style>

<div class="login-error-wrapper">
  <div class="overlay-bg"></div>
  <div class="alert alert-light text-center shadow p-4 rounded alert-box ">
    <h4 class="alert-heading text-white">Đăng nhập thất bại</h4>
    <div class="text-white">
      <p>Vui lòng kiểm tra lại <strong>email</strong> hoặc <strong>mật khẩu</strong> của bạn.</p>
    </div>
    <hr>
    <a href="democ.tgsoft.vn" class="btn btn-primary"><i class="bi bi-skip-backward "></i>&ensp;Back</a>
  </div>
</div>