<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100" style="background-color: #26C8E7; box-shadow: 2px 2px 5px 5px #CFF1F7; color:black;">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert" style="background-color: #D0F8F1; box-shadow: 2px 2px 5px 5px;">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Rule Edit</h5>
                    </div>
                </div>
                <form action="<?= site_url('data-rule/edit/' . $data->id_rule); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Rule</label>
                                <input type="text" class="form-control" name="kode_rule" value="<?= $data->username ?>" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_rule') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Penyakit</label>
                                <select id="disabledSelect" name="kode_penyakit" class="form-select">
                                    <option class="disabled">-- elect penyakit --</option>
                                    <?php foreach ($penyakit->result() as $sakit) : ?>
                                        <option value="<?= $sakit->kode_penyakit; ?>" <?= ($data->kode_penyakit == $sakit->kode_penyakit) ? 'selected' : ''; ?>><?= $sakit->nama_penyakit; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_penyakit') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Gejala</label>
                                <input type="text" class="form-control" name="kode_gejala" value="<?= $data->kode_gejala ?>" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_gejala') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                update
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('data-rule') ?>" class="btn btn-sm btn-danger m-1">Cancle</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>