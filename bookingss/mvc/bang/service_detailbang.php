<?php

/**
 * 
 */
class service_detailbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE service_detail(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			service_id BIGINT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			content TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			image VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			price FLOAT,
			discount INT(255),
			status INT(255),
			word_seo VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_description VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_keywords VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE service_detail";
		mysqli_query($this->con, $qr);
	}
	public function addcot(): void{
		$qr=" ALTER TABLE service_detail ADD COLUMN customer_email VARCHAR(255)";
		mysqli_query($this->con,$qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE service_detail DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}

	public function themkhoangoai()
	{
		$qr = "ALTER TABLE service_detail ADD FOREIGN KEY(father_level) REFERENCES menu(id)";
		mysqli_query($this->con, $qr);
	}
}
