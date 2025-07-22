<?php

/**
 * 
 */
class kycsbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE kycs(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			users_id BIGINT(20) UNSIGNED NOT NULL,
 			full_name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  			id_number VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  			dob DATE NOT NULL,
  			front_image VARCHAR(255) NOT NULL,
  			back_image VARCHAR(255) NOT NULL,
  			status ENUM('pending','approved','rejected') NOT NULL DEFAULT 'pending',
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE kycs";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE kycs 
		ADD CONSTRAINT fk_kycs_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE kycs DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}
	public function themtrung()
	{
		$qr = "ALTER TABLE kycs ADD CONSTRAINT unique_id_number UNIQUE (id_number)";
		mysqli_query($this->con, $qr);
	}

	
}
