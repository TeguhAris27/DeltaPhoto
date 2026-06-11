<?php
include 'template/header.php';



?>

<?php
//model booking jadwal

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "booking") {


        $id = $_GET["id"];

        $ambil = $koneksi->query("SELECT * FROM galery WHERE id='$id' ");
        $log = $ambil->fetch_assoc();

        $nama = $log['name'];
        $photo = $log['photo'];
        $photo1 = $log['photo1'];
        $photo2 = $log['photo2'];
        $harga = $log['harga'];
        $keterangan = $log['keterangan'];


        $Dp = 30 * 100;

?>



        <br><br><br>
        <section class="page-section booking" id="booking">
            <div class="container d-lg-flex">
                <div class="box-1 bg-light user">
                    <div class="box-inner-1 pb-3 mb-3 ">
                        <div class="d-flex justify-content-between mb-3 userdetails">
                            <p class="fw-bold"><?php echo $nama; ?></p>
                            <p class="fw-lighter">RP. </span><?php echo $harga; ?></p>
                        </div>
                        <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="admin/img/galery/<?php echo $photo; ?>" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin/img/galery/<?php echo $photo1; ?>" class="d-block w-100 h-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin/img/galery/<?php echo $photo2; ?>" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                                <div class="icon">
                                    <span class="fas fa-arrow-left"></span>
                                </div>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                                <div class="icon">
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="dis info my-3"><?php echo $keterangan; ?>
                        </p>
                        <form action="carijadwal.php" method="post">
                            <p class="dis fw-bold mb-3">Masukan tanggal hari dan Jam boking</p>

                            <input type="date" id="datepicker" class="form-control" name="tanggal">
                            <br>
                            <select class="form-select" aria-label="Default select example" name="jam">
                                <option selected hidden>Pilih Jam</option>
                                <option value="08:00">08.00</option>
                                <option value="15:00">15.00</option>
                            </select>
                            <input class="form-control" name="id" type="text" value="<?php echo $id; ?>" hidden>
                            <input class="form-control" name="nama" type="text" value="<?php echo $nama; ?>" hidden>
                            <br>

                            <button type="btn btn-primary" class="btn btn-success">Cari Jadwal</button>
                            <br>
                        </form>

                    </div>
                </div>
                <div class="box-2">
                    <div class="box-inner-2">
                        <div>
                            <p class="fw-bold">Payment Details</p>
                            <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                        </div>
                        <form method="POST" enctype="multipart/form-data" runat="server">
                            <div class="mb-3">
                                <p class="dis fw-bold mb-2">Nomor Whatsapp</p>
                                <input class="form-control" type="number" name="whatsapp" disabled>
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">masukan nama anda</p>
                                <input class="form-control" type="text" name="nama" disabled>
                            </div>
                            <div>
                                <p class="dis fw-bold mb-2">Card details</p>
                                <div class="d-flex align-items-center justify-content-between card-atm border rounded btn-light">
                                    <div class="fab fa-cc-visa ps-3"></div>
                                    <span type="text" class="form-control btn-light" style="font-size: small;">BRI</span>
                                    <div class="d-flex w-100">
                                        <span type="text" class="form-control px-0 btn-light" style="font-size: small;">31899341 8419149 9119</span>
                                    </div>
                                </div>

                                <div class="my-3 cardname">
                                    <p class="dis fw-bold mb-2">Upload bukti pembayaran</p>
                                    <input class="form-control" type="file" name="photo" id="photo" class="form-control" onchange="tampilkanPreview(this,'preview')" disabled>
                                    <br>
                                    <img src="" class="img-fluid" id="preview" alt="">
                                </div>

                                <div class="address">
                                    <div class="d-flex flex-column dis">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <p class="fw-bold">Total</p>
                                            <p class="fw-bold">RP. <?php echo $harga; ?></p>
                                        </div>

                                        <button type="btn btn-primary" class="btn btn-primary">Pay RP. <?php echo $harga; ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php
        //model jadwal tidak ada
    }
    if ($_GET['alert'] == "bookingjadwaltidakada") {

        $id = $_GET["id"];

        $ambil = $koneksi->query("SELECT * FROM galery WHERE id='$id' ");
        $log = $ambil->fetch_assoc();

        $nama = $log['name'];
        $photo = $log['photo'];
        $photo1 = $log['photo1'];
        $photo2 = $log['photo2'];
        $harga = $log['harga'];
        $keterangan = $log['keterangan'];
    ?>


        <br><br><br>
        <section class="page-section booking" id="booking">
            <div class="container d-lg-flex">
                <div class="box-1 bg-light user">

                    <div class="box-inner-1 pb-3 mb-3 ">
                        <div class="d-flex justify-content-between mb-3 userdetails">
                            <p class="fw-bold"><?php echo $nama; ?></p>
                            <p class="fw-lighter">RP. </span><?php echo $harga; ?></p>
                        </div>
                        <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="admin/img/galery/<?php echo $photo; ?>" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin/img/galery/<?php echo $photo1; ?>" class="d-block w-100 h-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin/img/galery/<?php echo $photo2; ?>" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                                <div class="icon">
                                    <span class="fas fa-arrow-left"></span>
                                </div>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                                <div class="icon">
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="dis info my-3"><?php echo $keterangan; ?>
                        </p>

                        <form action="carijadwal.php" method="post">
                            <p class="dis fw-bold mb-3">Masukan tanggal hari dan Jam boking</p>
                            <input type="date" class="form-control" name="tanggal">
                            <br>
                            <select class="form-select" aria-label="Default select example" name="jam">
                                <option selected hidden>Pilih Jam</option>
                                <option value="08:00">08.00</option>
                                <option value="15:00">15.00</option>
                            </select>
                            <input class="form-control" name="id" type="text" value="<?php echo $id; ?>" hidden>
                            <input class="form-control" name="nama" type="text" value="<?php echo $nama; ?>" hidden>
                            <br>
                            <button type="btn btn-primary" class="btn btn-success">Cari Jadwal</button>
                            <br>
                            <label for="">Jadwal Sudah di pesan silahkan ganti tanggal dan waktu</label>
                        </form>
                    </div>
                </div>
                <div class="box-2">
                    <div class="box-inner-2">
                        <div>
                            <p class="fw-bold">Payment Details</p>
                            <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                        </div>
                        <form method="POST" enctype="multipart/form-data" runat="server">
                            <div class="mb-3">
                                <p class="dis fw-bold mb-2">Nomor Whatsapp</p>
                                <input class="form-control" type="number" name="whatsapp" disabled>
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">masukan nama anda</p>
                                <input class="form-control" type="text" name="nama" disabled>
                            </div>
                            <div>
                                <p class="dis fw-bold mb-2">Card details</p>
                                <div class="d-flex align-items-center justify-content-between card-atm border rounded btn-light">
                                    <div class="fab fa-cc-visa ps-3"></div>
                                    <span type="text" class="form-control btn-light" style="font-size: small;">BRI</span>
                                    <div class="d-flex w-100">
                                        <span type="text" class="form-control px-0 btn-light" style="font-size: small;">31899341 8419149 9119</span>
                                    </div>
                                </div>

                                <div class="my-3 cardname">
                                    <p class="dis fw-bold mb-2">Upload bukti pembayaran</p>
                                    <input class="form-control" type="file" name="photo" id="photo" class="form-control" onchange="tampilkanPreview(this,'preview')" disabled>
                                    <br>
                                    <img src="" class="img-fluid" id="preview" alt="">
                                </div>

                                <div class="address">
                                    <div class="d-flex flex-column dis">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <p class="fw-bold">Total</p>
                                            <p class="fw-bold">RP. <?php echo $harga; ?></p>
                                        </div>

                                        <button type="btn btn-primary" class="btn btn-primary">Pay RP. <?php echo $harga; ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php
        //model jadwal ada
    }
    if ($_GET['alert'] == "bookingjadwalada") {

        $id = $_GET["id"];

        $ambil = $koneksi->query("SELECT * FROM galery WHERE id='$id' ");
        $log = $ambil->fetch_assoc();

        $nama = $log['name'];
        $photo = $log['photo'];
        $photo1 = $log['photo1'];
        $photo2 = $log['photo2'];
        $harga = $log['harga'];
        $keterangan = $log['keterangan'];



        $hari = $_SESSION["tanggal"];
        $jam = $_SESSION["jam"];
    ?>


        <br><br><br>
        <section class="page-section booking" id="booking">
            <div class="container d-lg-flex">
                <div class="box-1 bg-light user">

                    <div class="box-inner-1 pb-3 mb-3 ">
                        <div class="d-flex justify-content-between mb-3 userdetails">
                            <p class="fw-bold"><?php echo $nama; ?></p>
                            <p class="fw-lighter">RP. </span><?php echo $harga; ?></p>
                        </div>
                        <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="admin/img/galery/<?php echo $photo; ?>" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin/img/galery/<?php echo $photo1; ?>" class="d-block w-100 h-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="admin/img/galery/<?php echo $photo2; ?>" class="d-block w-100">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                                <div class="icon">
                                    <span class="fas fa-arrow-left"></span>
                                </div>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                                <div class="icon">
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="dis info my-3"><?php echo $keterangan; ?>
                        </p>

                        <form action="carijadwal.php" method="post">
                            <p class="dis fw-bold mb-3">Masukan tanggal hari dan Jam boking</p>
                            <input type="date" class="form-control" name="tanggal" value="<?php echo $hari; ?>">
                            <br>

                            <select class="form-select" aria-label="Default select example" name="jam">
                                <option selected hidden><?php echo $jam; ?></option>
                                <option value="08:00">08.00</option>
                                <option value="15:00">15.00</option>
                            </select>
                            <input class="form-control" name="id" type="text" value="<?php echo $id; ?>" hidden>
                            <input class="form-control" name="nama" type="text" value="<?php echo $nama; ?>" hidden>
                            <br>
                            <button type="btn btn-primary" class="btn btn-success">Cari Jadwal</button>
                            <br>
                            <label for="">Jadwal Kosong Silahkan Pesan</label>
                        </form>
                    </div>
                </div>
                <div class="box-2">
                    <div class="box-inner-2">
                        <div>
                            <p class="fw-bold">Payment Details</p>
                            <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                        </div>
                        <form method="POST" enctype="multipart/form-data" runat="server">
                            <div class="mb-3">
                                <p class="dis fw-bold mb-2">Nomor Whatsapp</p>
                                <input class="form-control" type="number" name="whatsapp">
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">masukan nama anda</p>
                                <input class="form-control" type="text" name="nama">
                            </div>
                            <div>
                                <p class="dis fw-bold mb-2">Card details</p>
                                <div class="d-flex align-items-center justify-content-between card-atm border rounded btn-light">
                                    <div class="fab fa-cc-visa ps-3"></div>
                                    <span type="text" class="form-control btn-light" style="font-size: small;">BRI</span>
                                    <div class="d-flex w-100">
                                        <span type="text" class="form-control px-0 btn-light" style="font-size: small;">31899341 8419149 9119</span>
                                    </div>
                                </div>


                                <input type="radio" class="btn-check" name="bayar" value="Bayar Lunas Rp.<?php echo $harga; ?>" id="success-outlined" autocomplete="off">
                                <label class="btn btn-outline-success" for="success-outlined">Bayar penuh RP. <?php echo $harga; ?></label>
                                <br>
                                <input type="radio" class="btn-check" name="bayar" value="Bayar Dp 30% Rp.<?php echo 30 / 100 * $harga; ?>.000" id="danger-outlined" autocomplete="off">
                                <label class="btn btn-outline-danger" for="danger-outlined">Bayar Dp 30% Rp.<?php echo 30 / 100 * $harga; ?>.000</label>


                                <div class="my-3 cardname">

                                    <p class="dis fw-bold mb-2">Upload bukti pembayaran</p>
                                    <input class="form-control" type="file" name="photo" id="photo" class="form-control" onchange="tampilkanPreview(this,'preview')" required>
                                    <br>
                                    <img src="" class="img-fluid" id="preview" alt="">
                                </div>

                                <div class="address">
                                    <div class="d-flex flex-column dis">

                                        <br>

                                        <button type="btn btn-primary" name="simpan" class="btn btn-primary">Bayar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php

                        if (isset($_POST['simpan'])) {

                            $namapelanggan = $_POST['nama'];
                            $whatsapp = $_POST['whatsapp'];
                            $bayar = $_POST['bayar'];


                            $kt = "Bayar Dp 30% Rp.";
                            $hr = 30 / 100 * $harga . ".000";
                            $kh = $kt . $hr;

                            if ($bayar == $kh) {
                                $kurang = "Bayar Lunas RP. $harga";
                            } else {
                                $kurang = "";
                            }


                            $namaphoto = $_FILES['photo']['name'];
                            $lokasiphoto = $_FILES['photo']['tmp_name'];

                            //jika photo dirubah  
                            if (!empty($lokasiphoto)) {
                                move_uploaded_file($lokasiphoto, "admin/img/bukti-pembayaran/$namaphoto");

                                $koneksi->query("INSERT into boking_jadwal SET jenis='$nama', hari='$hari', jam='$jam', nama='$namapelanggan', whatsapp='$whatsapp', bayar='$bayar', kurang='$kurang', bukti='$namaphoto' ");
                            } else {
                                $koneksi->query("INSERT into boking_jadwal SET jenis='$nama', hari='$hari', jam='$jam', nama='$namapelanggan', whatsapp='$whatsapp', bayar='$bayar', kurang='$kurang', bukti='$namaphoto' ");
                            }

                            //api Whatsaap dari fonte.com Kirim Pesan Booking
                            $token = "qo10j+dp8J!jiPV702_I";
                            $target = "085712094087";
                            $curl = curl_init();

                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://api.fonnte.com/send',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'POST',
                                CURLOPT_POSTFIELDS => array(
                                    'target' => $target,
                                    'message' => "ada booking jadwal foto atas nama : $namapelanggan dengan nomor Whatsapp $whatsapp pada tanggal : $hari silahkan cek https://websayacoba.000webhostapp.com/admin",
                                ),
                                CURLOPT_HTTPHEADER => array(
                                    "Authorization: $token"
                                ),
                            ));

                            $response = curl_exec($curl);

                            curl_close($curl);
                            echo $response;

                            //-- kirim ke pemboking
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://api.fonnte.com/send',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'POST',
                                CURLOPT_POSTFIELDS => array(
                                    'target' => $whatsapp,
                                    'message' => "Pesanan anda akan segera di konfirmasi oleh admin kami",
                                ),
                                CURLOPT_HTTPHEADER => array(
                                    "Authorization: $token"
                                ),
                            ));

                            $response = curl_exec($curl);

                            curl_close($curl);
                            echo $response;
                            //-------

                            echo "<script>
                            location = 'index.php';
                        </script>";
                        }

                        ?>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <?php
    }
    ?>
