<style type="text/css">
:root {
  --bs-red: 224, 41, 41;
  --bs-red-bold: 255, 1, 1;
  --bg-black-footer: rgb(28, 30, 34);
  --bs-gray-footer-license: rgba(197, 197, 197, 0.9);
  --bs-gray-footer-border-top: rgba(255, 255, 255, 0.1); 
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-orange: #fd7e14;
  --bs-yellow: rgb(255, 153, 0);
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0d6efd;
  --bs-secondary: #6c757d;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #f8f9fa;
  --bs-dark: #212529;
  --bs-primary-rgb: 0, 116, 232;
  --bs-secondary-rgb: 192, 168, 132;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 34, 188, 238;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 255, 0, 0;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 0, 0, 0;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 33, 37, 41;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto,
  "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif,
  "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
  "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(
    180deg,
    rgba(255, 255, 255, 0.15),
    rgba(255, 255, 255, 0)
  );
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #212529;
  --bs-body-bg: #fff;
  --a-color-hover-1: rgb(34, 188, 238);
  --a-color-hover-2: rgb(255, 102, 0);
  --a-color-hover-3: rgb(192, 168, 132);
  --a-color-1: white;
  --a-color-2: rgba(0, 0, 0, 0);
  --a-color-3: rgba(0, 0, 0, 0);
  --color-combination-9: #00141e;
  --color-support-1: #001e28;
  --color-support-2: #999;
  --color-secondary-3: #0f2d37;
  --color-secondary-1: #00141e;
  --color-combination-9: #001e28;
  --color-combination-8: #0f2d37;
  --bg-green: #96d036;
  --input-bg: #8ab73c;
  --bg-grey: #f5f5f5;
  --bg-grey-1: #e3e3e3;
  --bg-grey-2: #c4c5c5;
  --bg-sv: #121321;
  --bg-sv-1: #181a2a;
  --color-contact: #f4574c;
  --btn-yellow: #ffc000;
  --bg-footer: #181a2a;
  --bg-cool-1: #59cca6;
  --bg-cool-2: #91ad41;
  --bg-cool-3: #e3b375;
  --bg-cool-4: #ef7f94;
  --bg-cool-5: #f5f6fb;
  --bg-cool-btn: #27272f;
  --cool-text: #8b8b99;
  --cool-text-bg: #91ad41;
  --text: #707070;
  --lg-bg: #f2f7f8;
  --lg-bg-2: #19b7f9;
  --lg-footer: #1c2f3c;
  --input: #f2f7f8;
  --bg-res: #f7f4ef;
  --res-text: #fec200;
  --res-footer: #181818;
  --poco-footer: #24272e;
  --poco-text: #8b8e96;
  --poco-btn: #eb3e32;
  --pc-lh: #f7f7f7;
  --pc-btn-1: #ffb416;
  --pc-tab: #ed4e2e;
  --pc-tab-1: #eaedf1;
  --pc-text: #98a5c6;
  --pc-text-1: #f07532;
  --us-bg-1: #00c3ba;
  --us-bg-2: #4582ff;
  --us-bg-3: #f90;
  --nt-text: #252525;
  --nt-text-1: #888888;
}

/*--------------font-family and font siza ------------------*/
/*----400,500,600,700----*/
@font-face {
  font-family: SceneProBold_500;
  src: url(../font/ScenePro-Italic.woff2);
}
.font_scenepro_500 {
  font-family: SceneProBold_500;
}

@font-face {
  font-family: SceneProBold_700;
  src: url(../font/ScenePro-Bold.woff2);
}
.font_scenepro_700 {
  font-family: SceneProBold_700;
}

@font-face {
  font-family: SceneProBold_900;
  src: url(../font/ScenePro-BlackItalic.woff2);
}
.font_scenepro_900 {
  font-family: SceneProBold_900;
  font-size: 15px;
}

/* Reset CSS */
a {
  text-decoration: none;
}

/*--------------padding anh margin ------------------*/
.px_6 {
  padding-left: 15.5vw !important;
  padding-right: 15.5vw !important;
}



/* Font-size, font-weight, color.... */
.fs_14 {
  font-size: 14px;
}

.color_red {
  color: rgb(var(--bs-red)) !important;
}

.color_red_bold {
  color: rgb(var(--bs-red-bold)) !important;
}

.bg_red {
  background-color: rgb(var(--bs-red)) !important;
}

.bg_red_bold {
  background-color: rgb(var(--bs-red-bold)) !important;
}

.color_black {
  color: rgb(var(--bs-black-rgb)) !important;
}

.text_justify {
  text-align: justify !important;
}

.shadow_primary {
  box-shadow: 0px 15px 20px -15px #000;;
}

.w-30 {
  width: 30% !important;
}

.h-60 {
  height: 60% !important;
}

.h-40 {
  height: 40% !important;
}

