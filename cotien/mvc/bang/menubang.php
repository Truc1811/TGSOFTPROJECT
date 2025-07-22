<?php 
/**
 * 
 */
class menubang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE menu(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			link VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			level INT(255),
			father_level BIGINT,
			rank INT(255),
			hide INT(255),
			khongdau VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			icon VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			image VARCHAR(300)CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE menu";
		mysqli_query($this->con,$qr);
	}
}

?>