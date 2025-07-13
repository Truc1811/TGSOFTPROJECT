<?php 
/**
 * 
 */
class order_detailbang extends Controller
{
	
	public function taobang(){
		
		$qr="CREATE TABLE order_detail(
			id BIGINT PRIMARY KEY AUTO_INCREMENT,
			service_detail_id BIGINT,
			orders_id BIGINT,
			price FLOAT,
			quantity INT,
			status INT(255),
			create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		) ENGINE = InnoDB";
		mysqli_query($this->con,$qr);


	}

	public function xoabang(){
		$qr="DROP TABLE order_detail";
		mysqli_query($this->con,$qr);
	}

	public function xoakhoangoai(){
		$qr="ALTER TABLE sanpham DROP FOREIGN KEY fk_sp_menu";
		mysqli_query($this->con,$qr);
	}

	public function themkhoangoai(){
		// $qr = "ALTER TABLE order_detail
		// ADD CONSTRAINT fk_order_detail_order
		// FOREIGN KEY(orders_id) 
		// REFERENCES orders(id)";

		$qr = "ALTER TABLE order_detail
		ADD CONSTRAINT fk_order_detail_service_detail_id
		FOREIGN KEY(service_detail_id) 
		REFERENCES service_detail(id)";
		mysqli_query($this->con,$qr);
	}
}

?>