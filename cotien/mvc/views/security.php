<?php $dm=json_decode($data['dm']); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

<base href="<?php echo $dm; ?>"/>

<!-- <link rel="icon" href="public/upload/<?php echo $cauhinh[0]->favicon; ?>" /> -->
<link rel="stylesheet" href="css/fontawesome.css"/>
<link rel="stylesheet" href="css/bootstrap-5.1.3.css"/>
<link rel="stylesheet" href="bootstrap-icons-1.8.1/bootstrap-icons.css"/>
<link rel="stylesheet" href="css/animate.min.css"/>
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/admin.css?version=<?php echo time(); ?>" />

<script src="public/js/jquery-3.0.0.min.js"></script>
<script src="public/js/bootstrap-5.1.3.js"></script>
<script src="public/js/slider.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/wow.min.js"></script>
<script> new WOW().init(); </script>

</head>

<title>Quản trị website | tgsoft.vn</title>
</head>

<body>
<div id="container-fluid" style="background:url(public/upload/admin.jpg) no-repeat center; width:100vw; height:100vh; float:left; background-size:cover;">
    <div class="row d-flex justify-content-center align-content-center h-100 m-0" >
        <div class="col-10 col-md-3  text-white p-4 rounded-3 " style="background-color:rgba(0, 0, 0, 0.9); ">
            <form method="post" action="security/checkuser">
                <div class="mb-4 text-center fs-2">
                    Log in
                </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-md-3 col-form-label">User</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="inputEmail3" name="user">
                </div>
              </div>
              <div class="row mb-4">
                <label for="inputPassword3" class="col-md-3 col-form-label">Password</label>
                <div class="col-md-9">
                  <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
              </div>
              <div class="row mt-3 mb-3">
                <div class="col-6 col-md-7 col-xxl-4">
                  <input style="border:none; cursor:pointer;" class="form-control btn btn-primary" type="submit"
                name="dang_nhap" value="Đăng nhập" />
                </div>
                
              </div>
            </form>

        </div>

    </div>
    <!-- <div>
        <form method="post" class="xep_cot khoang_t" style="background-color:rgba(0,0,0,0.8);
         padding:4vw; border:0.3vw solid rgba(51,51,51,0.9); border-radius:1vw;" 
         action="security/checkuser"
         >
            <div>
                LOGIN
            </div>
            <div>
                <input class="khoang_t" type="text" name="user" placeholder="User" required="required"/>
            </div>
            <div>
                <input class="khoang_t" type="password" name="password" placeholder="Pass" required="required"/>
            </div>
            <div>
                <input style="border:none; cursor:pointer;" class="khoang_t5 maun_cam mauc_trang" type="submit"
                name="dang_nhap" value="Đăng nhập" />
            </div>
        </form>
    </div> -->
</div>
</body>
</html>