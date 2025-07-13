<?php

/**
 * 
 */
class blogbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE blog(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			content VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			status VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			image VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			category_id BIGINT,
			number INT(255),
			url_seo VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_description VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			meta_keywords VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE blog";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE blog 
		ADD CONSTRAINT fk_blog_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE blog DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}
}
