<?php

/**
 * 
 */
class walletsbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE wallets(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			users_id BIGINT UNSIGNED NOT NULL ,
			balance decimal(15,2) NOT NULL DEFAULT 0.00,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE wallets";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE wallets 
		ADD CONSTRAINT fk_wallets_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE wallets DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}
}
