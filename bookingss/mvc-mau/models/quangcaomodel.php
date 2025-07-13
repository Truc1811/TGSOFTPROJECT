<?php
class quangcaomodel extends Controller{
	public $tablename='quangcao';
	public $thuvienchuoi;

	public function add(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$link=$_POST['link'];
		$rank=$_POST['rank'];
		$father_level=implode(',',$_POST['father_level']);
		$hide=$_POST['hide'];
		$link_ytb=$_POST['link_ytb'];
		$timestamp=time();
		$image=$this->thuvien('thuvienfile')->image('image');
		$column='name,link,rank,father_level,hide,timestamp,image,link_ytb';
		$va="'$name','$link','$rank','$father_level','$hide','$timestamp','$image','$link_ytb'";
		return $this->insert($column,$va);
	}

	public function capnhat(){
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$name=addslashes($_POST['name']);
		$link=$_POST['link'];
		$rank=$_POST['rank'];
		$father_level=implode(',',$_POST['father_level']);
		$hide=$_POST['hide'];
		$link_ytb=$_POST['link_ytb'];
		$id=$_POST['id'];
		$image=$this->thuvien('thuvienfile')->imageupdate('image','image1');
		$va="name='$name',link='$link',rank='$rank',father_level='$father_level',hide='$hide',image='$image',link_ytb='$link_ytb'";
		return $this->update($va,"id=$id");

	}


	public function xoa($id){
			$row=json_decode($this->where("id=$id"));
			$this->thuvien('thuvienfile')->xoafile("public/upload/".$row[0]->image);

			// $nhieuhinh=explode(',', $row[0]->image_m);
			// foreach ($nhieuhinh as $key => $value) {
			// 	// code...
			// 	$this->thuvien('thuvienfile')->xoafile("public/upload/".$value);
			// }

			$this->delete("id=$id");
	}

	public function quangcaonhom($idnhom){
		$namearray=array();
		$qc=json_decode($this->select());
		foreach($qc as $va){
			if(in_array($idnhom,explode(',',$va->father_level))){
				$namearray[]=$va;
			} 
		}
		return json_encode($namearray);
	}

	public function quangcaot(){
		return $this->quangcaonhom(999999999);
	}

	public function quangcaor(){
		return $this->quangcaonhom(999999998);
	}

	public function quangcaob(){
		return $this->quangcaonhom(999999997);
	}

	public function quangcaol(){
		return $this->quangcaonhom(999999996);
	}

	public function quangcaotc(){
		return $this->quangcaonhom(999999995);
	}

	public function slider(){
		return $this->quangcaonhom(999999994);
	}

}
?>