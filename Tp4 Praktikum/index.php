<?php

/******************************************
TP4 RPL
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas Karyawan
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Memanggil method getTask di kelas Karyawan
$otask->getKaryawan();

// Proses mengisi tabel dengan data
$otask->getKaryawan();
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $tname = $_POST['tname'];
    $tjeniskelamin = $_POST['tjeniskelamin'];
    $tperkerjaan = $_POST['tperkerjaan'];
    $tdeadline = $_POST['tdeadline'];
    $status = "Belum";

    $otask->add($id, $tname, $tjeniskelamin, $tdeadline, $tperkerjaan, $status);

    header("location:index.php");
}

if(isset($_GET['id_hapus'])){
	$id = $_GET['id_hapus'];

	$otask->delete($id);
	header("location:index.php");
}

if(isset($_GET['id_status'])){
	$id = $_GET['id_status'];
	/* echo($id); */

	$otask->setStatus($id);
	header("location:index.php");
}

$data = null;
$id = 1;
while (list($id, $tname, $tjeniskelamin, $tdeadline, $tperkerjaan, $tstatus) = $otask->getResult()) {
	// Tampilan jika status deadline nya sudah dikerjakan
	if($tstatus == "Sudah"){
		$data .= "<tr>
		<td>" . $id . "</td>
		<td>" . $tname . "</td>
		<td>" . $tjeniskelamin . "</td>
		<td>" . $tdeadline . "</td>
		<td>" . $tperkerjaan . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$id++;
	}

	// Tampilan jika status deadline nya belum dikerjakan
	else{
		$data .= "<tr>
		<td>" . $id . "</td>
		<td>" . $tname . "</td>
		<td>" . $tjeniskelamin . "</td>
		<td>" . $tdeadline . "</td>
		<td>" . $tperkerjaan . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$id++;
	}
}

/* if (isset($_GET['id_user'])) {
	# code...
} */

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();