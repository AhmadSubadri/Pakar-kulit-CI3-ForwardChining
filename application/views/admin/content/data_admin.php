<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100" style="background-color: #26C8E7; box-shadow: 2px 2px 5px 5px #CFF1F7;">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert" style="background-color: #D0F8F1; box-shadow: 2px 2px 5px 5px;">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Admin</h5>
                    </div>
                    <div>
                        <a href="<?= site_url('data-admin/insert') ?>" class="btn btn-sm btn-primary m-1"><i class="ti ti-circle-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped" style="color:black;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($data)) : ?>
                            <?php else : ?>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <tr>
                                        <td style="color:black;"><?= $i++; ?></td>
                                        <td style="color:black;"><?= $item->username; ?></td>
                                        <td style="color:black;"><?= $item->password; ?></td>
                                        <td style="color:black;">
                                            <a href="<?= site_url('data-admin/edit/' . $item->id_admin) ?>" class="btn btn-sm btn-success m-1">Edit</a>
                                            <a href="<?= site_url('data-admin/delete/' . $item->id_admin) ?>" class="btn btn-sm btn-danger m-1">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>