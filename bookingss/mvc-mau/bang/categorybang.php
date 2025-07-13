<?php 
/**
 * 
 */
class categorybang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE category(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			link VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			level INT(255),
			father_level BIGINT,
			number INT(255),
			status INT(255),
			url_seo VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			icon VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			image VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE category";
		mysqli_query($this->con,$qr);
	}
}

?>