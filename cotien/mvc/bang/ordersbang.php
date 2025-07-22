<?php 
/**
 * 
 */
class ordersbang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE orders(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			customer_tenant BIGINT,
			customer_owner BIGINT,
			status INT(255),	
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE orders";
		mysqli_query($this->con,$qr);
	}
	public function addcot(): void{
		$qr=" ALTER TABLE orders ADD COLUMN image VARCHAR(255)";
		mysqli_query($this->con,$qr);
	}

	public function xoakhoangoai(){
		$qr="ALTER TABLE sanpham DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con,$qr);
	}

	public function themkhoangoai(){
		$qr = "ALTER TABLE orders 
		ADD CONSTRAINT fk_order_customer
		FOREIGN KEY(customer_id) 
		REFERENCES customer(id)";
		mysqli_query($this->con,$qr);
	}
}

?>