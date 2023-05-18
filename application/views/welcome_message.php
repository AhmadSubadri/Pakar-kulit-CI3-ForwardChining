<div class="hero_area">
	<div class="bg-box">
		<img src="<?= base_url(); ?>assets/images/background.jpg" alt="">
	</div>
	<!-- header section strats -->
	<header class="header_section">
		<div class="container">
			<nav class="navbar navbar-expand-lg custom_nav-container ">
				<a class="navbar-brand" href="<?= site_url(''); ?>">
					<span>
						Expert System
					</span>
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
								<a class="nav-link" href="<?= site_url(''); ?>">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<section class="slider_section ">
		<div id="customCarousel1" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container ">
						<div class="row">
							<div class="col-md-8 col-lg-8">
								<div class="detail-box">
									<h1>
										Selamat Datang di Website
									</h1>
									<h5>
										Sistem Pakar Diagnosa Penyakit Kulit Akibat Infeksi Jamur Pada Manusia<br>
										Dengan Metode Forward Chaining
									</h5>
									<div class="btn-box">
										<a href="" class="btn1">
											Start Now
											<i class="fa fa-arrow-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-4 ">
								<div class="detail-box">
									<img src="<?= base_url(); ?>assets/images/image_home.png" alt="" height="100%" width="100%">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<ol class="carousel-indicators justify-content-center text-white text-center">
					<p>copyright &copy; <span id="displayYear"></span> Program Studi Sistem Informasi<br>Universitas Mercu Buana Yogyakarta</p>
				</ol>
			</div>
		</div>
	</section>
</div>