/*-------------- thẻ menu ----------------------------*/
.cursor {
  cursor: pointer;
}

  .p-6{
    padding-left: 2vw;
    padding-right: 2vw;
  }
  .discount-image-background {
    background-image: url(public/demo/khuyemmai.gif);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 115px;
    height: 70px;
  }

  .nav-item-telephone {
    color: rgb(var(--bs-red));
  }

  .nav-pills .nav-link.active {
    background-color: rgb(var(--bs-red));
  }

  .my-nav-link {
    color: rgb(var(--bs-dark-rgb));
  }
  .menu>li>a{
    color: black;
  }
  /* .title- */

  .navbar-logo {
    height: 40px;
  }

  @media (max-width: 768px) {
    .navbar-logo {
      height: 40%;
    }

    .nav-item-telephone {
      font-size: 22px !important;
    }

    .discount-image-background {
      width: 120px;
      height: 70px;
    }

    .body_tag_class {
      margin-top: 18vh !important;
    }
  }

  @media (min-width: 768px) {
  }

  @media (min-width: 1400px) {
    .p-6{
      padding-left: 10vw;
      padding-right: 10vw;
    }
  }
</style>

<!-- <div class="row d-md-block d-none header_pc p-6">
  <nav
    style="height: 12vh; z-index: 99"
    id="navbar-example2"
    class="navbar bg-white p-6 py-0 position-fixed justify-content-center top-0 start-0 end-0"
  >
  <div class="col-xxl-2">
    <a class="navbar-brand" href="?p=trang-chu"
      ><img
        src="public/demo/logo.png"
        class="img-fluid navbar-logo"
        alt="logo"
    /></a>
  </div>
  <div class="col-xxl-10">
    <ul class="nav nav-pills align-items-center">
      <li class="nav-item">
        <a class="nav-link my-nav-link fs_14 fw-bold" href="#">TRANG CHỦ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link my-nav-link fs_14 fw-bold" href="#scrollspyHeading1"
          >GIỚI THIỆU</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link my-nav-link fs_14 fw-bold" href="#scrollspyHeading2"
          >BẢNG GIÁ</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link my-nav-link fs_14 fw-bold" href="#scrollspyHeading3"
          >LIÊN HỆ</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link my-nav-link fs_14 fw-bold" href="index.php?p=lienhe"
          >LIÊN HỆ</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link p-0" href="#">
          <div class="discount-image-background"></div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center px-1" href="#">
          <img src="public/demo/lien_he.png" alt="Lien he" />
          <span class="nav-item-telephone fs-5 fw-bold">0988 412 669</span>
        </a>
      </li>
    </ul>
  </div> 
    
  </nav>
</div> -->

<div class="row py-3 p-6 shadow d-xxl-block d-md-block d-none">
  <div class="d-flex justify-content-center align-items-center">
    
  
  <div class="col-xxl-1 col-md-1">
    <img src="public/upload/<?php echo $cauhinh[0]->logo; ?>" alt="">
  </div>
  <div class="col-xxl-6 col-md-6">
    <ul class="d-flex list-unstyled justify-content-end m-0 menu">
      <?php foreach ($menu1 as $key => $value1) {
        // code...
      ?>
      <li class="px-3">
        <a class="" href="<?php echo $value1->link; ?>">
          <?php echo $value1->name; ?>
        </a>
      </li>
      <?php
      }
      ?>
      
    </ul>
  </div>
  <div class="col-xxl-4 col-md-4 d-flex justify-content-between align-items-center">
    <div class="nav-item">
      <a class="nav-link p-0" href="#">
        <div class="discount-image-background"></div>
      </a>
    </div>
    <div class="nav-item">
      <a class="nav-link d-flex align-items-center px-1" href="#">
        <img src="public/demo/lien_he.png" alt="Lien he" />
        <span class="nav-item-telephone fs-5 fw-bold"><?php echo $cauhinh[0]->hotline; ?></span>
      </a>
    </div>
  </div>
  </div>
</div>




<!-- menu dd -->
<div class="row d-flex d-xxl-none d-md-none">
  <div class="d-flex px-2 py-1 justify-content-between">
    <div class="col-4">
      <img style="height:6vh" src="public/demo/logo.png" alt="">
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end" >
      <button class="btn btn-outline-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
        <i class="bi bi-border-width"></i>

      </button>
    </div>
  </div>
</div>





<!-- offcavas -->
<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->

<div class="offcanvas offcanvas-end p-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header p-3">
    <h5 id="offcanvasRightLabel" onclick="window.location.href='<?php echo $dm; ?>'"><img style="height:50px" src="public/demo/logo.png" alt=""></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <!-- menu 1 -->
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
       <?php foreach ($menu1 as $key => $value1) {
        // code...
      ?>
      <div class="border-bottom">
        <div class="col-9 p-3 d-flex align-items-center" onclick="window.location.href='<?php echo $value1->link; ?>'">
          <?php echo $value1->name; ?>
        </div>
      </div>
      <?php } ?>
      
    </div>
    
  </div>

    <!-- end menu 1 -->
      
  </div>
</div>
