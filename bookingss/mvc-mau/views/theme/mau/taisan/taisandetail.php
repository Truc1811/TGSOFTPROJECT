<?php
$sevice = json_decode($data['service_detail']);
?>

<!-- nội dung thứ 5 là bảng  -->
<div class="container">
	<div class="row filter">
		<div class="p-3 fw-bold fs-5">Lọc</div>
	</div>
	<div class="row " id="checkbox">
		<div class="p-3 d-flex flex-nowrap">
			<div class="form-check d-flex gap-3 me-4 px-0">
				<input class="form-check-input m-0 p-0 fs-5 " type="checkbox" value="" id="checkDefault">
				<label class="form-check-label m-0 p-0 fs-6" for="checkDefault">
					Phòng
				</label>
			</div>
			<div class="form-check d-flex gap-3 ">
				<input class="form-check-input m-0 p-0 fs-5 " type="checkbox" value="" id="checkChecked" checked>
				<label class="form-check-label m-0 p-0 fs-6" for="checkChecked">
					Căn hộ
				</label>
			</div>
		</div>
	</div>
	<div class="row table">
		<div class="p-3">
			<table class="table table-responsive table-bordered border-primary">
				<thead>
					<tr class="table-bordered border-primary">
						<th scope="col-2 col-md-3">Loại phòng</th>
						<th scope="col-2 col-md-3">Giá</th>
						<th scope="col-2 col-md-3">Mô tả</th>
						<th scope="col-2 col-md-3">Tình trạng</th>
						<th scope="col-2 col-md-3">Đặt phòng</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($sevice as $key => $value) {?>
						<tr class="align-middle">
							<td><?php echo $value->name ?></td>
							<td><?php echo $value->price ?></td>
							<td class="text-wrap text-truncate"><?php echo $value->content ?></td>
							<td><span class="badge rounded-pill text-bg-info p-2">Còn phòng</span></td>
							<td><button class="btn btn-primary btn-sm text-nowrap datphong" style="" data-id="<?php echo $value->id ?>" data-status="2" data-kt="<?php echo isset($_COOKIE['admin']) ? $_COOKIE['admin'] : '' ?>">Đặt phòng</button>
								<button class="btn btn-danger btn-sm text-nowrap huyphong" style="display:none" data-id="<?php echo $value->id ?>" data-status="1" data-kt="<?php echo isset($_COOKIE['admin']) ? $_COOKIE['admin'] : '' ?>">Hủy đặt</button>
							</td>
						</tr>
					<?php
					} ?>
				</tbody>
			</table>
		</div>

	</div>
</div>
<!-- 8 -->
</div>

<!-- Modal trang số 3-->
<div class="modal fade" id="modalGallery" tabindex="-1" aria-labelledby="modalGalleryLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<h5 class="modal-title w-100 text-center d-flex justify-content-center align-items-center" id="modalGalleryLabel">
					<span class="me-2">
						Căn hộ Sky89 2PN2WC 72m2 full nội thất
					</span>
					<div class="d-md-flex d-none">
						<button data-analytics="" data-cta="" type="button" class="btn btn-primary">
							Đặt ngay
						</button>
					</div>

				</h5>
				<span class="d-none d-md-flex">Đóng</span> <button data-analytics="" data-cta="" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
					<div class="col-md-8">
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
		const itemWidth = container.querySelector('.scroll-item-2').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
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
	$(document).ready(function () {
		$('.datphong').on('click', function (e) {
			const $this = $(this);
			const serviceId = $(this).data('id');
			const Idcustomer = $(this).data('kt');
			const status_sv = $(this).data('status');
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
					status: status_sv
				},
				success: function (response) {
					alert("Đặt phòng thành công!");
					$this.hide(); // Ẩn nút Đặt phòng
					$this.siblings('.huyphong').show(); // Hiện nút Hủy đặt
				},
				error: function () {
					alert("Có lỗi xảy ra khi gửi yêu cầu đặt phòng.");
				},
				complete: function () {
					console.log("Yêu cầu đặt phòng hoàn tất.");
				}
			});
		});
		$('.huyphong').on('click', function () {
			const $this = $(this);
			const serviceId = $this.data('id');
			const customerId = $this.data('kt');

			if (!confirm("Bạn có chắc chắn muốn hủy đặt phòng không?")) return;

			$.ajax({
				url: 'customer/huyphong',
				method: 'POST',
				data: {
					id: serviceId,
					customer_tenant: customerId
				},
				success: function (response) {
					alert("Hủy đặt phòng thành công!");
					$this.hide(); // Ẩn nút Hủy đặt
					$this.siblings('.datphong').show(); // Hiện nút Đặt phòng
				},
				error: function () {
					alert("Có lỗi xảy ra khi hủy đặt phòng.");
				}
			});
		});
	});
</script>