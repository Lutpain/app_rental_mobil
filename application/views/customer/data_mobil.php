    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Silahkan pilih mobil yang akan disewa</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            <?php foreach ($mobil as $mb) : ?>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-car-wrap">
                                        <img src="<?= base_url('assets/upload/' . $mb->gambar); ?>" style="width:400px; height:250px" alt="">
                                        <div class="car-list-info without-bar">
                                            <h2><a href="#"><?= $mb->merk; ?></a></h2>
                                            <h5>Rp. <?= number_format($mb->harga, 0, ',', '.') ?> / Hari</h5>
                                            <ul class="car-info-list">
                                                <li>
                                                    <?php if ($mb->ac == "1") {
                                                        echo "<i class='fa fa-check-square text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> AC
                                                </li>
                                                <li>
                                                    <?php if ($mb->supir == "1") {
                                                        echo "<i class='fa fa-check-square text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Supir
                                                </li>
                                                <li>
                                                    <?php if ($mb->mp3_player == "1") {
                                                        echo "<i class='fa fa-check-square text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> MP3 Player
                                                </li>
                                                <li>
                                                    <?php if ($mb->central_lock == "1") {
                                                        echo "<i class='fa fa-check-square text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Central Lock
                                                </li>

                                            </ul>
                                            <p class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star unmark"></i>
                                            </p>
                                            <?php if ($mb->status == "1") {
                                                echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<span class="rent-btn">Rental</span>');
                                            } else {
                                                echo "<span class='rent-btn'>Tidak Tersedia</span>";
                                            }

                                            ?>
                                            <a href="<?= base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>" class="rent-btn">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Car End -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <p>Webiste ini dibuat oleh Pain D. Jaeger untuk mempermudah proses pemesanan mobil di Pacitan pada masa yang akan datang.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recent Posts</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                            Hello Pacitan!
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Pain D. Jaeger
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Tamashi no irowa?
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Road from Pro Gramer to Programmer
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>Kunjungi saya di....</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Tegalombo, Pacitan</li>
                                    <li><i class="fa fa-mobile"></i> 083830785704</li>
                                    <li><i class="fa fa-envelope"></i> lutfihidayanto10@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->