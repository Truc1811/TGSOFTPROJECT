<!-- <style type="text/css">
.don_hang>div:last-of-type{
	border-bottom: 1px solid black;
}
/*.don_hang_1>div{
	border-top: 1px solid black;
	border-left: 1px solid black;
	padding: 0.5vw;
}	*/
.don_hang_1>div:nth-of-type(1){
	width: 10%;
}	
.don_hang_1>div:nth-of-type(2){
	width: 30%;
}	
.don_hang_1>div:nth-of-type(3){
	width: 30%;
}	
.don_hang_1>div:nth-of-type(4){
	width: 20%;
}	
.don_hang_1>div:nth-of-type(5){
	width: 10%;
}	
	.contact__form {
    	margin-top: 20px;
    	margin-bottom: 20px;
    	padding-top: 10px;
    	padding-bottom: 10px;
    	box-shadow: 10px 0px 40px 0px #b4b4b4;
	}

	.contact__form .bg-highlight {
		width: 100px;
	    top: 0px;
	    right: 0px;
	    background-color: #cd9a2b;
	}

	.contact__form form input {
		font-size: 14px;
	    color: var(--clr-text);
	    height: 35px;
	    min-height: 35px;
	    border: 0;
     	outline: 0;
	    border-bottom: 1px solid var(--clr-border-contact);
	}

	.contact__form form input::placeholder {
		color: var(--clr-black);
	}

	.contact__form form button {
		font-size: 16px;
		line-height: 45px;
		height: 46px;
		padding: 0px 12px;
		border: 1px solid var(--clr-black);
	}

	.contact__form form button:hover {
		background-color: #915b10 !important;
		border-color: var(--clr-primary);
	}

	.contact__infor {
		padding: 16px 40px;
	}

	.contact__infor .point {
	    width: 30px;
		height: 30px;
		top: -15px;
		left: -15px;
		background-color: #cd9a2b;
	}
	.border_0{
		border: 0 !important;
	}
	.form-control:focus {
	    color: #212529;
	    background-color: unset;
	    border-color: unset; 
	    outline: 0;
	    box-shadow: unset; 
	}
	.click:hover{
		background-color: #915b10 !important;
		border-color: var(--clr-primary);
	}
	.text-form{
		color: #F5F5F5;
	}
	/*-----------------------------Ipad dọc(768 x 1024)----------------------------------*/
	@media screen and (max-width: 1024px) {  
		.contact__form {
			margin-top: 20px;
			margin-bottom: 50px;
			padding: 70px 0px 40px 50px;
		}

		.contact__form .bg-highlight {
			width: 150px;
		}
		.border_0{
			border: 0 !important;
		}
		.form-control:focus {
		    color: #212529;
		    background-color: unset;
		    border-color: unset; 
		    outline: 0;
		    box-shadow: unset; 
		}
		.click:hover{
			background-color: #915b10 !important;
    		border-color: var(--clr-primary);
		}
		.text-form{
			color: #F5F5F5;
		}
	}

	/*--------------------Di động-----------------------------------------------------*/
	@media screen and (max-width: 780px) {
	    .bangchat {
	        position: fixed;
	        bottom: 2vh;
	        right: 1vw;
	        display: grid;
	        grid-template-columns: 100%;
	        width: 13vw;
	        grid-gap: 1vw 0;
	        z-index: 30;
	    }
	    .contact__form {
			padding-left: 100px;
		}
		.border_0{
			border: 0 !important;
		}
		.form-control:focus {
		    color: #212529;
		    background-color: unset;
		    border-color: unset; 
		    outline: 0;
		    box-shadow: unset; 
		}
		.click:hover{
			background-color: #915b10 !important;
    		border-color: var(--clr-primary);
		}
		.text-form{
			color: #F5F5F5;
		}
	}
</style>
<?php 
	$cart=json_decode($data['sanpham']);
	$qcl=json_decode($data['qcl']);
 ?>
<div class="row p-6 d-flex justify-content-between align-items-center">
	
	<div class="col-12 col-md-5 shadow">
		<div class="py-4 fs-3 text-center fw-bold fs-5">
			Order Infomation
		</div>
		<form method="post" class="row g-3 p-3" action="cart/payment">
		  <div class="col-md-6">
		    <label for="inputEmail4" class="form-label">Name(*)</label>
		    <input type="text" class="form-control" id="inputEmail4" name="name" required>
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="inputPassword4" class="form-label">Phone (*)</label>
		    <input type="number" class="form-control" id="inputPassword4" name="sodienthoai" required>
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="inputPassword4" class="form-label">Email (*)</label>
		    <input type="email" class="form-control" id="inputPassword4" name="email" required>
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="inputAddress" class="form-label">Country(*)</label>
		    <select class="form-select" aria-label="Default select example">
			  <option selected>Open this select menu</option>
			  
			</select>
		  </div>
		  <div class="col-12 col-md-6">
		    <label for="inputAddress" class="form-label">Address(*)</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="" name="diachi" required>
		  </div>
		  
		  <div class="col-md-6"></div>
		  <div class="col-md-12">
		    <label for="noidung" class="form-label">Transaction code(*)</label>
		    <textarea class="form-control" id="noidung" placeholder="Please enter the transaction code here" name="ghichu" required></textarea>
		  </div>
		  <div class="col-12 mt-3">
		    <input type="submit" class="btn click btn-primary w-100 text-white text-uppercase bg-black fw-600 d-block" name="sbcart" value="Send" />
		  </div>
		  <div class="col-12">
		  	<p style="font-size: 15px">After you press the send button, we will send a order information form via your email</p>
		  </div>
		</form>
	</div>

</div> -->