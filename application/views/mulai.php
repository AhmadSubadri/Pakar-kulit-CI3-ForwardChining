<div class="hero_area" style="background-color: #26C8E7;">
    <!-- header section strats -->
    <div style="background-color: #CFF1F7;">
        <header class="header_section">
            <div class="container" style="background-color: #CFF1F7;">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="<?= site_url(''); ?>">
                        <img src="<?= base_url(); ?>assets/images/favicon.png"" alt="" height=" 100%" width="20%">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                        </ul>
                        <div class="user_option">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item <?php if ($this->uri->uri_string() == "") {
                                                        echo "active";
                                                    } ?>">
                                    <a class="nav-link" href="<?= site_url(''); ?>" style="color: black;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= site_url('administrator/login'); ?>" style="color: black;">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="text-center">
                            <img src="<?= base_url(); ?>assets/images/kulit.png" alt="" height="100%" width="30%">
                        </div><br>
                        <div class="row text-center">
                            <div class="col-md-12 col-lg-12">
                                <div class="detail-box">
                                    <h5 style="background-color: #59FBFF; box-shadow: 2px 2px 5px 5px; color:black;border-radius: 25px; padding: 8px;">
                                        Penyakit kulit yang disebabkan oleh infeksi jamur dapat ditemukan pada siapa saja,<br>
                                        baik pria maupun wanita, dan dapat menyerang segala usia, dari bayi hingga dewasa.<br>
                                        dapat menimpulkan gejala yang tidak nyaman, seperti gatal,<br>
                                        ruam kulit, serta perubahan tekstur dan warna kulit.
                                    </h5>
                                    <div class="btn-box">
                                        <a href="<?= site_url('start'); ?>" class="btn1" style="color: black;">
                                            Mulai Konsultasi
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators justify-content-center text-white text-center">
                            <p style="color: black;">copyright &copy; <span id="displayYear"></span> Program Studi Sistem Informasi<br>Universitas Mercu Buana Yogyakarta</p>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>