<?php
$sevice = json_decode($data['service_detail']);
?>
<style>
	.khung_ben_phai_noi_dung_1 {
		background-color: #f8f9fa;
		border-radius: 10px;
	}

	.custom-dropdown-menu {
		min-width: 660px;
		max-width: 100%;
		border-radius: 0px;
		box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);


		margin-top: 0 !important;
		padding-top: 0 !important;
	}

	.nut_2_trang_3_noi_dung_1 {
		border-radius: 0px;
		border-top-right-radius: 7px;
		border-top-left-radius: 7px;
		border-bottom-right-radius: 7px;
		background-color: #003580;
	}

	.noi_dung_2_khung_icon {
		border: 1px solid #dee2e6;
		border-radius: 0.5rem;
		min-width: 190px;
	}

	.thong_tin_dia_diem_hang_dau {
		background-color: #e9f7ff;
		border-radius: 12px;
	}

	.phan_input_phong_trong {
		max-width: 800px;
	}

	.nut_chu_de_danh_gia {
		border-radius: 15px;
	}




	.comment-card {
		border: 1px solid #dee2e6;
		border-radius: 12px;

	}

	.avatar-circle {
		width: 40px;
		height: 40px;
		background-color: #008009;
		border-radius: 50%;
		color: white;
		font-weight: bold;
		display: flex;
		align-items: center;
		justify-content: center;
	}


	.faq-card {
		border: 1px solid #000000;
		border-radius: 12px;

	}

	.faq-item {
		border-bottom: 1px solid #f1f1f1;
		cursor: pointer;
	}


	.trang_card_nho_trang_3 {
		border: 1px solid #ddd;
		border-radius: 10px;
		position: relative;
	}

	.close-icon {
		position: absolute;
		top: 10px;
		right: 15px;

		cursor: pointer;
	}

	.hinh_con {
		width: 130px;
		height: 130px;
	}


	.checkin-box {
		border: 1px solid #ddd;
		border-radius: 10px;

	}

	.modal-dialog {
		margin-right: 0px;
	}


	.image-thumb {

		height: auto;
		object-fit: cover;
		cursor: pointer;
	}

	.main-img {
		height: 300px;


	}

	.rating-box {
		background-color: #003580;
		color: white;
		font-weight: bold;
		padding: 5px 10px;
		border-radius: 5px;
		font-size: 18px;
	}

	.map-img {
		height: 150px;
		width: 100%;
		object-fit: cover;
		border-radius: 5px;
	}

	.khung_bo_tron {
		border-radius: 22px !important;
	}
</style>

<!-- chương trình web chính  -->

<!--Header: Chỉ hiển thị trên di động -->
<div class="d-block d-md-none">

	<!-- Header -->
	<div class="bg-primary text-white p-3 d-flex align-items-center justify-content-between">
		<h3>PHIVN1</h3>
		<i class="bi bi-coin" style="font-size: 1.2rem;"></i>
	</div>

</div>


<div class="container py-3">
	<div class="row ">
		<div
			class="col-12 col-md-12 d-none d-md-flex flex-wrap flex-md-nowrap justify-content-md-start align-items-center ">
			<a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
				<small>Trang chủ</small><i class="bi bi-chevron-right text-dark"></i>
			</a>
			<a data-analytics="" data-cta="" href="" class="text-nowrap text-decoration-none">
				<small>Chi tiết căn hộ </small><i class="bi bi-chevron-right text-dark"></i>
			</a>
			<a data-analytics="" data-cta="" href="" class="text-wrap text-decoration-none">
				<small>Căn hộ Sky89 2PN2WC 72m2 full nội thất cao cấp</small>
			</a>
		</div>
	</div>
</div>

