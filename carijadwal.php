<?php

// menghubungkan dengan koneksi
include 'admin/template/koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$hari = $_POST['tanggal'];
$jam = $_POST['jam'];

session_start();
$_SESSION["tanggal"] = $hari;
$_SESSION["jam"] = $jam;


// menyeleksi data admin dengan username dan password yang sesuai
$cari = mysqli_query($koneksi, "SELECT * FROM boking_jadwal WHERE hari='$hari' AND jam='$jam' ");

$cek = mysqli_num_rows($cari);

if ($cek > 0) {

    header("location:index.php?alert=bookingjadwaltidakada&&id=$id");
} else {

    header("location:index.php?alert=bookingjadwalada&&id=$id");
}
