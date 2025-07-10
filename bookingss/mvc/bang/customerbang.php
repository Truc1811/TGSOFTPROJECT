<?php 
/**
 * 
 */
class customerbang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE customer(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			phone INT(255),
			address VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			password VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			level INT(255),
			status INT(255),
			email VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			image VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE customer";
		mysqli_query($this->con,$qr);
	}
	public function addcot(){
		$qr=" ALTER TABLE customer ADD COLUMN image VARCHAR(255)";
		mysqli_query($this->con,$qr);
	}

	public function add_record()
	{
		$pw_hash=password_hash('1234',PASSWORD_DEFAULT);
		$qr = "INSERT INTO customer (name, phone,address, password,level,status,email)
				VALUES ('Công Minh', '0385147548','215 đặng văn bi', '$pw_hash','1','1','minh@gmail.com');";
		mysqli_query($this->con, $qr);
	}
	
}

?>