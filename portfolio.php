<!-- Portfolio Section-->

<?php
include 'template/modal.php'

?>
<style type="text/css">
    .img-fluid.d {
        object-fit: cover;
        border: 1px solid #fff;
        width: 500px;
        height: 300px;
        overflow: hidden;
    }
</style>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">pilih model foto</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <?php $no = 0;
            $ambil = $koneksi->query("SELECT * FROM galery ORDER BY id desc");
            while ($log = $ambil->fetch_assoc()) {
                $no++;
                $nama = $log['name'];
                $photo = $log['photo'];
                $harga = $log['harga'];
                $keterangan = $log['keterangan'];

            ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal<?php echo $no; ?>">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">Boking Jadwal</div>
                        </div>
                        <img class="img-fluid d" src="admin/img/galery/<?php echo $photo; ?>">
                        <h5><?php echo $nama; ?></h5>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
    </div>
</section>