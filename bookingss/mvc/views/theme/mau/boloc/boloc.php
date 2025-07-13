  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .bottom-nav {
        position: fixed;
        bottom: 0px;
        left: 0;
        width: 100%;
        background: #fff;
        border-top: 1px solid #ddd;
        display: flex;
        justify-content: space-around;
        padding: 6px 0;
        z-index: 999;

    }

    .bottom-nav a {
        color: #888;
        font-size: 12px;
        text-align: center;
        text-decoration: none;
    }

    .bottom-nav a.active {
        color: #007bff;
    }


    /* === Phần 3d cho di động:Các hình tròn phụ === */
    .trang_chu_tron_di_dong {

        z-index: 1;
        position: relative;
        background-color: rgba(255, 255, 255, 0.49);
        /* Màu trắng mờ 80% */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        /* ✅ bóng đổ đen, mờ, êm */
        border-radius: 20px !important;
        width: 280px; height: 280px;
        /* background-color: greenyellow; */
        margin-top: 22px;
    }

    .hinh_anh_bo_loc{
        margin-top: 102px;
    }

    .trang_chu_tron_2_di_dong,
    .trang_chu_tron_3_di_dong,
    .trang_chu_tron_4_di_dong,
    .trang_chu_tron_5_di_dong,
    .trang_chu_tron_6_di_dong {
        position: absolute;
        border-radius: 50%;
    }

    .trang_chu_tron_2_di_dong {
        width: 100px;
        height: 100px;
        top: -70px;
        left: -90px;
        background: #ffc107;
        animation: rotate1 12s linear infinite;
    }

    .trang_chu_tron_3_di_dong {
        width: 100px;
        height: 100px;
        top: 120px;
        left: 230px;
        background: #0dcaf0;
        animation: wave1 4s ease-in-out infinite;
    }

    .trang_chu_tron_4_di_dong {
        width: 60px;
        height: 60px;
        top: 180px;
        left: -70px;
        background: #ffc107;
        animation: pulse1 2.5s ease-in-out infinite;
    }

    .trang_chu_tron_5_di_dong {
        width: 60px;
        height: 60px;
        right: -60px;
        top: -10px;
        background: rgb(28, 240, 0);
        animation: bounce1 3s ease-in-out infinite;
        z-index: 3;
    }

    .trang_chu_tron_6_di_dong {
        width: 60px;
        height: 60px;
        right: -60px;
        bottom: -190px;
        background: #ffc107;
        animation: combo1 5s ease-in-out infinite;
    }

    /* === Hiệu ứng === */
    @keyframes rotate1 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes wave1 {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(20px);
        }
    }

    @keyframes pulse1 {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.6;
        }
    }

    @keyframes bounce1 {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes combo1 {
        0% {
            transform: rotate(0deg) scale(1) translateY(0);
        }

        25% {
            transform: rotate(5deg) scale(1.1) translateY(-10px);
        }

        50% {
            transform: rotate(-5deg) scale(1.05) translateY(10px);
        }

        75% {
            transform: rotate(3deg) scale(1.1) translateY(-5px);
        }

        100% {
            transform: rotate(0deg) scale(1) translateY(0);
        }
    }

    #changingWord_di_dong {
        transition: opacity 0.5s ease-in-out;
    }

    .fade-text-di-dong {
        display: inline-block;
    }

    .dropdown1{
        width:250px;
       
    }
</style>
<div class="container-fluid bg-light p-0">

    <!-- Thanh menu dưới -->
    <div class="bottom-nav d-md-none d-flex bg-primary py-2">
        <a href="#" class="active fw-bold text-white">
            <div><i class="bi bi-house-fill fs-3 text-white"></i></div>
            <div>Trang chủ</div>
        </a>
        <a href="#" data-analytics="" data-cta="" class="d-md-none" data-bs-toggle="modal"
            data-bs-target="#mobileModal_mot">
            <div><i class="bi bi-funnel-fill fs-3 text-white"></i></div>
            <div class="text-white">Bộ lọc</div>
        </a>
        <a href="customer/tinnhan">
            <div><i class="bi bi-chat-square-dots-fill fs-3 text-white"></i></div>
            <div class="text-white">Tin nhắn</div>
        </a>
        <a href="customer">
            <div><i class="bi bi-person-circle fs-3 text-white"></i></div>
            <div class="text-white">Tài khoản</div>
        </a>

    </div>

</div>

<!-- modal dành cho Mobile -->

