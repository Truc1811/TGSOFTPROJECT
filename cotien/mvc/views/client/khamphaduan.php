<style>
    .background {
        background-image: linear-gradient(to right, rgb(144, 67, 183), rgb(219, 71, 158));
    }


    .bi-star-fill {
        color: gold;
    }

    .title {
        color: rgb(112, 66, 197);
    }


    .name {
        border-radius: 50%;
        /* padding: 10px 10px; */
        background-image: linear-gradient(to right, rgb(144, 67, 183), rgb(219, 71, 158));
        display: flex;
        justify-content: center;
        /* canh giữa theo chiều ngang */
        align-items: center;
        /* canh giữa theo chiều dọc */
        text-align: center;
        /* căn giữa chữ nếu xuống dòng */

        width: 30px;
        /* cần đặt kích thước cố định */
        height: 30px;
        color: white;

    }

    .experience,
    .location,
    .purpose {
        color: rgb(160, 159, 159) !important;
    }

    .card-overall {
        margin-bottom: 100px !important;
    }

    .card-body {
        padding: 30px !important;
    }

    h5,
    h3 {
        color: rgb(144, 67, 183);
        font-weight: 600px;
    }

    button {
        background-image: linear-gradient(to right, rgb(144, 67, 183), rgb(219, 71, 158));
        border-color: black !important;
        border-radius: 20px 20px;

        display: flex;
        justify-content: center;
        align-items: center;

    }

    .second {
        color: rgb(160, 159, 159) !important;
    }

    input {
        border-radius: 10px;
        border-color: white !important
    }

    .opacity {
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        padding: 95px;

    }

    .save {
        border-radius: 10px;

        border-color: rgb(175, 69, 172);
        background-color: rgb(255, 255, 255) !important;
        width: 65px;
    }
</style>

<div class="container-fluid p-0 m-0">
    <div class=" background p-5 text-white">
        <div class="row text-center p-5">


            <div class="col-12 text-center fs-1 px-5">
                Khám phá các dự án đầu tư tiềm năng
            </div>
            <div class="col-12 text-center fs-4 px-5">
                Tìm kiếm và tìm hiểu về những dự án startup và SME được tuyển chọn kỹ lưỡng trên nền tảng Cotien

            </div>
            <div class="opacity py-4 w-100 mt-3 shadow-sm rounded">

                <!-- Thanh tìm kiếm -->
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-10">
                        <div class="row g-2 w-100">
                            <div class="col-12 col-md-9">
                                <input class="form-control w-100" type="text" placeholder="Nhập từ khóa tìm kiếm" />
                            </div>
                            <div class="col-12 col-md-3">
                                <button class="btn btn-success w-100">Tìm kiếm</button>

                            </div>
                        </div>
                    </div>


                    <!-- Danh sách badge -->
                    <div class="d-flex justify-content-center flex-wrap gap-2 mt-4">
                        <span class="badge rounded-pill bg-info text-dark px-4 py-2">Marketing</span>
                        <span class="badge rounded-pill bg-info text-dark px-4 py-2">Tài chính</span>
                        <span class="badge rounded-pill bg-info text-dark px-4 py-2">Pháp lý</span>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <div class="  p-5 ">
        <div class="row text-center p-5">


            <div class="col-12 text-center fs-1 px-5 fw-bold ">
                Dự án đang gọi vốn
            </div>
            <div class="col-12 text-center fs-4 px-5 text-secondary">
                <div class="px-3 fs-3 text-secondary"> Khám phá các cơ hội đầu tư hấp dẫn được thẩm định kỹ lưỡng
                    bởi<br> đội ngũ chuyên gia</div>

            </div>
            <div class=" py-3 w-100 mt-3 ">
                <div class="  d-flex justify-content-center  w-100 ">

                    <div>
                        <div class="d-flex justify-content-between gap-4 ">
                            <div>
                                <h3 class="fw-bold">156</h3>
                                <div class="text-secondary"> Dự án đang gọi vốn</div>
                            </div>
                            <div>
                                <h3 class="fw-bold">156</h3>
                                <div class="text-secondary"> Dự án đang gọi vốn</div>
                            </div>
                            <div>
                                <h3 class="fw-bold">156</h3>
                                <div class="text-secondary"> Dự án đang gọi vốn</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="px-5 py-5">
        <div class="row ">
            <div class=" card-overall col-md-4 mb-5 mb-sm-0">
                <div class="card">
                    <div class="card-body p-3">

                        <div class="d-flex justify-content-between align-items-center ">
                            <div class="w-50 text-start">
                                <h4 class="fw-bold">AI Platform cho Doanh nghiệp</h4>
                                <h6 class="title">Marketing Director</h6>

                            </div>
                            <div class="w-50 d-flex justify-content-end align-items-center ">
                                <div class="name mt-0">NH</div>
                                <div class=" ">Trần Văn B</div>
                            </div>


                        </div>

                        <div class="d-flex gap-2 text-secondary location">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p>Thành phố Hồ Chí Minh</p>
                        </div>


                        <div class=" mt-3 gap-4 ">
                            Nền tảng AI giúp doanh nghiệp tự động hóa quy trình kinh doanh và tăng hiệu quả vận hành. Sử
                            dụng machine learning
                        </div>
                        <div class="d-flex justify-content-between mt-3 gap-4">
                            <div>
                                <h5 class="fw-bold text-black">12.0000.000 VND</h5>

                            </div>
                            <div>
                                <h5 class="text-success fw-bold">62%</h5>
                            </div>


                        </div>


                        <div class="d-flex justify-content-center flex-nowrap mt-3 gap-4">
                            <div class="progress w-100">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    60%
                                </div>
                            </div>

                        </div>
                        <div class=" mt-3 gap-4">

                            <div class="text-secondary !important purpose fw-bold">Mục tiêu: 2,000,000,000 VND 18 ngày
                                còn lại</div>
                        </div>

                        <div class="d-flex flex-nowrap mt-3 gap-4">
                            <button class="text-white " style="height:35px ; width: 125px">Xem chi tiết</button>
                            <button class="text-white save">Lưu</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>