 <?php
    $email = $_COOKIE['admin'];
    $khachthue = json_decode($this->model('customermodel')->where("email='{$email}'"));
    $mang['customer_name'] = $khachthue[0]->name;
    $mang['customer_email'] = $khachthue[0]->email;
    $mang['customer_phone'] = $khachthue[0]->phone;
    ?>
 <style>
     .hide-scrollbar {
         overflow-y: auto;
         height: 80vh;
         scrollbar-width: none;
         /* Firefox */
         -ms-overflow-style: none;
         /* IE 10+ */
     }

     .hide-scrollbar::-webkit-scrollbar {
         display: none;
         /* Chrome, Safari */
     }
 </style>
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12">
             <div class="card border-0">
                 <div class="card-body border-0 hide-scrollbar">
                     <!-- Ảnh đại diện -->
                     <div class="text-center mb-4">
                         <img src="public/upload/admin.jpg" alt="Avatar" class="rounded-circle mb-2" width="120" height="120">
                         <div>
                             <button class="btn btn-sm btn-outline-primary">Thay ảnh đại diện</button>
                         </div>
                     </div>

                     <!-- Thông tin cá nhân -->
                     <form class="text-black-50">
                         <div class="mb-3">
                             <label for="fullname" class="form-label ">Họ và tên</label>
                             <input type="text" class="form-control" id="fullname" value="<?php echo $mang['customer_name'] ?>">
                         </div>

                         <div class="mb-3">
                             <label for="email" class="form-label">Email</label>
                             <input type="email" class="form-control" id="email" value="<?php echo $mang['customer_email'] ?>">
                         </div>

                         <div class="mb-3">
                             <label for="phone" class="form-label">Số điện thoại</label>
                             <input type="tel" class="form-control" id="phone" value="<?php echo $mang['customer_phone'] ?>">
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