<?php
} else {
?>

    <!-- Masthead-->
    <style>
        .masthead {
            background-image: url(admin/images/bg1.jpg);
            width: 100%;
            background-size: cover;
            position: relative;
        }

        .peta {

            width: cover;
            position: relative;
        }
    </style>

    <section class="page-section text-white mb-0" id="home">
        <header class="masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: msFilter;">
                    <path d="M12 9c-1.626 0-3 1.374-3 3s1.374 3 3 3 3-1.374 3-3-1.374-3-3-3z"></path>
                    <path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-8 12c-2.71 0-5-2.29-5-5s2.29-5 5-5 5 2.29 5 5-2.29 5-5 5z"></path>
                </svg>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Delta Photo</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Photograph - Illustrator</p>
            </div>
        </header>
    </section>
<?php
}

?>


<?php
include 'portfolio.php';
?>


<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Kami</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Fotografer adalah seseorang yang merekam peristiwa dalam bentuk gambar untuk berbagai objek seperti orang, tempat dan peristiwa menggunakan kamera. Ada yang menawarkan jasa foto komersial secara langsung, yakni fotografer memotret lalu dibayar.
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">Misalnya memotret perorangan, keluarga, acara pernikahan, ataupun produk.
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <i class="btn btn-xl btn-outline-light">
                Delta Photo
            </i>
        </div>
    </div>
</section>

<section>
    <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214.00525486539337!2d110.89565910090178!3d-6.829552196118146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c50a89928725%3A0xb88cd62f2636bd6c!2sFars%20Aksesoris!5e1!3m2!1sid!2sid!4v1694538868496!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" frameborder=" 0" allowfullscreen></iframe>
    </div>
</section>

<?php
include 'template/footer.php'

?>