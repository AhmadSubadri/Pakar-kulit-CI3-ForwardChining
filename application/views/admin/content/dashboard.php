<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-3">
        <div class="card overflow-hidden" style="background-color: #F10A21;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h3><?= count($penyakit->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center">Data Penyakit</h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card overflow-hidden" style="background-color: #C3F10A;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h3><?= count($gejala->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center">Data Gejala</h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card overflow-hidden" style="background-color: #04A31A;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h3><?= count($riwayat->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center">Data Riwayat</h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card overflow-hidden" style="background-color: #0A31F1;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h3><?= count($pasien->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center">Data Pasisen</h5>
        </div>
    </div>
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100" style="background-color: #26C8E7; font-weight: bold;">
            <div class="card-body text-center">
                <h2>SISTEM PAKAR DIAGNOSA PENYAKIT KULIT<br>PADA MANUSIA AKIBAT INFEKSI JAMUR<br>METODE FORWARD CHINING</h2>
            </div>
        </div>
    </div>
</div>