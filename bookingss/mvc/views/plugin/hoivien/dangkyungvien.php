<?php 
	class gt
    {
        
        function __construct($name, $meta_description, $image){
            $this->name=$name;
            $this->meta_description=$meta_description;
            $this->image=$image;
        }
    }
	$datagt = array(
       array('Việc Làm Thêm Ngành Tổ Chức Sự Kiện Và Những Điều Cần Biết','Việc làm thêm ngành tổ chức sự kiện và những điều cần biết[…]	','lt1.jpg'),
       array('Topica Tuyển Dụng Và Kinh Nghiệm Phỏng Vấn Bạn Nên Biết','Topica tuyển dụng và kinh nghiệm phỏng vấn bạn nên biết sẽ giúp bạn[…]','lt2.jpg'),
       array('CGV Tuyển Dụng Part Time Và Những Thông Tin Cần Biết','CGV Tuyển dụng part time và những thông tin cần biết về hồ sơ, mẫu đơn[…]','lt3.jpg'),
       array('Lotte Cinema Tuyển Dụng Part Time Và Kinh Nghiệm Phỏng Vấn','Lotte Cinema tuyển dụng part time và kinh nghiệm phỏng vấn sẽ giúp cho các[…]','lt4.jpg'),
       array('Bản Tin Tổng Hợp Việc Làm Thêm Ngày 06/10/2020','Bản Tin Tổng Hợp Việc Làm Thêm Ngày 06/10/2020','lt5.jpg'),
    );

    
    $gt = array();
    foreach($datagt as $key => $value){
        array_push($gt,new gt($value[0],$value[1],$value[2]));
    }
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
	.lamthem{
		border: 1px solid #cccc;
		padding: 21px 14px 23px 14px;
	}
	.xemthem{
		border: 2px solid #a1abb3;
		color: #676c6d;
		transition: 0.2s ease all;
	}
	.xemthem:hover{
		color: #676c6d;
		box-shadow: 2px 2px 3px #aaaaaa;
		transition: 0.2s ease all;
	}
	.card-lt{
		height: 28vw;
	}
	.tt-chieucao{
		-webkit-line-clamp: 3;
		height: 60px;
		overflow: hidden;
	}
	.email-hd{
	    width: 100%;
	    height: 128px;
	    border: 1px solid #ccc;
	    background: #f5f5f5;
	}
	.w_375{
		width: 175px !important;
	}
	input[type=text], select {
		  width: 100%;
		  padding: 5px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
	}
	input[type=password], select {
	  width: 100%;
	  padding: 5px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	.header-top{
		background-color: var(--header-top);
	}
	@media (min-width: 768px){
		.px-gt{
			padding-left: 5vw;
			padding-right: 5vw;
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
		.lamthem{
			border: 1px solid #cccc;
    		padding: 21px 14px 23px 14px;
		}
		.xemthem{
			border: 2px solid #a1abb3;
			color: #676c6d;
			transition: 0.2s ease all;
		}
		.xemthem:hover{
			color: #676c6d;
			box-shadow: 2px 2px 3px #aaaaaa;
    		transition: 0.2s ease all;
		}
		.card-lt{
			height: 10vw;
		}
		.tt-chieucao{
			-webkit-line-clamp: 3;
    		height: 60px;
    		overflow: hidden;
		}
		.email-hd{
		    width: 100%;
		    height: 74px;
		    border: 1px solid #ccc;
		    background: #f5f5f5;
		}
		.w_375{
			width: 375px !important;
		}
		.cursor{
			cursor: pointer;
		}
		.header-top{
			background-color: var(--header-top);
		}
	}
	@media (min-width: 1400px){
		.px-gt{
			padding-left: 13vw;
			padding-right: 13vw;
		}
		.px-dk{
			padding-left: 34vw;
			padding-right: 34vw;
		}
		.bg{
        	background-size: cover;
        	background-repeat: no-repeat;
        	background-position: center;
        }
        .card-dk{
        	height: 10vw;
        }
        .fs-13{
        	font-size: 13px;
        }
		.email-hd{
		    width: 100%;
		    height: 74px;
		    border: 1px solid #ccc;
		    background: #f5f5f5;
		}
		.w_375{
			width: 375px !important;
		}
		.cursor{
			cursor: pointer;
		}
		input[type=text], select {
		  width: 100%;
		  padding: 5px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=password], select {
		  width: 100%;
		  padding: 5px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		.header-top{
			background-color: var(--header-top);
		}
	}
</style>
<div class="row px-dk bg-warning py-3">
	<nav>
	  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	    <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-td" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Đăng ký nhà tuyển dụng</button>
	    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-uv" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Đăng ký ứng viên</button>
	  </div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade " id="nav-td" role="tabpanel" aria-labelledby="nav-home-tab">
		  	<div class="bg-white border rounded-2 mb-4 shadow-sm">
				<div class="p-3 text-center">
					<h3 class="pb-2">Đăng ký</h3>
					<div class="header-top d-flex justify-content-center py-3 align-content-center">
						<div class="col-4 text-center" >
							<img src="public/demo/dk.png">
						</div>
						<div class="col-8 fs-3 text-white fw-bold">
							Đăng ký nhà tuyển dụng
						</div>
					</div>
					<div class="px-md-5 px-0 py-3">
						<form method="post" action="hoivien/dangky" enctype="multipart/form-data">
						    
						    <input class="form-control mb-2" type="email" name="email" placeholder="Địa chỉ email của bạn(*)" required="required" >
						  	<input class="form-control mb-2" type="text" name="hotline" placeholder="Số điện thoại(*)" pattern="[0-9]{7,15}" required="required" title="Sai số điện thoại. Bạn vui lòng xem lại">
						    <input class="form-control mb-2" type="password"  name="password" placeholder="Mật khẩu(*)" required="required">
						    <input class="form-control mb-2"  type="password"  name="passworda" placeholder="Nhập lại mật khẩu(*)" required="required" >
						    <input class="form-control mb-2" type="text" name="name" placeholder="Tên công ty" >
						    <input class="form-control mb-2" type="text" name="diachi" placeholder="Địa chỉ" >
						    <input type="file" name="image" id="image1" class="d-none">
						    <input type="hidden" name="phanloai" value="1">
						    <label for="image1" class="form-control text-black-50 my-2" style="text-align:left;"><i class="bi bi-box-arrow-up"></i> Hình logo công ty / shop / cửa hàng</label>
						    <input class="btn header-top form-control mt-2 text-white" value="Đăng ký" type="submit" name="dangky1">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade show active" id="nav-uv" role="tabpanel" aria-labelledby="nav-profile-tab">
		  	<div class="bg-white border rounded-2 mb-4 shadow-sm">
				<div class="p-3 text-center">
					<h3 class="pb-2">Đăng ký</h3>
					<div class="header-top d-flex justify-content-center py-3 align-content-center">
						<div class="col-4 text-center" >
							<img src="public/demo/dk.png">
						</div>
						<div class="col-8 fs-3 text-white fw-bold">
							Đăng ký ứng viên
						</div>
					</div>
					<div class="px-md-5 px-0 py-3">
						<form method="post" action="hoivien/dangky" enctype="multipart/form-data">
						    
						    <input class="form-control mb-2" type="email" name="email" placeholder="Địa chỉ email của bạn(*)" required="required" >
						  	<input class="form-control mb-2" type="text" name="hotline" placeholder="Số điện thoại(*)" pattern="[0-9]{7,15}" required="required" title="Sai số điện thoại. Bạn vui lòng xem lại">
						    <input class="form-control mb-2" type="password"  name="password" placeholder="Mật khẩu(*)" required="required">
						    <input class="form-control mb-2"  type="password"  name="passworda" placeholder="Nhập lại mật khẩu(*)" required="required" >
						    <input class="form-control mb-2" type="text" name="name" placeholder="Họ và tên" >
						    <input class="form-control mb-2" type="text" name="diachi" placeholder="Địa chỉ" >
						    <input type="hidden" name="phanloai" value="2">
						    <input type="file" name="image" id="image" class="d-none">
						    <label for="image" class="form-control text-black-50 my-2" style="text-align:left;"><i class="bi bi-box-arrow-up"></i> Upload CV ( jpg,png,gif)</label>
						    <input class="btn header-top form-control mt-2 text-white" value="Đăng ký" type="submit" name="dangky">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row px-gt bg-warning py-3 pb-5">
	<div>
		<div class="email-hd d-flex flex-wrap justify-content-between align-items-center p-2">
			<div class="col-md-6 col-12">
				<img src="public/demo/mail.png" alt="">
				<span class="px-2"> Nhận email thông báo việc làm phù hợp với bạn</span>
			</div>
			<div class="col-md-6 col-12">
				<div class="input-group flex-nowrap">
				  <input type="text" class="form-control w_375 my-0" aria-label="Recipient's username" aria-describedby="basic-addon2">
				  <span class="input-group-text header-top text-white" id="basic-addon2"><span class="px-2"><i class="bi bi-pencil-square"></i></span>Đăng ký ngay </span>
				</div>
			</div>
		</div>
	</div>
</div>
