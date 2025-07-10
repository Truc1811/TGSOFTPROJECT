<?php 
/**
 * 
 */
class thongtintaisanbang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE thongtintaisan(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			address VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			content TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			phone INT(255),
			email VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			price FLOAT,
			price_sale FLOAT,
			image VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			type VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			khachhang_id BIGINT,
			status VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			khong_dau VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_description VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_keywords VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			CONSTRAINT fk_ttts_kh FOREIGN KEY (khachhang_id) REFERENCES khachhang(id)
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE sanpham";
		mysqli_query($this->con,$qr);
	}

	public function xoakhoangoai(){
		$qr="ALTER TABLE sanpham DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con,$qr);
	}

	public function themkhoangoai(){
		$qr="ALTER TABLE thongtintaisan ADD FOREIGN KEY(father_level) REFERENCES menu(id)";
		mysqli_query($this->con,$qr);
	}
}

?>