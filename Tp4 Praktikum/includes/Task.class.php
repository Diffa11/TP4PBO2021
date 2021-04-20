<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getKaryawan(){
		// Query mysql select data ke tb_karyawan
		$query = "SELECT * FROM tb_karyawan";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	//add data
	function add($id, $tname, $tjeniskelamin, $tdeadline, $tperkerjaan, $status = "Belum"){
        $query = "INSERT INTO tb_karyawan VALUES".
            "('$id','$tname','$tjeniskelamin','$tdeadline','$tperkerjaan','$status')";
			echo $query;
        return $this->execute($query);
    }

	function delete($id){
		$query = "DELETE FROM tb_karyawan WHERE id = '$id'";

		return $this->execute($query);
	}

	function setStatus($id){
		$query = "UPDATE tb_karyawan SET status = 'Sudah' WHERE id = '$id'";

		return $this->execute($query);
	}
}
?>