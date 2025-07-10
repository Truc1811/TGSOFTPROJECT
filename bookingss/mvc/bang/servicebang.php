<?php 
/**
 * 
 */
class servicebang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE service(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			address VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			content TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			phone INT(255),
			email VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			image VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			hide INT(255),
			customer_id BIGINT,
			status INT(255),
			word_seo VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_description VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_keywords VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE service";
		mysqli_query($this->con,$qr);
	}

	public function xoakhoangoai(){
		$qr="ALTER TABLE service DROP FOREIGN KEY fk_service_customer";
		mysqli_query($this->con,$qr);
	}

	public function themkhoangoai(){
		$qr = "ALTER TABLE service 
		ADD CONSTRAINT fk_service_customer
		FOREIGN KEY(customer_id) 
		REFERENCES customer(id)";
		mysqli_query($this->con,$qr);
	}
}

?>