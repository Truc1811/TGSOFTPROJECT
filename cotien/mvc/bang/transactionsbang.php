<?php

/**
 * 
 */
class transactionsbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE transactions(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			wallet_id BIGINT UNSIGNED NOT NULL,
			type enum('deposit','withdraw') NOT NULL,
			amount decimal(15,2) NOT NULL,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE transactions";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE transactions 
		ADD CONSTRAINT fk_transactions_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE transactions DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}
}
