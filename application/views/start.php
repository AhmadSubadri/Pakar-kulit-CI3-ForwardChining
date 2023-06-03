<div class="hero_area" style="background-color: #26C8E7;">
    <!-- header section strats -->
    <div style="background-color: #CFF1F7;">
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
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
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12 form-step" data-step="1">
                                    <div class="appointment-form step-content" id="step1">
                                        <div class="heading_container heading_center" style="background-color: #FFBE33; box-shadow: 2px 2px 2px 2px #CFF1F7;">
                                            <h2>Biodata User</h2>
                                        </div><br>
                                        <div class="form" style="box-shadow: 1px 1px 3px 3px #CFF1F7; padding: 20px;">
                                            <form id="stepForm1" method="post">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="nama" placeholder="Your Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Umur anda" name="umur" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="nice-select wide" name="jenis_kelamin">
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Nomor Kartu Keluarga" name="no_kk" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Nomor Telephon" name="telp" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <textarea rows="4" name="alamat" class="form-control" placeholder="Alamat anda..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="btn_box text-center col-md-12">
                                                                    <button type="submit" class="next-button btn-sm btn-primary">Next Step</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="appointment-form step-content" id="step2" style="display: none;">
                                        <div class="heading_container heading_center" style="background-color: #FFBE33; box-shadow: 2px 2px 2px 2px #CFF1F7;">
                                            <h2>Pilih Gejala Yang Anda Alami</h2>
                                        </div><br>
                                        <div class="form" style="box-shadow: 1px 1px 3px 3px #CFF1F7; padding: 20px;">
                                            <form id="stepForm2" method="post">
                                                <fieldset>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <?php foreach ($gejala as $gjl) : ?>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" name="gejala[]" type="checkbox" value="<?= $gjl->kode_gejala; ?>" id="flexCheckDefault<?= $gjl->kode_gejala; ?>">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            <?= $gjl->gejala; ?>
                                                                        </label>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="center">
                                                                        <button class="back-button btn-sm btn-warning">Kembali</button>
                                                                        <button type="submit" class="next-button btn-sm btn-primary">Next Step</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="appointment-form step-content" id="step3" style="display: none;">

                                    </div>
                                </div>
                            </div><br>
                            <ol class="carousel-indicators justify-content-center text-white text-center">
                                <p style="color: black;">copyright &copy; <span id="displayYear"></span> Program Studi Sistem Informasi<br>Universitas Mercu Buana Yogyakarta</p>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var currentStep = 1;
        var currentDataId; // Menyimpan ID data saat ini

        function showStep(step) {
            $('.step-content').hide();
            $('#step' + step).show();
        }

        function clearData(step) {
            if (step === 2 && currentDataId) {
                deleteData(currentDataId); // Hapus data saat langkah kedua
            }
        }

        function goBack() {
            if (currentStep > 1) {
                clearData(currentStep);
                currentStep--;
                showStep(currentStep);
            }
        }

        function showNextStep() {
            currentStep++;
            showStep(currentStep);
        }

        function deleteData(dataId) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url('start/delete'); ?>',
                data: {
                    dataId: dataId
                },
                success: function(response) {
                    console.log('Data berhasil dihapus');
                },
                error: function(xhr, status, error) {
                    console.log('Gagal menghapus data: ' + error);
                }
            });
        }

        $('.previous-button').click(function() {
            goBack();
        });

        $('.next-button').click(function(e) {
            e.preventDefault();

            var formData = $('#stepForm' + currentStep).serialize();

            $.ajax({
                type: 'POST',
                url: '<?= base_url('start/step'); ?>' + currentStep,
                data: formData,
                success: function(response) {
                    if (currentStep === 1) {
                        currentDataId = response.dataId; // Simpan ID data yang dikembalikan saat langkah pertama
                    }
                    if (currentStep === 2) {
                        showNextStep();
                        $.ajax({
                            type: 'POST',
                            url: '<?= base_url('start/step2'); ?>',
                            data: formData,
                            success: function(response) {
                                $('#step3').html(response); // Memperbarui konten pada step 3 dengan hasil inferensi yang dikembalikan
                            }
                        });
                    } else {
                        showNextStep();
                    }
                }
            });
        });

        $('.back-button').click(function(e) {
            e.preventDefault();
            goBack();
        });
    });
</script>