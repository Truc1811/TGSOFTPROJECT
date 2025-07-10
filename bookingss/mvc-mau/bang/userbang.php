<?php

/**
 * 
 */
class userbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE user(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			user VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			role VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			password VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			email VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE user";
		mysqli_query($this->con, $qr);
	}
	public function add_record()
	{
		$pw_hash=password_hash('1234',PASSWORD_DEFAULT);
		$qr = "INSERT INTO user (name, user, password,email,role)
				VALUES ('admin', 'admin', '$pw_hash','admin@gmail.com','1');";
		mysqli_query($this->con, $qr);
	}
}
