<?php

session_start();

// menghubungkan dengan koneksi
include 'template/koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$whatsapp = $_POST['whatsapp'];
$photo = $_POST['photo'];
$hari = $_SESSION["tanggal"];
$jam = $_SESSION["jam"];


$namaphoto = $_FILES[$photo]['name'];
$lokasiphoto = $_FILES[$photo]['tmp_name'];

//jika photo dirubah  
if (!empty($lokasiphoto)) {
    move_uploaded_file($lokasiphoto, "date/$namaphoto");

    $koneksi->query("INSERT into booking_jadwal SET hari=$hari, jam=$jam, nama=$nama, whatsapp=$whatsapp, bukti=$namaphoto' ");

} else {
    $koneksi->query("INSERT into booking_jadwal SET hari=$hari, jam=$jam, nama=$nama, whatsapp=$whatsapp, bukti=$namaphoto ' ");
}

echo "<script>location='api-wa.php';</script>";


?>
</div>