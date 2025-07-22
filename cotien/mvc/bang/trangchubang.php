<?php 
/**
 * 
 */
class trangchubang extends Controller
{
	
	public function taobang(){
		$qr="CREATE TABLE trangchu(
			id INT(255) PRIMARY KEY AUTO_INCREMENT,
			hotline VARCHAR(300),
			diachi VARCHAR(300),
			google_verify VARCHAR(300),
			google_map VARCHAR(300),
			company_name VARCHAR(300),
			image_slider VARCHAR(300),
			text_slidera VARCHAR(300),
			text_sliderb VARCHAR(300),
			text_sliderc VARCHAR(300),
			image_header VARCHAR(300),
			image_footer VARCHAR(300),
			image_favicon VARCHAR(300),
			image_company VARCHAR(300),
			zalo VARCHAR(300),
			twiter VARCHAR(300),
			instagram VARCHAR(300),
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);
		echo 'test';


	}
	public function xoabang(){
		$qr="DROP TABLE sanpham";
		mysqli_query($this->con,$qr);
	}

	function edit(){
		//$qr="ALTER TABLE sanpham CHANGE TenSV Ten VARCHAR(255)";
		$qr="ALTER TABLE san RENAME TO sanpham";
		mysqli_query($this->con,$qr);
	}

	//cach 2

	// function edit($col,$re){ // col ten cot can doi, re la ten muon doi
	// 	$qr="ALTER TABLE sanpham CHANGE TenSV Ten VARCHAR(255)";
	// 	mysqli_query($this->con,$qr);
	// }
}

?>