<?php
//thư viện dùng kết nối data cho các file trong folder model
class Data
{
	public $con;
	public $severname = 'localhost';
	public $username = 'root';
	public $password = '';
	public $dbname = 'cotien';
	public $tablename;

	function __construct()
	{
		$this->con = mysqli_connect($this->severname, $this->username, $this->password);
		mysqli_select_db($this->con, $this->dbname);
		mysqli_query($this->con, "SET NAMES 'utf8'");
	}

	function join_menu($table)
	{
		$qr = "SELECT $table.id,$table.name AS name_t,$table.meta_description,$table.image,$table.create_date,menu.name
		FROM $table
		INNER JOIN menu ON menu.id= $table.father_level";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}
	// function join_blog_menu($table)
	// {
	// 	$qr = "SELECT $table.id,$table.name AS name_t,$table.meta_description,$table.image,$table.create_date,menu.name
	// 	FROM $table
	// 	INNER JOIN menu ON menu.id= $table.father_level";
	// 	$rows = mysqli_query($this->con, $qr);
	// 	$mang = array();
	// 	while ($row = mysqli_fetch_array($rows)) {
	// 		$mang[] = $row;
	// 	}
	// 	return json_encode($mang);
	// }

	function join_svdt_sv_customer($id)
	{
		$qr = "SELECT service.id AS id_service, customer.id AS id_customer,service_detail.price AS price_s,service_detail.id AS id_svdt
		    FROM service
            INNER JOIN service_detail
			ON service.id=service_detail.service_id
            INNER JOIN customer
			ON customer.id=service.customer_id
			WHERE service_detail.id=$id;
            ";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function join_4_bang()
	{
		$qr = "SELECT
	sd.id AS svdt_id,
	sd.name AS svdt_name,
	sd.price AS svdt_price,
	sd.content AS svdt_content,
	sd.status AS svdt_status,
	sv.name AS sv_name,
	od.id AS oddt_id,
	od.price AS oddt_price,
	o.id AS order_id,
	o.status AS order_status,
	tenant.name AS cus_name,
	tenant.address AS cus_address,
	tenant.email AS cus_email,
	tenant.phone AS cus_phone
	FROM service_detail sd
	INNER JOIN order_detail od ON sd.id = od.service_detail_id
	INNER JOIN service sv ON sv.id = sd.service_id
	INNER JOIN orders o ON o.id = od.orders_id
	INNER JOIN customer tenant ON tenant.id = o.customer_tenant
	
	
	";

		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function join_4_bang2($email)
	{
		$qr = "SELECT
	sd.id AS svdt_id,
	sd.name AS svdt_name,
	sd.price AS svdt_price,
	sd.content AS svdt_content,
	sd.status AS svdt_status,
	sv.name AS sv_name,
	od.id AS oddt_id,
	od.price AS oddt_price,
	o.id AS order_id,
	o.status AS order_status,
	tenant.name AS cus_name,
	tenant.address AS cus_address,
	tenant.email AS cus_email,
	tenant.phone AS cus_phone
	FROM service_detail sd
	INNER JOIN order_detail od ON sd.id = od.service_detail_id
	INNER JOIN service sv ON sv.id = sd.service_id
	INNER JOIN orders o ON o.id = od.orders_id
	INNER JOIN customer tenant ON tenant.id = o.customer_tenant
	WHERE tenant.email='$email'
	
	";

		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}
	function join_kyc_user()
	{
		$qr = "SELECT 
   			 u.id AS user_id,
   			 u.name,
   			 u.email,
   			 u.address,
   			 u.role,
   			 u.create_date,
    		 u.kyc_status,
   			 k.id AS kyc_id,
             k.id_number,
             k.dob,
             k.front_image,
             k.back_image,
             k.status AS kyc_status_detail
         FROM users u
        JOIN kycs k ON u.id = k.users_id
            ";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}


	function join_wallet_transactions_user($id, $type)
	{
		$id = (int)$id; // ép kiểu an toàn
		$type = mysqli_real_escape_string($this->con, $type);

		$qr = "SELECT * 
           FROM transactions 
           INNER JOIN wallets ON wallets.id = transactions.wallet_id 
           INNER JOIN users ON users.id = wallets.users_id 
           WHERE users.id = $id AND transactions.type = '$type'";

		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function join_menu_v($table)
	{
		$qr = "SELECT $table.id,$table.name AS name_t,$table.meta_description,$table.image,$table.create_date,$table.video,menu.name
		FROM $table
		INNER JOIN menu ON menu.id= $table.father_level";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}
	function join_menu_limit($table, $start, $end)
	{
		$qr = "SELECT $table.id,$table.name AS name_t,$table.meta_description,$table.image,$table.create_date,menu.name
		FROM $table
		INNER JOIN menu ON menu.id= $table.father_level
		LIMIT $start,$end";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}
	function join_menu_limit_v($table, $start, $end)
	{
		$qr = "SELECT $table.id,$table.name AS name_t,$table.meta_description,$table.image,$table.create_date,$table.video,menu.name
		FROM $table
		INNER JOIN menu ON menu.id= $table.father_level
		LIMIT $start,$end";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// xóa record có điều kiện
	function delete($condition)
	{
		$qr = "DELETE FROM $this->tablename WHERE $condition";
		mysqli_query($this->con, $qr);
	}

	//lấy mảng record với hide=1 - hiện
	function select()
	{
		$qr = "SELECT * FROM $this->tablename WHERE status=1 ORDER BY id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	//lấy tất cả các record của mảng
	function selecta()
	{
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while (@$row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// lấy record có điều kiện tự do set up
	function selectque($question)
	{
		$qr = "SELECT * FROM $this->tablename $question";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function selectoa($column)
	{
		$qr = "SELECT * FROM $this->tablename WHERE status=1 ORDER BY $column ASC,id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function selectod($column)
	{
		$qr = "SELECT * FROM $this->tablename WHERE status=1 ORDER BY $column DESC,id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function limit($n)
	{
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC LIMIT 0,$n";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	//limit strat end
	function limitse($s, $e)
	{
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC LIMIT $s,$e";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	//lay record new
	function getend()
	{
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC LIMIT 0,1";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function limitw($n, $condition)
	{
		$qr = "SELECT * FROM $this->tablename WHERE $condition ORDER BY id DESC LIMIT 0,$n";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// lấy mảng record  có điều kiện sắp xếp
	function where($condition, $table = false)
	{
		if ($table) {
			$qr = "SELECT * FROM $table WHERE $condition ORDER BY id DESC";
		} else {
			$qr = "SELECT * FROM $this->tablename WHERE $condition ORDER BY id DESC";
		}
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	//lấy mảng record có điều kiện không sắp xếp
	function whereque($question, $table = false)
	{
		if ($table) {
			$qr = "SELECT * FROM $table WHERE $question";
		} else {
			$qr = "SELECT * FROM $this->tablename WHERE $question";
		}
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// đếm record
	function wherec($condition, $table = false)
	{
		if ($table) {
			$qr = "SELECT * FROM $table WHERE $condition";
		} else {
			$qr = "SELECT * FROM $this->tablename WHERE $condition";
		}
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode(count($mang));
	}

	function whereoa($condition, $column)
	{
		$qr = "SELECT * FROM $this->tablename WHERE $condition ORDER BY $column ASC,id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function whereod($condition, $column)
	{
		$qr = "SELECT * FROM $this->tablename WHERE $condition ORDER BY $column DESC,id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	//cập nhật record
	function update($value, $condition)
	{
		$qr = "UPDATE $this->tablename SET $value WHERE $condition";
		$kq = false;
		if (mysqli_query($this->con, $qr)) {
			$kq = true;
		}
		return json_encode($kq);
	}

	//thêm record
	function insert($column, $value)
	{
		$qr = "INSERT INTO $this->tablename ($column) VALUE($value)";
		$kq = 'false';
		if (mysqli_query($this->con, $qr)) {
			$kq = 'true';
		}
		return json_encode($kq);
	}

	function in($colunm, $value)
	{
		$qr = "SELECT * FROM $this->tablename WHERE $colunm IN ($value) ORDER BY id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// đếm số trang với a tập tin trên trang khi có hoặc không có điều kiện
	function getpage($a, $dk = false)
	{
		if (@$dk) {
			$qr = "SELECT * FROM $this->tablename WHERE $dk ORDER BY id DESC";
		} else {
			$qr = "SELECT * FROM $this->tablename ORDER BY id DESC";
		}
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		$sumpage = count($mang);
		return ceil($sumpage / $a);
	}

	function getpageall($a)
	{
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		$sumpage = count($mang);
		return ceil($sumpage / $a);
	}


	// phân trang cho một table
	function getpager($p, $n)
	{
		$from = ($p - 1) * $n;
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC LIMIT $from,$n";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// phân trang cho một table có điều kiện
	function getpagerod($p, $n)
	{
		$from = ($p - 1) * $n;
		$e = $from + $n;
		$qr = "SELECT * FROM $this->tablename WHERE hide=1 ORDER BY rank DESC, id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		$mang_xet = array();
		$mang_xuat = array();

		while ($row = mysqli_fetch_array($rows)) {
			if (!in_array($row['name'], $mang_xet)) {
				$mang_xet[] = $row['name'];
				$mang[] = $row;
			}
		}
		for ($i = $from; $i < $e; $i++) {
			if (@$mang[$i] != Null) {
				$mang_xuat[] = $mang[$i];
			}
		}
		return json_encode($mang_xuat);
	}

	function getpageraod($p, $n)
	{
		$from = ($p - 1) * $n;
		$qr = "SELECT * FROM $this->tablename ORDER BY id DESC LIMIT $from,$n";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function getpagerawod($p, $n, $dieukien)
	{
		$from = ($p - 1) * $n;
		$qr = "SELECT * FROM $this->tablename WHERE $dieukien ORDER BY id DESC LIMIT $from,$n";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	function getpagelist($n, $kd, $table)
	{
		$ob = json_decode($this->where("khongdau='$kd'", $table));
		$id = $ob[0]->id;
		$qr = "SELECT * FROM $this->tablename WHERE hide=1 ORDER BY rank DESC,id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		$mang_xet = array();
		while ($row = mysqli_fetch_array($rows)) {
			if (in_array($id, explode(',', $row['father_level'])) and !in_array($row['name'], $mang_xet)) {
				$mang_xet[] = $row['name'];
				$mang[] = $row;
			}
		}
		$sumpage = count($mang);
		return ceil($sumpage / $n);
	}

	function getpagerwod($p, $n, $kd, $table)
	{
		$ob = json_decode($this->where("khongdau='$kd'", $table));
		$id = $ob[0]->id;
		$from = ($p - 1) * $n;
		$qr = "SELECT * FROM $this->tablename WHERE hide=1 ORDER BY rank DESC,id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		$mang_xet = array();
		while ($row = mysqli_fetch_array($rows)) {
			if (in_array($id, explode(',', $row['father_level'])) and !in_array($row['name'], $mang_xet)) {
				$mang_xet[] = $row['name'];
				$mang[] = $row;
			}
		}
		$g = $from + $n;
		$mang_in = array();
		$so = count($mang);
		for ($i = $from; $i < $g; $i++) {
			if ($i == $so) {
				break;
			}
			$mang_in[] = $mang[$i];
		}
		return json_encode($mang_in);
	}


	function check($user, $password)
	{
		$qr = "SELECT * FROM $this->tablename WHERE user='$user' AND password='$password'";
		$rows = mysqli_query($this->con, $qr);
		$kq = false;
		if (mysqli_num_rows($rows) > 0) {
			$kq = true;
		}
		return $kq;
	}

	function checkemail($email, $password)
	{
		$qr = "SELECT * FROM $this->tablename WHERE email='$email' AND password='$password' AND hide=1";
		$rows = mysqli_query($this->con, $qr);
		$kq = false;
		if (mysqli_num_rows($rows) > 0) {
			$kq = true;
		}
		return $kq;
	}

	function checkemailkhoa($email)
	{
		$qr = "SELECT * FROM $this->tablename WHERE email='$email' AND hide=2";
		$rows = mysqli_query($this->con, $qr);
		$kq = false;
		if (mysqli_num_rows($rows) > 0) {
			$kq = true;
		}
		return $kq;
	}

	function recordtt($khongdau, $n, $dataname, $level)
	{
		$obsp = json_decode($this->where("khongdau='$khongdau'"));

		$this->tablename = 'menu';
		$obmenu2 = json_decode($this->where("level=$level"));
		$kd = '';
		foreach ($obmenu2 as $key => $value) {
			if (in_array($value->id, explode(',', $obsp[0]->father_level))) {
				$kd = $value->khongdau;
			}
		}

		$mang = array();
		$this->tablename = $dataname;
		$mangd = json_decode($this->getpagerwod(1, $n + 1, $kd, 'menu'));
		foreach ($mangd as $key => $value) {
			if ($khongdau == $value->khongdau) {
				continue;
			}
			$mang[] = $value;
		}
		return json_encode($mang);
	}

	function search($n)
	{
		$qr = "SELECT * FROM $this->tablename WHERE name LIKE '%$n%' OR khongdau LIKE '%$n%'  ORDER BY id DESC";
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// đếm số tin theo điều kiện-----------------------------------------------------------------
	function soluong($condition = false)
	{
		if ($condition) {
			$qr = "SELECT COUNT(*) AS ketqua FROM $this->tablename WHERE $condition";
		} else {
			$qr = "SELECT COUNT(*) AS ketqua FROM $this->tablename";
		}
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}

	// Tính tổng có điều kiện hoặc không
	function tong($column, $condition = false)
	{
		if ($condition) {
			$qr = "SELECT SUM($column) AS ketqua FROM $this->tablename WHERE $condition";
		} else {
			$qr = "SELECT SUM($column) AS ketqua FROM $this->tablename";
		}
		$rows = mysqli_query($this->con, $qr);
		$mang = array();
		while ($row = mysqli_fetch_array($rows)) {
			$mang[] = $row;
		}
		return json_encode($mang);
	}



	//lấy số trang của mảng ob---------------------------------------------------------------------
	function sotrangarray($sotaptin, $mang)
	{
		$sumpage = count($mang);
		return ceil($sumpage / $sotaptin);
	}


	// phân trang một mảng ob-------------------------------------------------------------------------
	function phantrangarray($trang, $sotaptin, $mang)
	{
		$from = ($trang - 1) * $sotaptin;
		$mangin = array();
		$tong = count($mang);
		if ($tong > 0) {
			$end = $from + $sotaptin;
			for ($i = $from; $i < $end; $i++) {
				if ($i == $tong) {
					break;
				}
				$mangin[] = $mang[$i];
			}
		}

		return json_encode($mangin);
	}

	// lọc mảng ob theo father_level------------------------------------------------------------------------
	function loc_father_level($id_loc, $mang)
	{
		$mangxuat = array();
		foreach ($mang as $key => $value) {
			if (in_array($id_loc, explode(',', $value->father_level))) {
				$mangxuat[] = $value;
			}
		}
		return json_encode($mangxuat);
	}


	// lọc mảng ob theo thuộc tính-------------------------------------------------------------------------------
	function loc_thuoctinh($id_loc, $mang)
	{
		$mangxuat = array();
		foreach ($mang as $key => $value) {
			if (in_array($id_loc, explode(',', $value->thuoctinh))) {
				$mangxuat[] = $value;
			}
		}
		return json_encode($mangxuat);
	}

	// lọc mảng ob theo thuộc tính và and
	function locand_thuoctinh($mang, $mang_id_loc)
	{
		$mangxuat = array();
		$mangtam = array();
		$mangxuat = $mang;
		foreach ($mang_id_loc as $key => $value) {
			if ($value != 0) {
				$mangtam = json_decode($this->loc_thuoctinh($value, $mangxuat));
				$mangxuat = $mangtam;
				$mangtam = array();
			}
		}
		return json_encode($mangxuat);
	}


	// function mẫu web tuyển dụng-----------------------------------------------------------------------------



}
