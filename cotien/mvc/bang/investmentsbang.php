<?php

/**
 * 
 */
class investmentsbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE investments(
			id BIGINT PRIMARY KEY AUTO_INCREMENT UNSIGNED NOT NULL,
			investor_id BIGINT UNSIGNED NOT NULL,
			loan_id BIGINT UNSIGNED NOT NULL,
			amount DECIMAL(15,2) NOT NULL,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE investments";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE investments 
		ADD CONSTRAINT fk_investments_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE investments DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}
}
