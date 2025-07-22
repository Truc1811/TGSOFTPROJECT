<?php

/**
 * 
 */
class usersbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE users(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
			email VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci UNIQUE,
			password VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
			address VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
			role BIGINT NOT NULL,
			kyc_status ENUM('pending','approved','rejected') NOT NULL DEFAULT 'pending',
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE users";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE users 
		ADD CONSTRAINT fk_users_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE users DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}

	public function add_record()
	{
		$pw_hash=password_hash('1234',PASSWORD_DEFAULT);
		$qr = "INSERT INTO user (name, email, password,address,role,kyc_status)
				VALUES ('admin', 'admin@gmail.com', '$pw_hash','121 Nguyễn thái bình','3','approved');";
		mysqli_query($this->con, $qr);
	}
}
