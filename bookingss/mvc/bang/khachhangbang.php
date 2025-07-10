<?php 
/**
 * 
 */
class khachhangbang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE khachhang(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			phone INT(255),
			address VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			level VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			type VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			status VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			email VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE khachhang";
		mysqli_query($this->con,$qr);
	}
}

?>