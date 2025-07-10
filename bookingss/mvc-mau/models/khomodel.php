<?php
class khomodel extends Controller{
	public $tablename='kho';

	function add(){

		// khach hang
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$name=$this->thuvienchuoi->lockytu($name);
		
		$so_dien_thoai=$_POST['so_dien_thoai'];
		$dia_chi=$_POST['dia_chi'];
		$phan_loai=$_POST['phan_loai'];
		$email=$_POST['email'];
		$obkh=json_decode($this->model('khachhangmodel')->where("so_dien_thoai=$so_dien_thoai"));
		$id_khachhang=1;
		if(count($obkh)>0){
			$id_khachhang=$obkh[0]->id;
		}else{
			$colkh='
			name,
			so_dien_thoai,
			dia_chi,
			phan_loai,
			email'   
			;
			$vakh=
			"
			'$name',
			'$so_dien_thoai',
			'$dia_chi',
			'$phan_loai',
			'$email'
			"
			;
			$this->model('khachhangmodel')->insert($colkh,$vakh);
			$obkhm=json_decode($this->model('khachhangmodel')->limit(1));
			$id_khachhang=$obkhm[0]->id;
		}

		//hoa don
		$dien_giai=$this->thuvienchuoi->lockytu($_POST['dien_giai']);
		$status=$_POST['phan_loai'];
		
		$colhd='
		id_khachhang,
		status,
		dien_giai'
		;
		$vahd="
		'$id_khachhang',
		'$status',
		'$dien_giai'"
		;
		$this->model('hoadonmodel')->insert($colhd,$vahd);
		$obhd=json_decode($this->model('hoadonmodel')->limit(1));
		$idhd=$obhd[0]->id;

		// kho
		
		$obsanpham=json_decode($this->model('sanphammodel')->selecta());
		foreach ($obsanpham as $key => $value) {
			if($_POST['m_soluong'][$value->id]>0){
				$gia_ban=$_POST['m_giaban'][$value->id];
				$price_sale=$_POST['m_giasale'][$value->id];
				$gia_nhap=$_POST['m_gianhap'][$value->id];
				$status=$_POST['phan_loai'];
				$id_sanpham=$_POST['id'][$value->id];
				$so_luong_ton=$_POST['m_soluong'][$value->id];
				$column='
				gia_ban,
				id_hoadon,
				price_sale,
				gia_nhap,
				status,
				id_sanpham,
				so_luong_ton'       
				;
				$va=
				"
				'$gia_ban',
				'$idhd',
				'$price_sale',
				'$gia_nhap',
				'$status',
				'$id_sanpham',
				'$so_luong_ton'
				"
				;
				$this->insert($column,$va);

				//san pham
				$soluong=0;
				if($status==1){
					$soluong=$value->soluong+$so_luong_ton;
					
				}else{
					$soluong=$value->soluong-$so_luong_ton;
				}
				$vasp="
				soluong='$soluong'
				";
				$this->model('sanphammodel')->update($vasp,"id=$id_sanpham");
			}
		}

		



	}

	function capnhat(){
		$id=$_POST['id'];
		$gia_ban=$_POST['gia_ban'];
		$price_sale=$_POST['price_sale'];
		$gia_nhap=$_POST['gia_nhap'];
		$id_sanpham=$_POST['id_sanpham'];
		$ghi_chu=$_POST['ghi_chu'];
		$don_vi_tinh=$_POST['don_vi_tinh'];
		$ma_san_pham=$_POST['ma_san_pham'];
		$so_luong_ton=$_POST['so_luong_ton'];
		$va="
		gia_ban='$gia_ban',
		price_sale='$price_sale',
		gia_nhap='$gia_nhap',
		id_sanpham='$id_sanpham',
		ghi_chu='$ghi_chu',
		don_vi_tinh='$don_vi_tinh',
		ma_san_pham='$ma_san_pham',
		so_luong_ton='$so_luong_ton'
		";
		return $this->update($va,"id=$id");

	}

	function xoa($id){
		$row=json_decode($this->where("id=$id"));
		$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);


		$this->delete("id=$id");
	}

}
?>