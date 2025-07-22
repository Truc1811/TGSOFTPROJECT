<?php
class transactionsmodel extends Controller{
	public $tablename='transactions';

	function add( $wallet_id, $amount, $type, $description) {
	$columns = 'wallet_id, amount, type, description';
	$values = "'$wallet_id', '$amount', '$type', '$description'";
	$this->insert($columns, $values);
	}

	function updateTransaction($id, $amount, $type) {
	$updated_at = date('Y-m-d H:i:s');

	$set = "amount = '$amount', type = '$type', updated_at = '$updated_at'";
	$where = "id = $id";

	$this->update($set, $where);
	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}
}
?>