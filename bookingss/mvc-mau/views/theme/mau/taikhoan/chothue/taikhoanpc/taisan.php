<?php
$news = json_decode($data['service']);
// echo '<pre>';
// var_dump($news);
// echo '</pre>';

?>
<style>
    .tab-scroll-dsts::-webkit-scrollbar {
        display: none;
    }

    .one-line {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-custom {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 450px;
        border: 1px solid #ddd;
        border-radius: 6px;
        overflow: hidden;
    }

    .card-custom img {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        padding: 1rem;
    }

    .card-titlea {
        font-size: 1.1rem;
        font-weight: 600;
        height: 48px;
        /* ~2 dòng */
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .button-group {
        margin-top: auto;
        display: flex;
        justify-content: flex-end;
        gap: 0.4rem;
    }

    .clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Giới hạn 2 dòng */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Responsive cho HD/FullHD */
    @media (max-width: 1920px) {
        .card-custom {
            height: 380px;
        }
    }

    @media (max-width: 1280px) {
        .card-custom {
            height: 350px;
        }
    }
</style>


<div class="container-fluid p-3">
    <div class="row">
        <div class="col-12 col-md-12 d-flex justify-content-between">
            <h2 class="mb-3">Danh sách tài sản</h2>
            <div><button class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#dangtaisanModal">Đăng tài sản</button></div>
        </div>
    </div>

    <div class="row tab-scroll-dsts" style="overflow-y: auto;height:80vh">
        <?php foreach ($news as $key => $valts) { ?>
            <div class="col-3 mt-2">
                <div class="card-custom">
                    <img src="public/upload/<?php echo $valts->image; ?>" alt="Ảnh tài sản">
                    <div class="card-body">
                        <h5 class="card-titlea"><?php echo $valts->name; ?></h5>

                        <p class="card-text text-muted small clamp-2"><?php echo strip_tags($valts->content); ?></p>

                        <div class="button-group">
                            <a class="btn btn-info btn-sm text-white text-nowrap" data-bs-toggle="modal" data-bs-target="#abc<?php echo $valts->id; ?>Modal">Chi tiết</a>
                            <a class="btn btn-primary btn-sm text-white text-nowrap" data-bs-toggle="modal" data-bs-target="#dang_phongModal">Thêm phòng</a>
                            <a class="btn btn-success btn-sm text-white text-nowrap" data-bs-toggle="modal" data-bs-target="#danh_sach_phongModal">DS phòng</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade mt-2" id="abc<?php echo $valts->id; ?>Modal" tabindex="-1" aria-labelledby="abc<?php echo $valts->id; ?>ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="abc<?php echo $valts->id; ?>ModalLabel">Chi tiết tài sản</h5>
                            <div data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;"><i class="bi bi-arrow-left fs-5 text-white"></i></div>
                        </div>
                        <div class="modal-body">
                            <?php require "mvc/views/theme/mau/maudata/maumodal/mauchitietts.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanpc/dangtaisan.php"; ?>
<?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanpc/dangphong.php"; ?>
<?php require "mvc/views/theme/mau/taikhoan/chothue/taikhoanpc/danhsachphong.php"; ?>