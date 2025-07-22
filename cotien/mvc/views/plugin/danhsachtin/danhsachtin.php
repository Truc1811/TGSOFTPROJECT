<style type="text/css">
	.custom-box {
		border: 1px solid #ccc;
		background-color: #f8f9fa;
		padding: 8px;
		border-radius: 5px;
		width: 130px
	}
	@media (max-width:576px){
		.dstd{
			text-align: center;
		}
	}
	.detail-product span{
		font-size:18px;
	}
	.detail-product i{
		margin-left:18px;
	}
	.des-product a{
		font-size:18px;
	}
</style>
<?php 
$news=json_decode($data['news']);
	// echo '<pre>';
	// var_dump($news);
	// echo '</pre>';
	// foreach ($sanpham as $key => $value) {
	// 	echo $value->name;
	// }

?>

<div class="container-fluid">
	<div class="container-lg">
		<div class="row mt-3">
			<div class="col-12 col-md-6">
				<h2 class="text-primary fw-bold mt-1 dstd">Danh sách tin đăng</h2>
			</div>
			<div class="col-12 col-md-6 d-flex justify-content-center ">
				<div class="d-flex justify-content-center mt-2">
					<div class="d-flex justify-content-center align-items-center">
						<button class="btn border rounded px-4 py-2 d-flex align-items-center">
							<i class="bi bi-list-ul me-2"></i>
							<a href="http://localhost/muaban/danhsachtin" class="text-primary fw-bold">Danh sách tin</a>
						</button>

					</div>
					<div class="d-flex justify-content-center align-items-center ms-2">
						<button class="btn border rounded px-4 py-2 d-flex align-items-center">
							<i class="bi bi-list-ul me-2"></i>
							<a href="http://localhost/muaban/dangtin" class="text-primary fw-bold">Đăng tin</a>
						</button>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>



<!-- table -->
<div class="container-fluid">
	<div class="container-lg">

		<div class="row mt-3 mb-4">
			<?php 
			foreach ($news as $key => $value) {
			?>
			<!--hinh mobile -->
			<div class="col-12 d-block d-md-none mt-2">
				<img class="img-fluid d-block m-auto w-100 " src="public/upload/dn1.jpg" alt="Hình ảnh dự án">
			</div>
			<!--end hinh mobile -->

			<!--hinh tablet -->
			<div class="col-12 col-md-4 d-none d-md-block ">
				<div class="d-flex justify-content-end">
					<img class="img-fluid w-75 " src="public/upload/<?php echo $value->image; ?>" alt="Hình ảnh dự án">
				</div>
			</div>
			<!--end tablet -->
			<div class="col-12 col-md-8 d-flex align-items-center">
				<div class="me-2">
					<a class="d-block fs-18 fw-bold mt-4" href="http://localhost/muaban/sanpham/chitiet/<?php echo $value->id ?>">
						<?php echo $value->name ?>
					</a>

					<div class="fs-18 mb-2">
						<i class="bi bi-calendar-week"></i>&ensp;15/05/2025
					</div>

					<div class="d-flex flex-wrap mb-2">
						<div class="fs-18 me-3">
							<i class="bi bi-arrow-right-square-fill" ></i></i>&ensp;<a href="" style="color:red; font-size:18px">Cần bán</a>
						</div>
						<div class="fs-18 me-3">
							<i class="bi bi-calendar-week"></i>&ensp;15/05/2025 hoạt động
						</div>
						<div >
							<i class="bi bi-bank2"></i>
							<a href="#" class=" text-decoration-none fs-18">&ensp;Bất động sản</a>
						</div>
						<div>
							<i class="bi bi-geo-alt-fill ms-3"></i>
							<a href="#" class="fs-18 text-decoration-none me-2">&ensp;Quảng Ninh</a>
						</div>
						<div>
							<i class="bi bi-geo-alt-fill "></i>
							<a href="#" class="fs-18 text-decoration-none me-2">&ensp;15 tỷ</a>
						</div>
					</div>
					<div class="des-product mt-2">
						<span class="text-primary fs-18">Trạng thái:</span> <span class="fs-18">chờ duyệt</span>
						<i class="bi bi-pen ms-3"></i>&ensp;<a href="" class="">Sửa</a>
						<i class="bi bi-wallet2 ms-3"></i>&ensp;<a href="#" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</a>
					</div>
				</div>
			</div>
			<?php 
			};
			?>

		</div>
	</div>

	<!-- end table -->

	<!-- mobile -->
	
	<!-- end mobile -->
</div>