<!-- Modal Bootstrap dành cho di động (full màn hình) -->
<div class="modal fade" id="mobileModal_mot" tabindex="-1" aria-labelledby="mobileModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen"> <!-- Sử dụng modal-fullscreen để luôn full -->
        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h5 class="modal-title fw-bold" id="mobileModalLabel1">Chọn lọc theo:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>

            <!-- Nội dung full màn hình -->
            <div class="row justify-content-center overflow-hidden">
                <div class=" overflow-hidden d-flex flex-column flex-md-row align-items-center bg-white">
                    <!-- Phần chữ -->
                    <div class="text-center mb-5 mb-md-0 col-12 col-md-6 ">
                        <div class="position-relative d-inline-block">
                            <div class="trang_chu_tron_di_dong mx-auto d-flex justify-content-center align-items-center text-dark text-center col-12" style="">
                                <div>
                                    <div class="position-relative lop_2_2 dropdown1">

                                        <div style="margin-top: 9px;">
                                            <div  class=" d-flex flex-column text-white rounde w-100 mb-2">
                                                <!-- code mới  -->
                                                <?php
                                                $jsonData = file_get_contents('public/jsonquanhuyen/data.json');
                                                ?>
                                                <script>
                                                    const provincesData_di_dong = <?php echo $jsonData; ?>;
                                                </script>
                                                <!-- Label -->
                                                <div class="search-item d-flex align-items-center py-2 py-md-0 duong_vien_di_dong flex-fill w-100 dropdown1">
                                                    <i class="bi bi-buildings me-4 text-dark fw-bold"></i>
                                                    <select id="province_di_dong_name" class="form-control ">
                                                        <option value="">Chọn Tỉnh/Thành &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;🔽</option>
                                                        <?php foreach (json_decode($jsonData, true) as $province_di_dong): ?>
                                                            <option value="<?= htmlspecialchars($province_di_dong['Id']) ?>">
                                                                <?= htmlspecialchars($province_di_dong['Name']) ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!-- quận huyện -->

                                                <!-- quận huyện -->
                                                <div class="search-item d-flex  align-items-center py-2 py-md-0 duong_vien_di_dong flex-fill w-100 dropdown1">
                                                    <i class="bi bi-geo-alt me-4 text-dark fw-bold"></i>
                                                    <select id="district_di_dong_name" class="form-control ">
                                                        <option value="">
                                                            Chọn Quận/Huyện &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 🔽
                                                        </option>
                                                    </select>
                                                </div>


                                                <div class="search-item d-flex align-items-center py-2  py-md-0 duong_vien_di_dong flex-fill w-100 dropdown1">
                                                    <i class="bi bi-geo me-4  text-dark fw-bold"></i>
                                                    <select id="ward_di_dong_name" class="form-control">
                                                        <option value="">Chọn Phường/Xã &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 🔽</option>

                                                    </select>
                                                </div>
                                                <div class="search-item d-flex align-items-center py-2 py-md-0 duong_vien_di_dong flex-fill w-100 dropdown1">
                                                    <i class="bi bi-backpack4-fill me-4  text-dark fw-bold"></i>
                                                    <select id="ward_di_dong_name" class="form-control">
                                                        <option value="">
                                                            Chọn Thể Loại &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  🔽
                                                        </option>
                                                        <option value="">
                                                            Khách Sạn
                                                        </option>
                                                        <option value="">
                                                            Homestay
                                                        </option>
                                                        <option value="">
                                                            Nhà Trọ
                                                        </option>
                                                        <option value="">
                                                            Chung Cư Cao Cấp
                                                        </option>
                                                        <option value="">
                                                            Nhà Trọ
                                                        </option>
                                                        <option value="">
                                                            Resort
                                                        </option>
                                                        <option value="">
                                                            Nhà
                                                        </option>
                                                        <option value="">
                                                            Căn Hộ
                                                        </option>
                                                        <option value="">
                                                            Villa Căn Hộ
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="p-0 mt-2 py-md-0 duong_vien_di_dong ms-2 btn btn-primary d-flex align-items-center flex-fill ">
                                                    <button data-analytics="" data-cta="" class="btn btn-primary px-4 py-2 w-100 mt-0 w-100">
                                                        Tìm
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Các vòng tròn hiệu ứng -->
                            <div class="trang_chu_tron_2_di_dong position-absolute"></div>
                            <div class="trang_chu_tron_3_di_dong position-absolute"></div>
                            <div class="trang_chu_tron_4_di_dong position-absolute"></div>
                            <div class="trang_chu_tron_5_di_dong position-absolute"></div>
                            <div class="trang_chu_tron_6_di_dong position-absolute"></div>
                        </div>
                    </div>

                    <!-- Phần ảnh -->
                    <div class="col-12 col-md-6 text-center hinh_anh_bo_loc">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-flat-tourists_52683-69807.jpg?semt=ais_hybrid&w=740"
                            class="img-fluid" alt="Hình minh họa" style="width: 300px;" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


  <!-- viết Script đổ dữ liệu tỉnh thành khi chọn và sau dods chọn được cái quận huyện  -->
  <script>
      const provinceSelect_di_dong = document.getElementById("province_di_dong_name");
      const districtSelect_di_dong = document.getElementById("district_di_dong_name");
      const wardSelect_di_dong = document.getElementById("ward_di_dong_name");

      // Reset select box
      function resetSelect(selectElement, placeholder) {
          selectElement.innerHTML = `<option value="">${placeholder} 🔽</option>`;
      }

      // Khi chọn Tỉnh
      provinceSelect_di_dong.addEventListener("change", function() {
          const selectedProvinceId = this.value;

          resetSelect(districtSelect_di_dong, "Chọn Quận/Huyện");
          resetSelect(wardSelect_di_dong, "Chọn Phường/Xã");

          if (!selectedProvinceId) return;

          const selectedProvince = provincesData_di_dong.find(p => p.Id === selectedProvinceId);
          if (selectedProvince && selectedProvince.Districts) {
              selectedProvince.Districts.forEach(district => {
                  const option = document.createElement("option");
                  option.value = district.Id;
                  option.textContent = district.Name;
                  districtSelect_di_dong.appendChild(option);
              });
          }
      });

      // Khi chọn Quận/Huyện
      districtSelect_di_dong.addEventListener("change", function () {
    const selectedProvinceId = provinceSelect_di_dong.value;
    const selectedDistrictId = this.value;

    resetSelect(wardSelect_di_dong, "Chọn Phường/Xã");

    if (!selectedProvinceId || !selectedDistrictId) return;

    const selectedProvince = provincesData_di_dong.find(p => p.Id === selectedProvinceId);
    if (selectedProvince && selectedProvince.Districts) {
        const selectedDistrict = selectedProvince.Districts.find(d => d.Id === selectedDistrictId);
        if (selectedDistrict && selectedDistrict.Wards) {
            selectedDistrict.Wards.forEach(ward => {
                const option = document.createElement("option");
                option.value = ward.Id;
                option.textContent = ward.Name;
                wardSelect_di_dong.appendChild(option);
            });
        }
    }
});

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>