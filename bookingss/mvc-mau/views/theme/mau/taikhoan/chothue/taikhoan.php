 <?php
    $email = $_COOKIE['admin'];
    $khachthue = json_decode($this->model('customermodel')->where("email='{$email}'"));
    $mang['customer_name'] = $khachthue[0]->name;
    ?>
 <style>
     .sidebar .nav-link {
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
         display: flex;
         align-items: center;
         color: #444;
     }

     .main-header {
         border-bottom: 1px solid #eee;
     }

     .logo-text {
         font-size: 1.5rem;
         font-weight: bold;
         color: #1a4fff;
     }

     .logo-dot {
         color: #ffcc00;
     }

     .btn-login {
         background-color: #1a4fff;
         color: white;
         font-weight: bold;
     }

     .tab_scroll_tablet {
         overflow-y: auto;
     }

     .tab_scroll_tablet::-webkit-scrollbar {
         display: none;
         /* Ẩn thanh cuộn trên iOS/Android */
     }

     .nav-pills .nav-link.active,
     .nav-pills .show>.nav-link {
         color: black;
         background-color: rgb(219, 225, 235) !important;
     }


     .bo-tron {
         width: 45px;
         height: 45px;
         background-color: #e0f7fa;
     }

     a {
         text-decoration: none;
         color: black;
         font-weight: bold;
     }
 </style>
 <div class="container py-3 bg-light d-block d-md-none" style="height: 100vh;">
     <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanmobile/taikhoanmobile.php"; ?>
 </div>

 <div class="container-fluid d-none d-md-block">
     <div class="row ">
         <div class="main-header d-flex align-items-center justify-content-between p-3 bg-light">
             <div class="col-12 col-md-6">
                 <div class="d-flex align-items-center">
                     <i class="bi bi-list fs-4 me-2 nutgach"></i>
                     <div class="logo-text">Trip<span class="logo-dot">.</span>com</div>
                     <form class="d-flex ms-4">
                         <input class="form-control" type="search" placeholder="Tìm kiếm">
                         <button class="btn btn-primary ms-1"><i class="bi bi-search"></i></button>
                     </form>
                 </div>
             </div>
             <div class="col-12 col-md-6">
                 <div class="d-flex justify-content-end ">
                     <a href="#" class="btn btn-light me-3">Hạng Bạc</a>
                     <a href="#" class="btn btn-primary"><?php echo $mang['customer_name']; ?></a>
                     <a href="customer/logout" class="btn btn-info ms-3 text-white"><i class="bi bi-box-arrow-left "></i>&ensp;Đăng xuất</a>
                 </div>
             </div>
         </div>
     </div>
     <?php

        $mang_nut_pc_left = [
            ['dashbord', 'Tổng quan', '<i class="bi bi-card-list text-info fs-4"></i>', 'dashbord', 'show active', 'active'],
            ['tinhethong', 'Tin hệ thống', '<i class="bi bi-chat-dots-fill text-info fs-4"></i>', 'tinhethong', '', ''],
            ['tinnhan', 'Tin nhắn', '<i class="bi bi-chat-dots-fill text-info fs-4"></i>', 'tinnhan', '', ''],
            ['doanhthu', 'Doanh thu', '<i class="bi bi-cash text-info fs-4"></i>', 'doanhthu', '', ''],
            ['donhang', 'Đơn hàng', '<i class="bi bi-card-checklist text-info fs-4"></i>', 'donhang', '', ''],
            ['giaodich', 'Giao dịch', '<i class="bi bi-gear-fill text-info fs-4"></i>', 'giaodich', '', ''],
            ['taisan', 'Tài sản', '<span class="text-info fw-bold fs-5">T</span>', 'taisan', '', ''],
            ['cauhinhtaikhoan', 'Tài khoản', '<i class="bi bi-person-gear text-info fs-4"></i>', 'cauhinhtaikhoan', '', ''],
            ['cauhinh', 'Cấu hình', '<i class="bi bi-gear-fill text-info fs-4"></i>', 'cauhinh', '', ''],
        ];

        ?>
     <div class="row">
         <div class="col-3 col-md-2 col-lg-2 col-xl-2">
             <div class="sidebar flex-column bg-white tab_scroll_tablet mt-2" style="border-right:2px solid #f1f3f6 ;height:100vh;">
                 <div class="">
                     <div class="nav flex-column nav-pills me-3 rounded-2 bg-white" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                         <?php
                            foreach ($mang_nut_pc_left as $key => $value) {
                            ?>
                             <button class="nav-link <?php echo $value['5']; ?>" id="v-pills-<?php echo $value[0]; ?>-tab"
                                 data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $value[0]; ?>" type="button"
                                 role="tab" aria-controls="v-pills-<?php echo $value[0]; ?>" aria-selected="true">
                                 <div class="d-flex align-items-center">
                                     <div
                                         class="rounded-circle bg-light d-flex align-items-center justify-content-center me-3 bo-tron">
                                         <?php echo $value[2]; ?>
                                     </div>
                                     <div class="text-black"><?php echo $value[1]; ?></div>
                                 </div>
                             </button>
                         <?php
                            }
                            ?>

                     </div>
                 </div>
             </div>
         </div>
         <div class="col-9 col-md-10 col-lg-10 col-xl-10">
             <div class="main-content ">
                 <div class="tab-content" id="v-pills-tabContent">
                     <?php
                        foreach ($mang_nut_pc_left as $key => $value) {
                        ?>
                         <div class="tab-pane fade <?php echo $value[4]; ?>" id="v-pills-<?php echo $value[0]; ?>"
                             role="tabpanel" aria-labelledby="v-pills-<?php echo $value[0]; ?>-tab">
                             <?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanpc/$value[3].php"; ?>

                         </div>

                     <?php
                        }
                        ?>
                 </div>
             </div>
         </div>
     </div>
 </div>