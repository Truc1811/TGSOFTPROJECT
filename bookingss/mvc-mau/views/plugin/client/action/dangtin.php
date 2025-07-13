<?php
$db=str_replace('add','',json_decode($data['page']));//default
$title_name='recruitment';//change
?>
<style type="text/css">
    .px-gt{
        padding-left: 0vw;
        padding-right: 0vw;
    }
    blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        font-size: 17.5px;
        border-left: 5px solid #eee;
    }
    .bg{
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .card-gt{
        height: 143vw;
    }
    .fanpage {
        width: 300px;
        height: 120px;
        background: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 50%) , url(public/demo/banner-3.jpg) center/cover no-repeat;
    }
    .den{
        background: linear-gradient( to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100% );
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 0;
    }
    .card-gt-2{
        height: 70vw;
    }
    @media (min-width: 768px){
        .px-gt{
            padding-left: 5vw;
            padding-right: 5vw;
        }
        .bg{
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .card-gt{
            height: 25vw;
        }
        .fanpage {
            width: 300px;
            height: 120px;
            background: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 50%) , url(public/demo/banner-3.jpg) center/cover no-repeat;
        }
        .den{
            background: linear-gradient( to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100% );
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 0;
        }
        .header-top{
            background-color: var(--header-top);
        }
        .card-gt-2{
            height: 50vw;
        }
    }
    @media (min-width: 1400px){
        .px-gt{
            padding-left: 13vw;
            padding-right: 13vw;
        }
        .bg{
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .card-gt{
            height: 25vw;
        }
        .fs-13{
            font-size: 13px;
        }
        .fanpage {
            width: 300px;
            height: 120px;
            background: linear-gradient(180deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.1) 50%) , url(public/demo/banner-3.jpg) center/cover no-repeat;
        }
        .den{
            background: linear-gradient( to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100% );
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 0;
        }
        .card-gt-2{
            height: 15vw;
        }
    }
</style>
<form class="" method="post" enctype="multipart/form-data" action="hoivien/dangtin">
    <div class="p-6 col-12 d-flex flex-wrap align-items-start" >
            <!---- khung trai-->
            <div class="col-12 col-lg-9 col-md-12 d-flex flex-wrap p-2">
                <button class="btn btn-col text-white  w-100 text-uppercase header-top fw-bold text-start show" type="button" data-bs-toggle="collapse" data-bs-target="#nhohotroquazalo" aria-expanded="false" aria-controls="collapseExample">
                    Nhờ hỗ trợ qua zalo
                </button>
                <div class="collapse in show" id="nhohotroquazalo">
                   <div class="text-center my-3">
                        <img class="w-25" src="public/demo/zaloqr.jpg" alt="">
                   </div>
                </div>
                <button class="btn btn-col text-white my-3 w-100 text-uppercase header-top fw-bold text-start " type="button" data-bs-toggle="collapse" data-bs-target="#tudangtintuyendung" aria-expanded="false" aria-controls="collapseExample">
                    Tự đăng tin tuyển dụng
                </button>
                <div class="collapse in show" id="tudangtintuyendung">
                   <div class="d-flex flex-wrap">
                        <!-- form nhap -->
                        <?php 
                            require "mvc/views/plugin/client/add/tuyendung.php";
                            // require "mvc/views/plugin/client/add/seo.php";
                            require "mvc/views/plugin/client/add/properties.php";
                        ?>
                        <!-- end form nhap -->
                   </div>
                    <div class="p-6 d-flex justify-content-between align-items-center py-1">
                        <?php require "mvc/views/plugin/client/add/top.php"; ?>
                    </div>
                </div>
                
            </div> 
            <!-- end khung trai  -->
            <!-- khung phai   -->
            <div class="col-lg-3 col-md-12 col-12 ps-md-3 ps-0">
                <div class="mb-3">
                    <div class="bg card-gt-2" style="background-image:url(public/demo/gioithieu1.jpg);">
                        
                    </div>
                </div>
                <!-- <div class="p-2 header-top text-white my-3 fs-13">
                    LIKE PAGE ĐỂ NHẬN VIỆC LÀM MỚI NHẤT
                </div>
                <div class="py-4">
                    <div class="fanpage bg" style="background-image: url(public/demo/gt2.jpg);">
                        <div class="d-flex p-2 position-relative">
                            <div class=" den">
                                
                            </div>
                            <img class="position-relative" src="public/demo/fb.jpg" alt="" width="50" height="50" class="bg-white">
                            <div class="ps-2 position-relative">
                                <a href="#" class="text-decoration-none text-white fs-5">Tìm việc làm thêm</a>
                                <p class="fs-13 text-white">37 người theo dõi</p>
                            </div>
                        </div>
                        <div class="px-1 d-flex justify-content-between">
                            <button class="border-0"><i class="bi bi-facebook"></i> Theo dõi Trang</button>
                            <button class="border-0"><i class="bi bi-share"></i> Chia sẻ</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- end khung phai -->
            
    </div>
    
</form>

