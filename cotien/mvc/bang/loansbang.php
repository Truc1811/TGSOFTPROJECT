<?php

/**
 * 
 */
class loansbang extends Controller
{

	public function taobang()
	{

		$qr = "CREATE TABLE loans(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			users_id BIGINT UNSIGNED NOT NULL,
			amount decimal(15,2) NOT NULL,
			invested_amount decimal(15,2) NOT NULL,
			duration int(11) NOT NULL,
			interest_rate double NOT NULL,
			status enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
			description text DEFAULT NULL,
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con, $qr);
	}

	public function xoabang()
	{
		$qr = "DROP TABLE loans";
		mysqli_query($this->con, $qr);
	}
	public function themkhoangoai()
	{
		$qr = "ALTER TABLE loans 
		ADD CONSTRAINT fk_loans_category 
		FOREIGN KEY(category_id) 
		REFERENCES category(id)";
		mysqli_query($this->con, $qr);
	}

	public function xoakhoangoai()
	{
		$qr = "ALTER TABLE loans DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con, $qr);
	}
}