<!-- 1  -->
<div class="container mt-3 ">
	<div class="row ">
		<div
			class="col-12 col-md-12 d-none d-md-flex flex-wrap flex-md-nowrap justify-content-md-between align-items-center ">
			<button data-analytics="" data-cta=""
				class="btn btn-primary active px-3 py-2 w-100 w-md-auto text-nowrap flex-fill ">
				<a data-analytics="" data-cta=""
					href="http://localhost:9090/Booking/index.php?p=uudaivungtau#lien_ket_tong_quan"
					class="text-white text-decoration-none">Tổng quan</a>
			</button>
			<button data-analytics="" data-cta=""
				class="btn btn-light px-3 py-2 w-100 w-md-auto  text-nowrap flex-fill ">
				<a data-analytics="" data-cta=""
					href="http://localhost:9090/Booking/index.php?p=uudaivungtau#lien_ket_thong_tin_can_ho_va_gia_ca"
					class="text-decoration-none">
					Thông tin căn hộ &amp; giá
				</a>
			</button>
			<button data-analytics="" data-cta=""
				class="btn btn-light px-3 py-2 w-100 w-md-auto  text-nowrap flex-fill">
				<a class="text-decoration-none" data-analytics="" data-cta=""
					href="http://localhost:9090/Booking/index.php?p=uudaivungtau#lien_ket_tien_nghi">
					Tiện nghi
				</a>
			</button>
			<button data-analytics="" data-cta="" class="btn btn-light px-3 py-2 w-100 w-md-auto text-nowrap flex-fill">
				<a class="text-decoration-none" data-analytics="" data-cta=""
					href="http://localhost:9090/Booking/index.php?p=uudaivungtau#lien_ket_quy_tac_chung">
					Quy tắc chung
				</a>

			</button>
			<button data-analytics="" data-cta=""
				class="btn btn-light px-3 py-2 w-100 w-md-auto  text-nowrap flex-fill">
				<a class="text-decoration-none" data-analytics="" data-cta=""
					href="http://localhost:9090/Booking/index.php?p=uudaivungtau#lien_ket_ghi_chu">
					Ghi chú
				</a>
			</button>
			<button data-analytics="" data-cta=""
				class="btn btn-light px-3 py-2 w-100 w-md-auto  text-nowrap flex-fill">
				<a class="text-decoration-none" data-analytics="" data-cta="" href="" data-bs-toggle="modal"
					data-bs-target="#modaldanhgiakhachhang">
					Đánh giá khách hàng (8)
				</a>
			</button>
		</div>
	</div>
	<!-- Modal đánh giá khách hàng  -->

	<div class="modal fade" id="modaldanhgiakhachhang" tabindex="-1" aria-labelledby="reviewsModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-scrollable">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header border-0">
					<h5 class="modal-title" id="reviewsModalLabel">
						Căn hộ Sky89 2PN2WC 72m2 full nội thất cao cấp giá chỉ 15 triệu
					</h5>
					<button data-analytics="" data-cta="" type="button" class="btn-close"
						data-bs-dismiss="modal"></button>
				</div>
				<!-- Body -->
				<div class="modal-body">
					<!-- Phần Summary -->
					<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
						<!-- Left: Score -->
						<div class="d-flex align-items-center">
							<div class="bg-primary text-white rounded-3 d-flex justify-content-center align-items-center me-2"
								style="width: 40px; height: 40px; font-size: 18px;">
								10
							</div>
							<div>
								<div><strong>Xuất sắc</strong></div>
								<div class="small text-muted">8 đánh giá</div>
							</div>
						</div>
						<!-- Center: Trust Message -->
						<div class="text-success small d-flex align-items-center">
							Chúng tôi cố gắng mang đến 100% đánh giá thật
							<i class="bi bi-info-circle ms-1"></i>
						</div>
						<!-- Right: Write Review Button -->
						<button data-analytics="" data-cta="" class="btn btn-outline-primary btn-sm">
							Viết đánh giá
						</button>
					</div>
					<hr>
					<h6 class="fw-bold mb-3">Hạng mục:</h6>
					<div class="row gy-3">
						<!-- Nhân viên phục vụ -->
						<div class="col-md-4">
							<div class="d-flex justify-content-between">
								<span>Nhân viên phục vụ</span>
								<span><strong>10</strong></span>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%;"></div>
							</div>
						</div>
						<!-- Tiện nghi -->
						<div class="col-md-4">
							<div class="d-flex justify-content-between">
								<span>Tiện nghi</span>
								<span><strong>10</strong></span>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%;"></div>
							</div>
						</div>
						<!-- Sạch sẽ -->
						<div class="col-md-4">
							<div class="d-flex justify-content-between">
								<span>Sạch sẽ</span>
								<span><strong>10</strong></span>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%;"></div>
							</div>
						</div>
						<!-- Thoải mái -->
						<div class="col-md-4">
							<div class="d-flex justify-content-between">
								<span>Thoải mái</span>
								<span><strong>9,1</strong></span>
							</div>
							<div class="progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 91%;"></div>
							</div>
						</div>
						<!-- Đáng giá tiền -->
						<div class="col-md-4">
							<div class="d-flex justify-content-between">
								<span>Đáng giá tiền</span>
								<span><strong>9,7</strong></span>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 97%;"></div>
							</div>
						</div>
						<!-- Địa điểm -->
						<div class="col-md-4">
							<div class="d-flex justify-content-between">
								<span>Địa điểm</span>
								<span><strong>9,7</strong></span>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 97%;"></div>
							</div>
						</div>
					</div>
					<hr class="my-4">
					<!-- Phần Bộ lọc -->
					<h6 class="fw-bold mb-3">Bộ lọc</h6>
					<div class="row g-3">
						<div class="col-6 col-md-3">
							<label class="form-label">Khách đánh giá</label>
							<select class="form-select">
								<option selected>Tất cả (8)</option>
								<option>Gia đình</option>
								<option>Cặp đôi</option>
								<option>Nhóm bạn</option>
							</select>
						</div>
						<div class="col-6 col-md-3">
							<label class="form-label">Điểm đánh giá</label>
							<select class="form-select">
								<option selected>Tất cả (8)</option>
								<option>9–10 điểm</option>
								<option>7–8 điểm</option>
								<option>5–6 điểm</option>
							</select>
						</div>
						<div class="col-6 col-md-3">
							<label class="form-label">Ngôn ngữ</label>
							<select class="form-select">
								<option selected>Tất cả (8)</option>
								<option>Tiếng Việt</option>
								<option>English</option>
							</select>
						</div>
						<div class="col-6 col-md-3">
							<label class="form-label">Thời gian trong năm</label>
							<select class="form-select">
								<option selected>Tất cả (8)</option>
								<option>Mùa hè</option>
								<option>Mùa đông</option>
							</select>
						</div>
					</div>
					<p class="my-3">
						Chọn chủ đề để đọc đánh giá:
					</p>
					<div class="d-flex mb-3 gap-2">
						<button data-analytics="" data-cta="" class="btn btn-outline-secondary btn-sm">Bữa sáng</button>
						<button data-analytics="" data-cta="" class="btn btn-outline-secondary btn-sm">Bữa tối</button>
						<button data-analytics="" data-cta="" class="btn btn-outline-secondary btn-sm">Phòng</button>
						<button data-analytics="" data-cta="" class="btn btn-outline-secondary btn-sm">Sạch sẽ</button>
					</div>
					<div class="d-flex justify-content-between  align-items-center mt-3 mb-2">
						<h5 class="modal-title mt-3" id="reviewsModalLabel">Đánh giá của khách </h5>
						<div class="ms-auto">
							<select class="form-select form-select-sm" style="width: auto;">
								<option selected>Phù hợp nhất</option>
								<option>Mới nhất</option>
								<option>Cũ nhất</option>
							</select>
						</div>
					</div>


					<div class="card p-3 mb-3">
						<div class="row d-flex justify-content-center">
							<div class="col-md-3 p-3">
								<div class="d-flex justify-content-start">
									<div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
										style="width: 50px; height: 50px; font-size: 20px;">
										L
									</div>
									<div class="ms-3 flex-grow-1">
										<div class="d-flex justify-content-between">
											<div>
												<h6 class="mb-0 fw-bold">Laongsuwan</h6>
												<small class="text-muted">Việt Nam</small>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-2">
									<small class="text-muted d-block"><i class="bi bi-house-door"></i> Căn Hộ 2 Phòng
										Ngủ</small>
									<small class="text-muted d-block"><i class="bi bi-calendar"></i> 1 đêm - tháng
										3/2025</small>
									<small class="text-muted d-block"><i class="bi bi-people"></i> Nhóm</small>
								</div>
							</div>
							<div class="col-md-9 ">
								<div class="mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<small class="text-muted">Ngày đánh giá: ngày 9 tháng 4 năm 2025</small>
											<h5 class="mt-2 fw-bold">Một chuyến đi thật thú vị và tuyệt vời</h5>
										</div>
										<div class="bg-primary text-white rounded px-2 py-1">
											<strong>10</strong>
										</div>
									</div>
									<p class="mb-2">
										<i class="bi bi-check-circle-fill text-success me-1"></i>
										The apartment has a beautiful sea view. I can see the sunset from here. The
										apartment is clean and spacious. Fully equipped. I can cook all my favorite
										dishes in the kitchen. I had a wonderful vacation on this trip. I will recommend
										it to my friends. And make an appointment to come back soon.
									</p>
									<div class="d-flex justify-content-end gap-2">
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👍 Hữu
											ích</button>
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👎 Không hữu
											ích</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card p-3 mb-3">
						<div class="row d-flex justify-content-center">
							<div class="col-md-3 p-3">
								<div class="d-flex justify-content-start">
									<div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
										style="width: 50px; height: 50px; font-size: 20px;">
										L
									</div>
									<div class="ms-3 flex-grow-1">
										<div class="d-flex justify-content-between">
											<div>
												<h6 class="mb-0 fw-bold">Laongsuwan</h6>
												<small class="text-muted">Việt Nam</small>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-2">
									<small class="text-muted d-block"><i class="bi bi-house-door"></i> Căn Hộ 2 Phòng
										Ngủ</small>
									<small class="text-muted d-block"><i class="bi bi-calendar"></i> 1 đêm - tháng
										3/2025</small>
									<small class="text-muted d-block"><i class="bi bi-people"></i> Nhóm</small>
								</div>
							</div>
							<div class="col-md-9 ">
								<div class="mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<small class="text-muted">Ngày đánh giá: ngày 9 tháng 4 năm 2025</small>
											<h5 class="mt-2 fw-bold">Một chuyến đi thật thú vị và tuyệt vời</h5>
										</div>
										<div class="bg-primary text-white rounded px-2 py-1">
											<strong>10</strong>
										</div>
									</div>
									<p class="mb-2">
										<i class="bi bi-check-circle-fill text-success me-1"></i>
										The apartment has a beautiful sea view. I can see the sunset from here. The
										apartment is clean and spacious. Fully equipped. I can cook all my favorite
										dishes in the kitchen. I had a wonderful vacation on this trip. I will recommend
										it to my friends. And make an appointment to come back soon.
									</p>
									<div class="d-flex justify-content-end gap-2">
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👍 Hữu
											ích</button>
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👎 Không hữu
											ích</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card p-3 mb-3">
						<div class="row d-flex justify-content-center">
							<div class="col-md-3 p-3">
								<div class="d-flex justify-content-start">
									<div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
										style="width: 50px; height: 50px; font-size: 20px;">
										L
									</div>
									<div class="ms-3 flex-grow-1">
										<div class="d-flex justify-content-between">
											<div>
												<h6 class="mb-0 fw-bold">Laongsuwan</h6>
												<small class="text-muted">Việt Nam</small>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-2">
									<small class="text-muted d-block"><i class="bi bi-house-door"></i> Căn Hộ 2 Phòng
										Ngủ</small>
									<small class="text-muted d-block"><i class="bi bi-calendar"></i> 1 đêm - tháng
										3/2025</small>
									<small class="text-muted d-block"><i class="bi bi-people"></i> Nhóm</small>
								</div>
							</div>
							<div class="col-md-9 ">
								<div class="mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<small class="text-muted">Ngày đánh giá: ngày 9 tháng 4 năm 2025</small>
											<h5 class="mt-2 fw-bold">Một chuyến đi thật thú vị và tuyệt vời</h5>
										</div>
										<div class="bg-primary text-white rounded px-2 py-1">
											<strong>10</strong>
										</div>
									</div>
									<p class="mb-2">
										<i class="bi bi-check-circle-fill text-success me-1"></i>
										The apartment has a beautiful sea view. I can see the sunset from here. The
										apartment is clean and spacious. Fully equipped. I can cook all my favorite
										dishes in the kitchen. I had a wonderful vacation on this trip. I will recommend
										it to my friends. And make an appointment to come back soon.
									</p>
									<div class="d-flex justify-content-end gap-2">
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👍 Hữu
											ích</button>
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👎 Không hữu
											ích</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card p-3 mb-3">
						<div class="row d-flex justify-content-center">
							<div class="col-md-3 p-3">
								<div class="d-flex justify-content-start">
									<div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
										style="width: 50px; height: 50px; font-size: 20px;">
										L
									</div>
									<div class="ms-3 flex-grow-1">
										<div class="d-flex justify-content-between">
											<div>
												<h6 class="mb-0 fw-bold">Laongsuwan</h6>
												<small class="text-muted">Việt Nam</small>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-2">
									<small class="text-muted d-block"><i class="bi bi-house-door"></i> Căn Hộ 2 Phòng
										Ngủ</small>
									<small class="text-muted d-block"><i class="bi bi-calendar"></i> 1 đêm - tháng
										3/2025</small>
									<small class="text-muted d-block"><i class="bi bi-people"></i> Nhóm</small>
								</div>
							</div>
							<div class="col-md-9 ">
								<div class="mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<small class="text-muted">Ngày đánh giá: ngày 9 tháng 4 năm 2025</small>
											<h5 class="mt-2 fw-bold">Một chuyến đi thật thú vị và tuyệt vời</h5>
										</div>
										<div class="bg-primary text-white rounded px-2 py-1">
											<strong>10</strong>
										</div>
									</div>
									<p class="mb-2">
										<i class="bi bi-check-circle-fill text-success me-1"></i>
										The apartment has a beautiful sea view. I can see the sunset from here. The
										apartment is clean and spacious. Fully equipped. I can cook all my favorite
										dishes in the kitchen. I had a wonderful vacation on this trip. I will recommend
										it to my friends. And make an appointment to come back soon.
									</p>
									<div class="d-flex justify-content-end gap-2">
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👍 Hữu
											ích</button>
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👎 Không hữu
											ích</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card p-3 mb-3">
						<div class="row d-flex justify-content-center">
							<div class="col-md-3 p-3">
								<div class="d-flex justify-content-start">
									<div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
										style="width: 50px; height: 50px; font-size: 20px;">
										L
									</div>
									<div class="ms-3 flex-grow-1">
										<div class="d-flex justify-content-between">
											<div>
												<h6 class="mb-0 fw-bold">Laongsuwan</h6>
												<small class="text-muted">Việt Nam</small>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-2">
									<small class="text-muted d-block"><i class="bi bi-house-door"></i> Căn Hộ 2 Phòng
										Ngủ</small>
									<small class="text-muted d-block"><i class="bi bi-calendar"></i> 1 đêm - tháng
										3/2025</small>
									<small class="text-muted d-block"><i class="bi bi-people"></i> Nhóm</small>
								</div>
							</div>
							<div class="col-md-9 ">
								<div class="mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<small class="text-muted">Ngày đánh giá: ngày 9 tháng 4 năm 2025</small>
											<h5 class="mt-2 fw-bold">Một chuyến đi thật thú vị và tuyệt vời</h5>
										</div>
										<div class="bg-primary text-white rounded px-2 py-1">
											<strong>10</strong>
										</div>
									</div>
									<p class="mb-2">
										<i class="bi bi-check-circle-fill text-success me-1"></i>
										The apartment has a beautiful sea view. I can see the sunset from here. The
										apartment is clean and spacious. Fully equipped. I can cook all my favorite
										dishes in the kitchen. I had a wonderful vacation on this trip. I will recommend
										it to my friends. And make an appointment to come back soon.
									</p>
									<div class="d-flex justify-content-end gap-2">
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👍 Hữu
											ích</button>
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👎 Không hữu
											ích</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card p-3 mb-3">
						<div class="row d-flex justify-content-center">
							<div class="col-md-3 p-3">
								<div class="d-flex justify-content-start">
									<div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
										style="width: 50px; height: 50px; font-size: 20px;">
										L
									</div>
									<div class="ms-3 flex-grow-1">
										<div class="d-flex justify-content-between">
											<div>
												<h6 class="mb-0 fw-bold">Laongsuwan</h6>
												<small class="text-muted">Việt Nam</small>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-2">
									<small class="text-muted d-block"><i class="bi bi-house-door"></i> Căn Hộ 2 Phòng
										Ngủ</small>
									<small class="text-muted d-block"><i class="bi bi-calendar"></i> 1 đêm - tháng
										3/2025</small>
									<small class="text-muted d-block"><i class="bi bi-people"></i> Nhóm</small>
								</div>
							</div>
							<div class="col-md-9 ">
								<div class="mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<small class="text-muted">Ngày đánh giá: ngày 9 tháng 4 năm 2025</small>
											<h5 class="mt-2 fw-bold">Một chuyến đi thật thú vị và tuyệt vời</h5>
										</div>
										<div class="bg-primary text-white rounded px-2 py-1">
											<strong>10</strong>
										</div>
									</div>
									<p class="mb-2">
										<i class="bi bi-check-circle-fill text-success me-1"></i>
										The apartment has a beautiful sea view. I can see the sunset from here. The
										apartment is clean and spacious. Fully equipped. I can cook all my favorite
										dishes in the kitchen. I had a wonderful vacation on this trip. I will recommend
										it to my friends. And make an appointment to come back soon.
									</p>
									<div class="d-flex justify-content-end gap-2">
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👍 Hữu
											ích</button>
										<button data-analytics="" data-cta="" class="btn btn-link p-0">👎 Không hữu
											ích</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Review Item -->
	<div class="">




		<div class="d-none d-md-flex justify-content-center mt-5 " id="lien_ket_tong_quan">
			<div class="col-md-9">
				<div>
					<h2 class="text-dark">
						<strong>
							Căn hộ Sky89 2PN2WC 72m2 full nội thất cao cấp giá chỉ 15 triệu
						</strong>
					</h2>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="d-md-flex d-none justify-content-center">
					<div class="ms-2 me-2">
						<button data-analytics="" data-cta="" class="btn btn-white">
							<i class="bi bi-heart text-primary"></i>
						</button>
					</div>
					<div class="me-2">
						<button data-analytics="" data-cta="" class="btn btn-white">
							<i class="bi bi-share text-primary"></i>
						</button>
					</div>
					<div>
						<button data-analytics="" data-cta="" class="btn btn-primary text-nowrap flex-fill">
							Đặt căn hộ của bạn
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center mb-2 ">
			<div class="col-md-9">
				<div>
					<p><i class="bi bi-geo-alt-fill text-success"></i> 89, Đường Hoàng Quốc Việt, Phường Phú Thuận, Quận
						7, Hồ Chí Minh - <a data-analytics="" data-cta="" href="#">Vị trí xuất sắc</a></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="d-flex justify-content-center">

					<div>
						<button data-analytics="" data-cta="" class="btn btn-white text-primary text-nowrap flex-fill">
							<i class="bi bi-tag-fill me-3"></i>Chúng tôi luôn khớp giá
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row g-3 d-none d-md-flex">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-9 mb-2">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120034-3a42_wm.jpg"
							class="w-100 rounded" alt="Main">
					</div>
					<div class="col-md-3 ">
						<div class="mb-3">
							<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg"
								class="img-fluid rounded w-100" alt="Extra 1">
						</div>
						<div class="mb-3">
							<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg"
								class="img-fluid rounded w-100" alt="Extra 2">
						</div>
						<div class="mb-3">
							<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg"
								class="img-fluid rounded w-100" alt="Extra 2">
						</div>
					</div>
				</div>
				<div class="row g-1 ">
					<div class="col-12 col-md-2 ">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120031-6628_wm.jpg"
							class="img-fluid image-thumb rounded w-100" alt="Thumb">
					</div>
					<div class="col-12 col-md-2">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120034-3a42_wm.jpg"
							class="img-fluid image-thumb rounded w-100" alt="Thumb">
					</div>
					<div class="col-12 col-md-2">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120453-4202_wm.jpg"
							class="img-fluid image-thumb rounded w-100" alt="Thumb">
					</div>
					<div class="col-12 col-md-2">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg"
							class="img-fluid image-thumb rounded w-100" alt="Thumb">
					</div>
					<div class="col-12 col-md-2">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg"
							class="img-fluid image-thumb rounded w-100" alt="Thumb">
					</div>
					<div class="col-12 col-md-2 position-relative">
						<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg"
							class="img-fluid image-thumb rounded w-100" alt="Image 7" data-bs-toggle="modal"
							data-bs-target="#modalGallery" style="cursor: pointer;">
						<div class="position-absolute top-50 start-50 translate-middle text-white fw-bold"
							data-bs-toggle="modal" data-bs-target="#modalGallery">
							+37 ảnh
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="khung_ben_phai_noi_dung_1 shadow p-3">
					<div class="d-flex justify-content-end align-items-center m-0 p-1">
						<!-- Khối bên trái -->
						<div class="d-flex flex-column justify-content-center p-1">
							<h5 class="text-success mb-0">Xuất sắc</h5>
							<p class="mb-0"><strong>8 đánh giá</strong></p>
						</div>
						<!-- Nút bên phải -->
						<button data-analytics="" data-cta="" class="btn btn-primary text-white fw-bold ms-1 ">
							10
						</button>
					</div>
					<hr>
					<p>
						Khách lưu trú ở đây thích điều gì?
					</p>
					<p class="review-box">“The apartment has a beautiful sea view. I can see the sunset from here. The
						apartment is clean and spacious...”</p>
					<p><strong>Laongsuwan</strong> - 🇻🇳 Việt Nam</p>
					<hr>
					<div class="d-flex justify-content-between mb-1">
						<strong>Nhân viên phục vụ:</strong>
						<span class="btn bg-white text-dark border-black fw-bold nut_2_trang_3">10</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-12">
						<div class="position-relative phan_bieu_do_noi_dung_2_trang_3 mt-2">
							<iframe
								src="https://www.google.com/maps?q=28%20Đường%20Thi%20Sách,%20Vũng%20Tàu&output=embed"
								allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
								class=" border-0 w-100 map-img map-responsive" alt="Map"
								style="height: 220px;"></iframe>

							<button data-analytics="" data-cta=""
								class="btn btn-primary position-absolute top-50 start-50 translate-middle btn-sm w-75 py-2"><i
									class="bi bi-geo-alt-fill me-3 "></i>Hiển thị trên bản đồ</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- chế đ Mobile  -->
		<div class="container d-md-none d-flexx">
			<div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-2 mt-2">
				<div class="col">
					<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120031-6628_wm.jpg"
						class="img-fluid image-thumb rounded w-100" alt="Thumb">
				</div>
				<div class="col">
					<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120034-3a42_wm.jpg"
						class="img-fluid image-thumb rounded w-100" alt="Thumb">
				</div>
				<div class="col">
					<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120453-4202_wm.jpg"
						class="img-fluid image-thumb rounded w-100" alt="Thumb">
				</div>
				<div class="col">
					<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg"
						class="img-fluid image-thumb rounded w-100" alt="Thumb">
				</div>
				<div class="col">
					<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg"
						class="img-fluid image-thumb rounded w-100" alt="Thumb">
				</div>
				<div class="col position-relative">
					<img src="https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg"
						class="img-fluid image-thumb rounded w-100" alt="Image 7" data-bs-toggle="modal"
						data-bs-target="#modalGallery" style="cursor: pointer;">
					<div class="position-absolute top-50 start-50 translate-middle text-white fw-bold"
						data-bs-toggle="modal" data-bs-target="#modalGallery">
						+37 ảnh
					</div>
				</div>
			</div>
			<div class="row d-md-none d-block">
				<div class="col-md-12 col-12">
					<div class="position-relative phan_bieu_do_noi_dung_2_trang_3 mt-2">
						<iframe src="https://www.google.com/maps?q=28%20Đường%20Thi%20Sách,%20Vũng%20Tàu&output=embed"
							allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
							class=" border-0 w-100 map-img map-responsive" alt="Map" style="height: 220px;"></iframe>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- 2 -->
	<div class="container my-5" id="lien_ket_tien_nghi">
		<!-- Tiện nghi -->
		<div class="mb-4">
			<div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-3 justify-content-center  ">
				<div class="col d-flex justify-content-center">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100 "><i
							class="bi bi-house-fill me-1 fs-5"></i>Căn hộ</div>
				</div>
				<div class="col d-flex justify-content-center">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100 "><i
							class="bi bi-p-square-fill me-1 fs-5"></i>Bãi đỗ riêng
					</div>
				</div>
				<div class="col d-flex justify-content-center">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100 "><i
							class="bi bi-wifi me-1 fs-5"></i>WiFi miễn phí</div>
				</div>
				<div class="col d-flex justify-content-center">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100 "><i
							class="fas fa-person-swimming me-1 fs-5"></i>Hồ bơi riêng</div>
				</div>
				<div class="col d-flex justify-content-center">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100 "><i
							class="fas fa-person-swimming me-1 fs-5"></i>Hồ bơi</div>
				</div>
				<div class="col d-flex justify-content-center ">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100"><i
							class="fa-solid fa-umbrella-beach me-1 fs-5"></i> Ban công</div>
				</div>
				<div class="col d-flex justify-content-center ">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100"><i
							class="bi bi-snow3 me-1 fs-5"></i> Điều hòa không khí</div>
				</div>
				<div class="col d-flex justify-content-center ">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100"><i
							class="bi bi-water me-1 fs-5"></i> Phòng tắm riêng</div>
				</div>
				<div class="col d-flex justify-content-center ">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100"><i
							class="bi bi-shield-lock-fill me-1 fs-5"></i> Tầm nhìn ra khung cảnh</div>
				</div>
				<div class="col d-flex justify-content-center ">
					<div class="noi_dung_2_khung_icon bg-white p-3 text-center w-100"><i
							class="bi bi-cup-hot me-1 fs-5"></i>Bếp</div>
				</div>
			</div>
		</div>
		<!-- Nội dung 3: Thông tin nổi bật -->
		<div class="d-flex justify-content-center" id="lien_ket_thong_tin_can_ho_va_gia_ca">
			<div class="row">
				<div class="col-12 col-md-8 mb-4 pe-2">
					<p>
						Cho thuê gấp căn 2PN2WC 72m² - căn hộ full nội thất cao cấp <br>

						Địa chỉ: 89 Hoàng Quốc Việt, Phú Thuận, Quận 7. <br>

						Thông tin căn hộ: 2 phòng ngủ, 2 phòng tắm, ban công rộng rãi + lô gia.<br>

						- Diện tích: 2PN2WC (72m²).<br>

						- Giá thuê: 15 triệu/tháng.<br>

						- Tầng cao,Ban công siêu rộng rãi, view Q1 đẹp và thoáng mát cả ngày.<br>

						- Còn nhiều căn 2PN2WC full nội thất đẹp giá tốt liên hệ ngay để được tư vấn.<br>

						- Tiện ích đẳng cấp: Hồ bơi vô cực tầng 35, Gym, phòng chiếu phim, phòng karaoke, phòng xông hơi
						khô và ướt, công viên tầng Long Môn, BBQ ngoài trời tầng 35, khu vui chơi trẻ - tất cả đều
						free.<br>

						Vị trí: 89 Hoàng Quốc Việt, Phú Thuận, Quận 7 liền kề PMH, thuận tiện di chuyển vào trung tâm,
						khu dân cư đông.<br>
					</p>
					<strong>
						Các tiện nghi được ưa chuộng nhất
					</strong>
					<div class="d-flex mt-2 align-items-center text-nowrap">
						<i class="fas fa-person-swimming me-2 fs-5 text-success"></i><span>Hồ bơi</span><i
							class="bi bi-wifi me-2 fs-5 ms-3 text-success"></i><span>Wifi miễn phí</span><i
							class="bi bi-p-circle me-2 fs-5 ms-3 text-success"></i><span>Đậu xe riêng</span>
					</div>
				</div>

				<div class="col-12 col-md-4 thong_tin_dia_diem_hang_dau mb-4 p-3">
					<p><i class="bi bi-geo-alt me-2"></i> Địa điểm hàng đầu: Được khách gần đây đánh giá cao (9.7 điểm)
					</p>
					<p><i class="bi bi-p-circle me-2"></i> Có chỗ đậu xe riêng trong khuôn viên</p>
					<button data-analytics="" data-cta="" class="btn btn-primary w-100">Đặt ngay</button>
					<div class="justify-content-center text-center">
						<button data-analytics="" data-cta="" class="btn btn-outline-primary mt-3"><i
								class="bi bi-heart me-2"></i>Lưu chỗ nghỉ</button>
					</div>
				</div>
			</div>
		</div>
		<!-- phòng trống nội dung 4 -->

		<!-- NỘI DUNG THỨ 5: LỌC -->

		<div class="row filter">
			<div class="p-3 fw-bold fs-5">Lọc</div>
		</div>
		<div class="row" id="checkbox">
			<div class="p-3 d-flex flex-nowrap">
				<div class="form-check d-flex gap-3 me-4 px-0">
					<input class="form-check-input m-0 p-0 fs-5" type="checkbox" value="" id="checkDefault">
					<label class="form-check-label m-0 p-0 fs-6" for="checkDefault">Phòng</label>
				</div>
				<div class="form-check d-flex gap-3">
					<input class="form-check-input m-0 p-0 fs-5" type="checkbox" value="" id="checkChecked" checked>
					<label class="form-check-label m-0 p-0 fs-6" for="checkChecked">Căn hộ</label>
				</div>
			</div>
		</div>

		<!-- BẢNG ĐẶT PHÒNG PC -->
		<div class="container my-4 d-md-block d-none">
			<div class="table-responsive">
				<table
					class="table table-striped table-hover table-bordered border-primary rounded shadow overflow-hidden align-middle">
					<thead class=" text-center table-primary">
						<tr>
							<th scope="col">Loại phòng</th>
							<th scope="col">Giá</th>
							<th scope="col">Mô tả</th>
							<th scope="col">Tình trạng</th>
							<th scope="col">Đặt phòng</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($sevice as $key => $value) { ?>
							<tr class="text-center">
								<td class="fw-semibold"><?php echo $value->name ?></td>
								<td class="text-success fw-bold">
									<?php echo number_format($value->price, 0, ',', '.') . 'đ' ?></td>
								<td class="text-start">
									<div class="text-wrap clamp-text">
										<?php echo $value->content ?>
									</div>
								</td>
								<td>
									<div class="d-flex justify-content-between align-items-center m-2">
										<span class="status-badge text-dark" id="status-badge-<?= $value->id ?>">
											<?php
											switch ($value->status) {
												case 1:
													echo 'Hết phòng';
													break;
												case 0:
													echo 'Còn phòng';
													break;
												default:
													echo 'Không xác định';
													break;
											}
											?>
										</span>
									</div>
								</td>
								<td>

									<?php if (isset($_COOKIE['admin'])): ?>
										<div class="d-flex justify-content-center gap-2 flex-wrap">

											<?php if ($value->status == 0): ?>
												<!-- Chưa đặt -->
												<button class="btn btn-primary btn-sm text-nowrap datphong"
													data-id="<?= $value->id ?>" data-status="1"
													data-statusphong="<?= $value->status ?>" data-kt="<?= $_COOKIE['admin'] ?>">
													Đặt phòng
												</button>
												<button class="btn btn-danger btn-sm text-nowrap huyphong" style="display:none"
													data-id="<?= $value->id ?>" data-status="0" data-kt="<?= $_COOKIE['admin'] ?>">
													Hủy đặt
												</button>

											<?php elseif ($value->status == 1): ?>
												<?php if ($value->customer_email == $_COOKIE['admin']): ?>
													<!-- Nếu email đặt trùng với admin cookie -->
													<button class="btn btn-primary btn-sm text-nowrap datphong" style="display:none"
														data-id="<?= $value->id ?>" data-status="1"
														data-statusphong="<?= $value->status ?>" data-kt="<?= $_COOKIE['admin'] ?>">
														Đặt phòng
													</button>
													<button class="btn btn-danger btn-sm text-nowrap huyphong"
														data-id="<?= $value->id ?>" data-status="0" data-kt="<?= $_COOKIE['admin'] ?>">
														Hủy đặt
													</button>
												<?php else: ?>
													<!-- Nếu email đặt KHÔNG trùng -->
													<span class="badge bg-secondary">Phòng đã được đặt</span>
												<?php endif; ?>
											<?php endif; ?>

										</div>
									<?php elseif (!isset($_COOKIE['admin'])):  ?>
										<a href="login/customer" class="btn btn-info btn-sm text-nowrap ">
											Vui lòng đăng nhập
										</a>

									<?php endif; ?>



								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- KẾT THÚC BẢNG ĐẶT  -->

		<!-- bẢNG ĐẶT PHÒNG MOBILE  -->
		<!-- chế độ di động -->
		<div class="container">
			<?php foreach ($sevice as $key => $value) { ?>
				<div class="row border rounded p-3 bg-white shadow-sm d-flex d-md-none room-block">
					<div class="col-6 mb-3 mb-md-0">
						<img src="https://decoxdesign.com/upload/images/hotel-caitilin-1952m2-phong-ngu-01-decox-design.jpg" alt="Ảnh sản phẩm" class="img-box mb-3">
						<h5 class="fw-bold"><?php echo $value->name ?></h5>
						<p class="text-success fw-bold fs-5"><?php echo number_format($value->price, 0, ',', '.') . 'đ' ?></p>
					</div>

					<div class="col-6 d-block">

						<div class="content-box">
							<div class="content-inner">
								<p>
									<?php echo $value->content ?>
								</p>
							</div>
						</div>
						<button class="btn-toggle">Xem thêm</button>
					</div>
					<hr>
					<div class="row">
						<div class="d-flex  gap-2 mt-1">
							<?php
							switch ($value->status) {
								case 1:
									echo '<button class="btn btn-danger btn-sm ">Hết phòng</button>';
									break;
								case 0:
									echo '<button class="btn btn-success  btn-sm">Còn phòng</button>';
									break;
								default:
									echo '<button class="btn btn-secondary btn-sm">Không Xác Định</button>';
									break;
							}
							?>
							<!-- Nút hành động nếu là admin -->
							<?php if (isset($_COOKIE['admin'])): ?>
								<div class="">
									<?php if ($value->status == 0): ?>
										<!-- Chưa đặt -->
										<button class="btn btn-primary btn-sm text-nowrap datphong"
											data-id="<?= $value->id ?>" data-status="1"
											data-statusphong="<?= $value->status ?>" data-kt="<?= $_COOKIE['admin'] ?>">
											Đặt phòng
										</button>
										<button class="btn btn-danger btn-sm text-nowrap huyphong" style="display:none"
											data-id="<?= $value->id ?>" data-status="0" data-kt="<?= $_COOKIE['admin'] ?>">
											Hủy đặt
										</button>

									<?php elseif ($value->status == 1): ?>
										<?php if ($value->customer_email == $_COOKIE['admin']): ?>
											<!-- Nếu email đặt trùng với admin cookie -->
											<button class="btn btn-primary btn-sm text-nowrap datphong" style="display:none"
												data-id="<?= $value->id ?>" data-status="1"
												data-statusphong="<?= $value->status ?>" data-kt="<?= $_COOKIE['admin'] ?>">
												Đặt phòng
											</button>
											<button class="btn btn-danger btn-sm text-nowrap huyphong"
												data-id="<?= $value->id ?>" data-status="0" data-kt="<?= $_COOKIE['admin'] ?>">
												Hủy đặt
											</button>
										<?php else: ?>
											<!-- Nếu email đặt KHÔNG trùng -->
											<button class="btn btn-primary btn-sm">Phòng đã được đặt</button>
										<?php endif; ?>
									<?php endif; ?>

								</div>
							<?php elseif (!isset($_COOKIE['admin'])):  ?>
								<a href="login/customer" class="btn btn-info btn-sm text-nowrap ">
									Vui lòng đăng nhập
								</a>

							<?php endif; ?>

						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<style>
			/* Mobile*/
			.img-box {
				width: 100%;
				height: auto;
				object-fit: cover;
				border-radius: 8px;
			}

			.content-box {
				overflow: hidden;
				max-height: 150px;
				/* Mặc định rút gọn khi chưa mở */
				transition: max-height 0.5s ease;
			}



			.btn-toggle {
				margin-top: 10px;
				padding: 0;
				border: none;
				background: none;
				color: #007bff;
				cursor: pointer;
			}
		</style>
		<script>
			document.querySelectorAll('.room-block').forEach(block => {
				const contentBox = block.querySelector('.content-box');
				const contentInner = block.querySelector('.content-inner');
				const toggleBtn = block.querySelector('.btn-toggle');

				let isExpanded = false;

				toggleBtn.addEventListener('click', () => {
					if (!isExpanded) {
						const fullHeight = contentInner.scrollHeight + 'px';
						contentBox.style.maxHeight = fullHeight;
						toggleBtn.textContent = 'Thu gọn';
						isExpanded = true;
						contentBox.scrollIntoView({
							behavior: "smooth",
							block: "start"
						});
					} else {
						contentBox.style.maxHeight = '150px';
						toggleBtn.textContent = 'Xem thêm';
						isExpanded = false;
					}
				});
			});
		</script>
		<!-- KẾT THÚC BẢNG ĐẶT PHÒNG MOBILE  -->


		<!-- CSS: Hiển thị mô tả 3 chấm với nhiều dòng -->
		<style>
			.clamp-text {
				display: -webkit-box;
				-webkit-line-clamp: 5;
				/* Số dòng hiển thị */
				-webkit-box-orient: vertical;
				overflow: hidden;
				text-overflow: ellipsis;
				max-width: 250px;
				font-size: 0.9rem;
				line-height: 1.4em;
			}

			/* <blade media|%20(max-width%3A%20768px)%20%7B%0D>.clamp-text {
				max-width: 100%;
			} */
		</style>


	</div>
</div>

<!-- Modal trang số 3-->
<div class="modal fade" id="modalGallery" tabindex="-1" aria-labelledby="modalGalleryLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<h5 class="modal-title w-100 text-center d-flex justify-content-center align-items-center"
					id="modalGalleryLabel">
					<span class="me-2">
						Căn hộ Sky89 2PN2WC 72m2 full nội thất
					</span>
					<div class="d-md-flex d-none">
						<button data-analytics="" data-cta="" type="button" class="btn btn-primary">
							Đặt ngay
						</button>
					</div>

				</h5>
				<span class="d-none d-md-flex">Đóng</span> <button data-analytics="" data-cta="" type="button"
					class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?php
			$toi_uu_code_IMG_PC = [

				['https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120031-6628_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120453-4202_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120020-c026_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120031-6628_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120034-3a42_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120031-6628_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120023-27da_wm.jpg'],
				['https://file4.batdongsan.com.vn/2025/03/24/20250324120519-4480_wm.jpg'],
				['https://cf.bstatic.com/xdata/images/hotel/max1024x768/629207507.jpg?k=1a8e3767f8bef0e10c1c660138096c757400a18a6c25aa643dcf7e10c117ee04&o=&hp=1'],
				['https://cf.bstatic.com/xdata/images/hotel/max1024x768/629207485.jpg?k=94132927e0293ab1f28d7ce8b64623fc939be7fe8ef099c562bbc55c37c97e65&o=&hp=1'],
				['https://cf.bstatic.com/xdata/images/hotel/max1024x768/629207507.jpg?k=1a8e3767f8bef0e10c1c660138096c757400a18a6c25aa643dcf7e10c117ee04&o=&hp=1'],
			];
			?>
			<div class="modal-body">
				<div class="row">
					<!-- Gallery ảnh -->
					<div class="col-md-12">
						<div class="row g-2">
							<?php
							foreach ($toi_uu_code_IMG_PC as $key => $value) {
							?>
								<div class="col-4">
									<img src="<?php echo $value[0]; ?>" class="img-fluid rounded w-100" alt="Ảnh căn hộ">
								</div>
							<?php
							}
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function scrollCarousel(direction) {
		const container = document.getElementById('carouselList');
		const itemWidth = container.querySelector('.scroll-item-2').offsetWidth +
			16; // 16px là khoảng cách giữa các item (gap)
		container.scrollBy({
			left: direction * itemWidth,
			behavior: 'smooth'
		});
	}
</script>

<script>
	$(document).ready(function() {
		$('#checkDefault, #checkChecked').change(function() {
			const isAnyChecked = $('#checkDefault').is(':checked') || $('#checkChecked').is(':checked');

			// Nếu có ít nhất 1 checkbox được check và chưa hiện đoạn thông báo
			if (isAnyChecked && $('#checkbox .filter-message').length === 0) {
				$('#checkbox').append(`
                    <p class="filter-message text-muted mt-2 bg-light p-3">
                       Bạn đang xem một số loại chỗ nghỉ mà cơ sở lưu trú này cung cấp. Xóa bộ lọc này để xem tất cả các
                       tùy chọn có sẵn.
                    </p>
                `);
			}

			// Nếu không còn checkbox nào được check => xóa đoạn thông báo
			if (!isAnyChecked) {
				$('#checkbox .filter-message').remove();
			}
		});
	});
</script>
<script>
	$(document).ready(function() {
		$('.datphong').on('click', function(e) {
			const $this = $(this);
			const serviceId = $(this).data('id');
			const Idcustomer = $(this).data('kt');
			const status_sv = $(this).data('status');
			const status_phong = $(this).data('statusphong');
			if (!Idcustomer) {
				alert("Bạn vui lòng đăng nhập để đặt phòng");
				window.location.href = "login";
				exit();

			}
			if (!confirm("Bạn có chắc chắn muốn đặt phòng không?")) return;

			$.ajax({
				url: 'customer/datphong',
				method: 'POST',
				data: {
					id: serviceId,
					customer_tenant: Idcustomer,
					status: status_sv,
					status_phong: status_phong
				},
				success: function(response) {
					alert("Đặt phòng thành công!");
					$this.hide(); // Ẩn nút Đặt phòng
					$this.siblings('.huyphong').show(); // Hiện nút Hủy đặt
					// ✅ Cập nhật badge thành HẾT PHÒNG
					const statusBadge = $('#status-badge-' + serviceId);
					statusBadge.text('Hết phòng');
					statusBadge.removeClass().addClass('status-badge text-dark');
				},
				error: function() {
					alert("Có lỗi xảy ra khi gửi yêu cầu đặt phòng.");
				},
				complete: function() {
					console.log("Yêu cầu đặt phòng hoàn tất.");
				}
			});
		});
		$('.huyphong').on('click', function() {
			const $this = $(this);
			const serviceId = $this.data('id');
			const customerId = $this.data('kt');
			const status_phong = $(this).data('statusphong');

			if (!confirm("Bạn có chắc chắn muốn hủy đặt phòng không?")) return;

			$.ajax({
				url: 'customer/huyphong',
				method: 'POST',
				data: {
					id: serviceId,
					customer_tenant: customerId,
					status_phong: status_phong
				},
				success: function(response) {
					alert("Hủy đặt phòng thành công!");
					$this.hide(); // Ẩn nút Hủy đặt
					$this.siblings('.datphong').show(); // Hiện nút Đặt phòng
					// ✅ Cập nhật badge thành CÒN PHÒNG
					const statusBadge = $('#status-badge-' + serviceId);
					statusBadge.text('Còn phòng');
					statusBadge.removeClass().addClass('status-badge text-dark');
				},
				error: function() {
					alert("Có lỗi xảy ra khi hủy đặt phòng.");
				}
			});
		});
	});
</script>